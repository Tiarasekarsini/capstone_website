@extends('admin/template/theme')

@section('javascript')
<script type="text/javascript">
    var website_id  = 1,
        base_url    = "{{ config('APP_URL') }}"
        resource_url= "{{ config('APP_URL') }}"
</script>

<script src="{{ config('APP_URL') }}/assets/arion/js/photoswipe/photoswipe-lightbox.esm.min.js" type="module"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/photoswipe/photoswipe.esm.min.js" type="module"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/gsap/gsap.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/gsap/ScrollToPlugin.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/gsap/ScrollTrigger.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/vendor.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/js/common.js"></script>
<!--<script src="{{ config('APP_URL') }}/assets/arion/vendor/datatable/js/dataTables.bootstrap4.min.js"></script>-->
<script src="{{ config('APP_URL') }}/assets/arion/vendor/datatable/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>


<script src="{{ config('APP_URL') }}/assets/arion/vendor/jqueryFormValidation/jquery.validate.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/vendor/jqueryFormValidation/additional-methods.min.js"></script>
<script src="{{ config('APP_URL') }}/assets/arion/vendor/jqueryFormValidation/messages_id.min.js"></script>

<script src="{{ config('APP_URL') }}/assets/arion/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- summernote-gallery -->
<script src="{{ config('APP_URL') }}/assets/vendors/summernote2/summernote-file.js" type="text/javascript"></script>
<script src="{{ config('APP_URL') }}/assets/vendors/summernote2/summernote-gallery.min.js" type="text/javascript"></script>
<script src="{{ config('APP_URL') }}/assets/vendors/summernote2/mysummernote.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/lang/summernote-id-ID.min.js" integrity="sha512-viTUgqrk+5XInorfp/0NMZSI3mSLwBb+mKXfce4CiIhW8D9b1+lq+RxyahOycN1y+VkgGC7vwCFFB6GQHFhcsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Sweatalert-->
<script src="{{ config('APP_URL') }}/assets/vendors/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
<!-- Toaster -->
<script src="{{ config('APP_URL') }}/assets/vendors/toastr/toastr.min.js" type="text/javascript"></script>


<script>
    var datatablesLanguage = "{{ config('APP_URL') }}/assets/arion/vendor/datatable/js/language.dataTables.json');?>"
    function alertShow(status, text, alertBody='#alert-body'){
        $(alertBody).html('<div class="alert '+(status=='berhasil' ? 'alert-success' : 'alert-danger')+' alert-dismissible fade show" role="alert">'
                                +text
                                +'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'
                                    +'<span aria-hidden="true">&times;</span>'
                                +'</button>'
                            +'</div>')
    }

    function alertModal(status, text, showMoreModal = false){

        $('#iconModalAlert-fail').hide()
        $('#iconModalAlert-success').hide()
        $('#btnMoreModal').html('<span class="button__text"></span>')
        $('#btnMoreModal').attr("data-modal", null)
        $('#btnMoreModal').prop("disabled", true)

        if(status=='berhasil'){
            $('#iconModalAlert-success').show()
        }else{
            $('#iconModalAlert-fail').show()
        }
        
        if(showMoreModal){
            $('#btnMoreModal').attr("data-modal", showMoreModal)
            $('#btnMoreModal').prop("data-modal", showMoreModal)
            $('#btnMoreModal').removeAttr("disabled")
            $('#btnMoreModal').html('<span class="button__text"></span> Tambahkan Lagi')
        }

        $('#textModalAlert').html(text)
        $('#modalAlert').addClass('is-active is-animate')
    }
    function datatablePaginationClass(){
        $('.dataTables_paginate .paginate_button').addClass('btn btn-sm btn-outline-primary')
        $('.dataTables_paginate .paginate_button').css('border-radius', '2px')
        $('.dataTables_paginate .paginate_button').css('margin-right', '2px')
        $('.dataTables_info').css('padding-top', '0')
        $('.dataTables_info').css('float', 'left')
        $('.dataTables_paginate').css('float', 'right')
    }

    $('.fp--datepicker').flatpickr({
        enableTime: false,
        dateFormat: "Y-m-d",
    })

</script>
@endsection