function btnSaveChange(text, disabled=false){
    $('#btnAddMenu').html(text);
    if(disabled){
        $('#btnAddMenu').prop('disabled', true);
    }else{
        $('#btnAddMenu').removeAttr('disabled');
    }
}
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

$.validator.setDefaults({
    submitHandler: function () {
        btnSaveChange("Tunggu sebentar . . .", true);
        $.ajax({
            type: "POST",
            url: baseUrl+"mywebsite/addmenu?token="+baseToken,
            data: {
                "website_id"    : idweb,
                "menu_id"       : $('#menu_id').val()==null ? "" : $('#menu_id').val(),
                "nama"          : $('#nama').val(),
                "url"           : $('#url').val(),
                "link_eksternal": $('#link_eksternal').is(':checked') ? 1 : null,
                "target_blank"  : $('#target_blank').is(':checked') ? 1 : null
            },
            success: function(data) {
                btnSaveChange("Selesai");

                $('#addWebsite').modal("hide");
                
                data = $.parseJSON(data);
                
                var elem = '<li id="menu_'+data[1].id+'"><div style="font-weight:700">'+data[1].nama+' <small class="text-primary">'+data[1].url+'<br><a href="javascript:;" class="btn-success" onclick="ubahmenu('+data[1].id+')">Ubah</a> <a href="javascript:;" class="btn-danger" onclick="deletemenu('+data[1].id+')">Hapus</a></small></div></li>';
                if(data[0]==1){
                    $('#sTree2').append(elem);
                    Toast.fire({
                        type: 'success',
                        position : 'top',
                        title: 'Menu baru berhasil ditambahkan!'
                    });

                }else{
                    location.reload();
                }
                
                $('#menu_id').val(null);
                $('#nama').val(null);
                $('#url').val(null)
                
                hideForm();
            }
        });
    }
});


