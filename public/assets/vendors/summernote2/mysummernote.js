$('#summernote').summernote({
    placeholder: 'Hallo selamat menulis',
    height: 500,
    toolbar: [
        ['font style', [
            'undo', 'redo', 'fontname', 'fontsize', 'color', 
            'bold', 'italic', 'underline', 'strikethrough', 
            'superscript', 'subscript', 'clear'    
        ]],
        ['insert', ['link', 'picture', 'video', 'file', 'summernoteGallery', 'table']],
        ['paragraph style', ['style', 'ol', 'ul', 'paragraph', 'height']],
        ['view', ['codeview']]
    ],
    summernoteGallery: {
        source: {
            url: base_url+'gallery/getGalleryJson?website_id='+website_id,
            responseDataKey: 'data',
            // nextPageKey: 'links.next',
        },
        modal: {
            loadOnScroll: true,
            noImageSelected_msg: 'Mohon pilih file terlebih dahulu',
        },
        buttonLabel: '<i class="fa fa-file-image-o"></i> Galeri',
    },
    callbacks: {
        onInit: function() {
            $('.note-btn.btn[aria-label="File"]').html('<i class="fa fa-file"></i>')
        },
        onFileUpload: function(file) {
            summernoteUploadFile(file[0]);
        },
        onImageUpload: function(file) {
            initCompressImage(file[0]);
        },
    }

});

var summernote_originalImage       = null
let summernote_compressedImageBlob
let summernote_resizingFactor      = 95
let summernote_quality             = 85
let summernote_maxFilesize         = 180000

function initCompressImage(file) {
    summernote_originalImage = new Image()
    const types = ["image/jpeg", "image/png"]

    if(!types.includes(file.type)) return false
    if(file.size <= summernote_maxFilesize){
        return summernoteUploadFile(filefile)
    }

    $('#alertBody').html('<div class="mb-2 p-1 pl-2 pr-2" style="background: #f8f2bc;color: #c1780d;font-weight: 600;border-radius: 4px;">Compressing image . .</div>')

    if(file.type=="image/jpeg"){
        var reader      = new FileReader()
        reader.onload   = function(e){
            summernote_originalImage.src   = e.target.result
        }
        reader.readAsDataURL(file)

        summernote_originalImage.addEventListener("load", () => {
            return compressJPEG(summernote_originalImage, summernote_resizingFactor, summernote_quality)
        })

    }else if(file.type=="image/png"){
        
        var instance = new pngcrush()
        instance.exec(file, function (event) {
            if(event.data.line=="   Not a PNG file..") {
                var reader      = new FileReader()
                reader.onload   = function(e){
                    summernote_originalImage.src   = e.target.result
                }
                reader.readAsDataURL(file);

                summernote_originalImage.addEventListener("load", () => {
                    return compressJPEG(summernote_originalImage, summernote_resizingFactor, summernote_quality)
                });
                return false
            }
        }).then(function (event) {
            outputFile = new Blob([event.data.data], { type: 'image/png' })
            summernoteUploadFile(outputFile)
        })

    }

}

    
    function compressJPEG(imgToCompress, summernote_resizingFactor, summernote_quality) {
      var r_summernote_resizingFactor  = summernote_resizingFactor / 100
      var r_summernote_quality         = summernote_quality / 100
      // showing the compressed image
      const canvas          = document.createElement("canvas");
      const context         = canvas.getContext("2d");
    
      const originalWidth   = imgToCompress.width;
      const originalHeight  = imgToCompress.height;
    
      const canvasWidth     = originalWidth * r_summernote_resizingFactor;
      const canvasHeight    = originalHeight * r_summernote_resizingFactor;
    
      canvas.width          = canvasWidth;
      canvas.height         = canvasHeight;

      context.drawImage(
        imgToCompress,
        0,
        0,
        originalWidth * r_summernote_resizingFactor,
        originalHeight * r_summernote_resizingFactor
      );
    
      // reducing the summernote_quality of the image
      canvas.toBlob(
        (blob) => {
          if (blob) {
            console.log(bytesToSize(blob.size))
            if(blob.size > summernote_maxFilesize){
                return compressJPEG(imgToCompress, summernote_resizingFactor-5, summernote_quality)
            }else{
                return summernoteUploadFile(blob)
            }
          }
        },
        "image/jpeg",
        r_summernote_quality
      );
      
    }
    
    // source: https://stackoverflow.com/a/18650828
    function bytesToSize(bytes) {
      const sizes = ["Bytes", "KB", "MB", "GB", "TB"];
      if (bytes === 0) return "0 Byte";
      const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
      return Math.round(bytes / Math.pow(1024, i), 2) + " " + sizes[i];
    }