$('#formMenu').validate({
    rules: {
        nama: {
            required: true,
        },
        url: {
            required: true,
        },

    },
    messages: {
        nama: {
            required: "Silahkan masukkan Nama Menu terlebih dahulu.",
        },
        url: {
            required: "Silahkan masukkan Url Menu terlebih dahulu.",
        },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});

function ubahmenu(id){
    $.ajax({
        type    : "POST",
        url     : baseUrl+"/mywebsite/editmenu?token="+baseToken,
        data    : {
                    "website_id"         : idweb,
                    "menu_id": id,
                },
        success : function(data) {
            data = $.parseJSON(data);

            $('#menu_id').val(data.id);
            $('#nama').val(data.nama);
            $('#url').val(data.url);
            
            if(data.link_eksternal==1){
                $('#link_eksternal').prop("checked", "checked");
                changePlaceHolder();
            }else{
                $('#link_eksternal').prop("checked", false);
            }
            if(data.target_blank==1){
                $('#target_blank').prop("checked", "checked");
            }else{
                $('#target_blank').prop("checked", false);
            }

            showForm();
        }
    });
}

function deletemenu(id){
    if(!confirm('Apakah anda yakin untuk menghapus ?')){
        return;
    }
    $.ajax({
        type    : "POST",
        url     : baseUrl+"/mywebsite/deletemenu?token="+baseToken,
        data    : {
                    "website_id"         : idweb,
                    "id": id,
                },
        success : function(data) {
            data = $.parseJSON(data);
            location.reload();
            
        }
    });
}

$('#link_eksternal').click(function(){
   changePlaceHolder(); 
});

function changePlaceHolder(){
    if ($('#link_eksternal').is(':checked')) {
        $('#url').attr("placeholder", "Example : https://labura.go.id/page/profil");
    }else{
        $('#url').attr("placeholder", "Example : page/visimisi");
    }
}

$('#btnSimpan').on('click', function(){ 
    $('#btnSimpan').html('Tunggu Sebentar . . .');
    $('#btnSimpan').prop('disabled', true);
    $.ajax({
        type    : "POST",
        url     : baseUrl+"/mywebsite/simpan_urutan?token="+baseToken,
        data    : {
                    "data": $('#sTree2').sortableListsToArray(),
                },
        success : function(data) {
            $('#btnSimpan').html('Simpan');
            $('#btnSimpan').removeAttr('disabled');
            
            Toast.fire({
                type: 'success',
                position : 'top',
                title: 'Berhasil disimpan!'
            });

        }
    });

});

$('#btnBatal').on('click', function(){
    location.reload();
});

$('#btnMenuBaru').on('click', function(){   
    showForm();
});

$('#btnBatalAdd').on('click', function(){
    hideForm();
});


function showForm(){
    $('#body_add_menu').show(); 
    $('#btnMenuBaru').hide(); 
}
function hideForm(){
    $('#body_add_menu').hide(); 
    $('#btnMenuBaru').show(); 
    $('#menu_id').val(null);
    $('#nama').val(null);
    $('#url').val(null)

}

// Class definition
var KTFormControls = function () {
    // Private functions
    var default_menu = function () {
    var optionsA = {
            maxLevels       : 5,
            listsCss        : {'background-color':'silver', 'border':'1px solid white','padding':'7px'},
    		placeholderCss  : {'background-color': '#ff8', 'padding':'7px'},
    		hintCss         : {'background-color':'#af3',},
            currElCss       : {'background-color':'green', 'color':'#fff'},
            hintWrapperCss  : {'background-color':'#fff'},
            
    		onDragStart: function(e, el){
        	    el.css('list-style-type','none');
        	    el.css('padding-left','50px');
        	    el.css('margin', '5px');
        	    el.css('padding', '5px');
        	    el.css('background-color', '#e9f0ff');
        	    el.css('border-left', '30px solid rgb(198 233 205)');
        	},
        	
    		onChange: function( el ){
    			console.log($('#bodyUrl').sortableListsToArray());
        	    el.css('border-left', '30px solid rgb(198 233 205)');
    		},
    		
    		complete: function( el ){
        	    el.css('list-style-type','none');
        	    el.css('padding-left','50px');
        	    el.css('margin', '5px');
        	    el.css('padding', '5px');
        	    el.css('border-left', '30px solid#f3f3f3');
        	    el.css('background-color', '#fff');
    			console.log( 'complete' );
    		},
    		opener: {
    			active: true,
    			as: 'html',  // if as is not set plugin uses background image
    			close: '<img src="'+baseUrl+'assets/plugins/jquery-sortable-lists/imgs/Remove2.png">',  // or 'fa-minus c3'
    			open: '<img src="'+baseUrl+'assets/plugins/jquery-sortable-lists/imgs/Add2.png">',  // or 'fa-plus'

    			openerCss: {
                    'float': 'left',
    				'display': 'inline-block',
                    'margin-left': '-28px',
                    'margin-right': '5px',
                    'font-size': '1.1em',
                    'position': 'absolute',
    
    			}
    		},
    		ignoreClass: 'clickable'
    	}
    	var options = {
            listsCss        : {'background-color':'silver', 'border':'1px solid white','padding':'7px'},
    		placeholderCss  : {'background-color': '#ff8', 'padding':'7px'},
    		hintCss         : {'background-color':'#af3',},
            currElCss       : {'background-color':'green', 'color':'#fff'},
            hintWrapperCss  : {'background-color':'#fff'},
    		onDragStart: function(e, el)
        	{
        	    el.css('padding','7px');
        	    el.css('padding-left','50px');
        	},
    		onChange: function( cEl )
    		{
        	    cEl.css('padding','0');
        	    cEl.css('padding-left','50px');
    			console.log( 'onChange' );
    		},
    		complete: function( cEl )
    		{
        	    cEl.css('padding','0');
        	    cEl.css('padding-left','50px');
    			console.log( 'complete' );
    		},

    		opener: {
    			active: true,
    			as: 'html',  // if as is not set plugin uses background image
    			close: '<img src="'+baseUrl+'assets/plugins/jquery-sortable-lists/imgs/Remove2.png">',  // or 'fa-minus c3'
    			open: '<img src="'+baseUrl+'assets/plugins/jquery-sortable-lists/imgs/Add2.png">',  // or 'fa-plus'
    			openerCss: {
    				'display': 'inline-block',
    				// 'width': '18px', 'height': '18px',
    				'float': 'left',
    				'margin-left': '-35px',
    				'margin-right': '5px',
    				//'background-position': 'center center', 'background-repeat': 'no-repeat',
    				'font-size': '1.1em'
    			}
    		},
    		ignoreClass: 'clickable'
    	};
        $('#sTree2').sortableLists( optionsA );
    }

    return {
        // public functions
        init: function() {
            default_menu();
        }
    };
}();

jQuery(document).ready(function() {
    KTFormControls.init();
});