function summernoteUploadFile(file) {
    let data = new FormData();
    data.append("website_id", website_id);
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: base_url+"gallery/upload_file",
        cache: false,
        contentType: false,
        processData: false,
        xhr: function() { //Handle progress upload
            let myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
            return myXhr;
        },
        success: function(response) {
            let tampilkanLink = $('#tampilkanLink:checked').val()=='ya' ? true : false
            $('#tampilkanLink:checked').prop('checked', false)
            if(response.status == "berhasil") {
                console.log(file.type)
                let listMimePDF     = ['application/pdf']
                let listMimeImg     = ['image/png', 'image/jpeg', 'image/webp', 'image/gif', 'image/svg']
                let listMimeAudio   = ['audio/mpeg', 'audio/ogg']
                let listMimeVideo   = ['video/mpeg', 'video/mp4', 'video/webm']
                let elem

                if (!tampilkanLink && listMimeImg.indexOf(file.type) > -1) { // Picture
                    $('#summernote').summernote('editor.insertImage', response.file_name)

                } else if (!tampilkanLink && listMimeAudio.indexOf(file.type) > -1) { // Audio
                    elem = document.createElement("audio");
                    elem.setAttribute("src", response.file_name);
                    elem.setAttribute("controls", "controls");
                    elem.setAttribute("preload", "metadata");
                    $('#summernote').summernote('editor.insertNode', elem)

                } else if (!tampilkanLink && listMimePDF.indexOf(file.type) > -1) { // PDF
                    elem = document.createElement("embed");
                    elem.setAttribute("src", response.file_name);
                    elem.setAttribute("style", "width: 100%; height: 600px");
                    elem.setAttribute("preload", "metadata");
                    $('#summernote').summernote('editor.insertNode', elem)

                } else if (!tampilkanLink && listMimeVideo.indexOf(file.type) > -1) { //Video
                    elem = document.createElement("video");
                    elem.setAttribute("src", response.file_name);
                    elem.setAttribute("controls", "controls");
                    elem.setAttribute("preload", "metadata");
                    $('#summernote').summernote('editor.insertNode', elem);

                } else { // Other file type
                    elem = document.createElement("a");
                    let linkText = document.createTextNode(file.name);
                    elem.appendChild(linkText);
                    elem.title = file.name;
                    elem.href = response.file_name;
                    $('#summernote').summernote('editor.insertNode', elem);

                }
            }
        }
    });
}

function progressHandlingFunction(e) {
    if (e.lengthComputable) {
        $('#alertBody').html('<div class="mb-2 p-1 pl-2 pr-2" style="background: #f8f2bc;color: #c1780d;font-weight: 600;border-radius: 4px;">'+(parseInt(e.loaded / e.total * 100)) + '% Uploaded. Mohon tunggu. .</div>')

        if (e.loaded === e.total) {
            $('#alertBody').html('<div class="mb-2 p-1 pl-2 pr-2" style="background: #a6ffaa;color: #249429;font-weight: 600;border-radius: 4px;">Upload Selesai, mohon tunggu</div>')
        }
    }
}

var insertLink  = setInterval(() => {
    if($('.modal.note-modal[aria-label="Insert Link"][aria-modal="true"]').length) {
        $('.modal.note-modal[aria-label="Insert Link"][aria-modal="true"]').addClass('demo-panel modal--panel modal--right is-active is-animate')
        $('.modal.note-modal[aria-label="Insert Link"][aria-modal="true"] .modal-content .modal-header').html('<div class=".modal-title"><strong>LINK</strong><br><small>Masukkan link dibawah ini</small></div><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>')
        $('.modal.note-modal[aria-label="Insert Link"][aria-modal="true"] .btn.btn-primary').addClass('button button--primary');
        clearInterval(insertLink)
    }
}, 1000);    

var insertGambar  = setInterval(() => {
    if($('.modal.note-modal[aria-label="Insert Image"][aria-modal="true"]').length) {
        $('.modal.note-modal[aria-label="Insert Image"][aria-modal="true"]').addClass('demo-panel modal--panel modal--right is-active is-animate')
        $('.modal.note-modal[aria-label="Insert Image"][aria-modal="true"] .modal-content .modal-header').html('<div class=".modal-title"><strong>GAMBAR</strong><br><small>Masukkan link gambar atau upload gambar dibawah ini</small></div><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>')
        $('.modal.note-modal[aria-label="Insert Image"][aria-modal="true"] .btn.btn-primary').addClass('button button--primary');
        clearInterval(insertGambar)
    }
}, 1000);    

var insertVideo  = setInterval(() => {
    if($('.modal.note-modal[aria-label="Insert Video"][aria-modal="true"]').length) {
        $('.modal.note-modal[aria-label="Insert Video"][aria-modal="true"]').addClass('demo-panel modal--panel modal--right is-active is-animate')
        $('.modal.note-modal[aria-label="Insert Video"][aria-modal="true"] .modal-content .modal-header').html('<div class=".modal-title"><strong>VIDEO</strong><br><small>Masukkan url video</small></div><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>')
        $('.modal.note-modal[aria-label="Insert Video"][aria-modal="true"] .btn.btn-primary').addClass('button button--primary');
        clearInterval(insertVideo)
    }
}, 1000);    

var insertFile  = setInterval(() => {
    if($('.modal.note-modal[aria-label="Insert File"][aria-modal="true"]').length) {
        $('.modal.note-modal[aria-label="Insert File"][aria-modal="true"]').addClass('demo-panel modal--panel modal--right is-active is-animate')
        $('.modal.note-modal[aria-label="Insert File"][aria-modal="true"] .modal-content .modal-header').html('<div class=".modal-title"><strong>FILE</strong><br><small>Masukkan url file atau upload file</small></div><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>')
        $('.modal.note-modal[aria-label="Insert File"][aria-modal="true"] .btn.btn-primary').addClass('button button--primary');
        clearInterval(insertFile)
    }
}, 1000);    


var i = setInterval(() => {
    if($('.modal.summernote-gallery[role=dialog]').length){
        $('.modal.summernote-gallery[role=dialog] .modal-content .modal-header').html('<div class=".modal-title"><strong>GALERI</strong><br><small>Pilih galeri berkas dibawah ini</small></div><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>')
        $('.modal.summernote-gallery[role=dialog]').addClass('demo-panel modal--panel is-active is-animate')
        $('.modal.summernote-gallery[role=dialog] .modal-body').css('overflow-x', 'hidden')
        $('.modal.summernote-gallery[role=dialog] .btn.btn-primary').addClass('button button--primary');
        clearInterval(i)
    }
}, 1000);
