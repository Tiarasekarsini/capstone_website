@extends('admin/template/theme')

@section('konten')
    <main class="page-content">
        <div class="container">


            <div class="page-header">
                <h1 class="page-header__title">Post</h1>
            </div>
            <div class="page-tools">
                <div class="page-tools__breadcrumbs">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs__container">
                            <ol class="breadcrumbs__list">
                                <li class="breadcrumbs__item">
                                    <a class="breadcrumbs__link" href="{{ env('APP_URL') }}">
                                        <svg class="icon-icon-home breadcrumbs__icon">
                                            <use xlink:href="#icon-home"></use>
                                        </svg>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__item active">
                                    <span class="breadcrumbs__link">Post</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="toolbox">
                <div class="toolbox__row row gutter-bottom-xs">
                    <div class="toolbox__left col-12 col-lg">
                    </div>
                    <div class="toolbox__right col-12 col-lg-auto">
                        <div class="toolbox__right-row row row--xs flex-nowrap">
                            <div class="col col-lg-auto">
                                <form class="toolbox__search" method="GET">
                                    <div class="input-group input-group--white input-group--prepend">
                                        <div class="input-group__prepend">
                                            <svg class="icon-icon-search">
                                                <use xlink:href="#icon-search"></use>
                                            </svg>
                                        </div>
                                        <input class="input" type="text" id="search_datatable" placeholder="Cari . .">
                                    </div>
                                </form>
                            </div>
                            <div class="col-auto">
                                <button class="button-add button-add--blue" id="btnmodalFormData"
                                    data-modal="#modalFormData">
                                    <span class="button-add__icon">
                                        <svg class="icon-icon-plus">
                                            <use xlink:href="#icon-plus"></use>
                                        </svg>
                                    </span>
                                    <span class="button-add__text"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <section class="section">

                <div class="table-wrapper">
                    <div class="table-wrapper__content table-orders table-collapse scrollbar-thin scrollbar-visible">
                        <table class="table table--lines" id="datatable">
                            <thead class="table__header">
                                <tr class="table__header-row">
                                    <th>
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="kelas">
                                                <span class="checkbox__marker">
                                                    <span class="checkbox__marker-icon">
                                                        <svg viewBox="0 0 14 12">
                                                            <path
                                                                d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span class="align-middle ml-2">Title</span>
                                            </label>
                                        </div>
                                    </th>
                                    <th class="table__th-sort">
                                        <span class="align-middle">Harga</span>
                                    </th>
                                    <th class="table__th-sort">
                                        <span class="align-middle">Category</span>
                                    </th>
                                    <th class="table__th-sort">
                                        <span class="align-middle">Created</span>
                                    </th>
                                    <th class="table__actions">
                                        <button class="items-more__button">
                                            <svg class="icon-icon-more">
                                                <use xlink:href="#icon-more"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-items">
                                            <div class="dropdown-items__container">
                                                <ul class="dropdown-items__list">
                                                    <li class="dropdown-items__item">
                                                        <a class="dropdown-items__link" href="javascript:;"
                                                            onclick="drawdatatable()">
                                                            <span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-refresh">
                                                                    <use xlink:href="#icon-refresh"></use>
                                                                </svg>
                                                            </span> Refresh
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-items__item">
                                                        <a class="dropdown-items__link" href="javascript:;"
                                                            onclick="hapusSelected()">
                                                            <span class="dropdown-items__link-icon">
                                                                <svg class="icon-icon-action">
                                                                    <use xlink:href="#icon-trash"></use>
                                                                </svg>
                                                            </span> Hapus
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
            </section>


        </div>


        <div class="modal modal--panel modal--right" id="modalFormData">
            <div class="modal__overlay" data-dismiss="modal"></div>
            <div class="modal__wrap">
                <div class="modal__window scrollbar-thin" data-simplebar style="max-width: 880px">
                    <form method="POST" id="formData">
                        <div class="modal__content">
                            <div class="modal__header">
                                <div class="modal__container">
                                    <h2 class="modal__title">Add Post</h2>
                                </div>
                            </div>
                            <div class="modal__body">
                                <div class="modal__container">
                                    <div id="formAlertBody" class="mb-3"></div>
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Title <sup class="text-danger">*</sup></label>
                                            <div class="input-group">
                                                <input class="input" type="text" id="title" name="title"
                                                    placeholder="Input title" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Harga <sup class="text-danger">*</sup></label>
                                            <div class="input-group">
                                                <input class="input" type="text" id="harga" name="harga"
                                                    placeholder="Input harga" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Category <sup class="text-danger">*</sup></label>
                                            <div class="input-group input-group--append">
                                                <select class="input input--fluid" name="category_id" id="category_id"
                                                    data-placeholder="Pilih Operator" required>
                                                    <option value="">Pilih Category</option>
                                                    @foreach ($categorys as $category)
                                                        <option value="<?= $category->id ?>"><?= $category->category ?>
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Thumbnail <sup class="text-danger">*</sup></label>
                                            <div id="bodyThumbnail"></div>
                                            <div class="input-group">
                                                <input type="file" id="thumbnail" name="thumbnail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row--md">
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Body <sup class="text-danger">*</sup></label>
                                            <div class="input-group">
                                                <textarea class="summernote" id="body" name="body" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal__footer">
                                <div class="modal__container">
                                    <div class="modal__footer-buttons">
                                        <div class="modal__footer-button">
                                            <button id="btnSimpan" class="button button--primary button--block"><span
                                                    class="button__text">Save</span>
                                            </button>
                                        </div>
                                        <div class="modal__footer-button">
                                            <button type="button" class="button button--secondary button--block"
                                                data-dismiss="modal"><span class="button__text">Cancel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </main>
@endsection

@section('javascript-konten')
    <script>
        $('.summernote').summernote({
            placeholder: 'Hallo selamat menulis',
            height: 200,
            toolbar: [
                ['font style', [
                    'undo', 'redo', 'fontname', 'fontsize', 'color',
                    'bold', 'italic', 'underline', 'strikethrough',
                    'superscript', 'subscript'
                ]],
                ['paragraph style', ['style', 'ol', 'ul', 'paragraph', 'height']],
                ['view', ['codeview']]
            ],
        })

        var dataTable = null
        $('#search_datatable').on('keyup change', function() {
            dataTable.search($(this).val()).draw()
        })

        function datatableChangeLength() {
            var x = setInterval(function() {
                drawdatatable()
                clearInterval(x)
            }, 400)
        }

        function showModalEdit(id) {
            $.ajax({
                url: "{{ env('APP_URL') }}/admin/mypost/getById/" + id,
                type: "post",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {},
                error: function(a, b, c) {},
                success: function(res) {
                    if (res.status && res.status == "berhasil") {
                        post_id = id
                        $('#title').val(res.post.title)
                        $('#harga').val(res.post.harga)
                        $('#category_id').val(res.post.category_id)
                        $('#bodyThumbnail').html('<img src="{{ env('APP_URL') }}/' + res.post.thumbnail +
                            '" class="mb-2" style="max-width: 300px; max-height: 200px">')
                        $('#thumbnail').prop('required', false)
                        $('#body').val(res.post.body)
                        $("#body.summernote").summernote("code", res.post.body);

                        $('#modalFormData').addClass('is-active is-animate')
                        $('#modalFormData .modal__title').html("Edit Post")
                        return;
                    }
                    return alertModal(res.status, res.pesan)
                }
            })
        }

        drawdatatable()

        function drawdatatable() {
            $('#datatable').DataTable().destroy()
            dataTable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                dom: '<"top">rt<"bottom">lip<"clear">',
                paging: true,
                order: [
                    [1, "asc"]
                ],
                ajax: {
                    url: "{{ env('APP_URL') }}/admin/mypost/getDatatable",
                    type: "post",
                    data: {
                        _token: '{{ csrf_token() }}'
                    }
                },
                fnInitComplete: function(settings, json) {
                    datatablePaginationClass()
                },
                drawCallback: function(settings) {
                    datatablePaginationClass()
                },
                columnDefs: [{
                        orderable: false,
                        targets: "_all"
                    },
                    {
                        width: "20",
                        targets: [4]
                    }
                ]
            })
        }


        var post_id = 2
        $('#btnmodalFormData').click(function() {
            $('#formData').each(function() {
                this.reset();
            });
            $('#modalFormData .modal__title').html("Add Post")
            $('#bodyPreview').html(null)
            $('#thumbnail').prop('required', true)
            $('#bodyThumbnail').html(null)
            $("#body.summernote").summernote("code", null);

            post_id = 0
            imageBlob = null

        })

        var validate = $("#formData").validate()

        $('#formData').submit(function(e) {
            e.preventDefault()
            if (!this.checkValidity()) return false

            var btnSimpan = $('#btnSimpan').html()
            var formData = new FormData(this)
            formData.append('_token', '{{ csrf_token() }}')

            $.ajax({
                url: "{{ env('APP_URL') }}/admin/mypost/" + (post_id ? 'doUpdate/' + post_id : 'doAdd'),
                type: "post",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.input-error.error').remove()
                    $('#formAlertBody').html(null)
                    $('#btnSimpan').prop('disabled', true).html('Tunggu . .')
                },
                error: function(a, b, c) {
                    var res = a.responseJSON

                    $('#btnSimpan').prop('disabled', false).html(btnSimpan)
                    if (res.message && res.errors) {
                        $.each(res.errors, function(i, v) {
                            var errors = []
                            $.each(v, function(ii, vv) {
                                errors.push('<li>' + vv + '</li>')
                            })

                            $('<div/>').addClass('input-error error text-danger').html(
                                    '<ol class="pl-3">' + errors.join('') + '</ol>')
                                .insertAfter($('#' + i).parent())
                        })
                        return alertShow("gagal", res.message, '#formAlertBody')
                    }
                },
                success: function(res) {


                    $('#btnSimpan').prop('disabled', false).html(btnSimpan)

                    alertModal(res.status, res.pesan, (post_id ? false : '#modalFormData'))

                    post_id = 0
                    $('#modalFormData').removeClass('is-animate')
                    $('#formData').each(function() {
                        this.reset();
                    });
                    dataTable.draw(false)
                }
            })
            return false
        })


        var posts_id = []

        function hapus(post_id) {
            posts_id = []
            posts_id.push(post_id)
            return doHapus(posts_id)
        }

        function hapusSelected() {
            posts_id = []
            $('.posts_id:checked').each(function() {
                posts_id.push($(this).val())
            })
            if (posts_id.length == 0) return alertModal('danger', "Please select data to delete")
            return doHapus(posts_id)
        }

        function doHapus(posts_id) {
            if (!confirm('Are you sure for delete data?')) return false
            $.ajax({
                url: "{{ env('APP_URL') }}/admin/mypost/doDelete",
                type: "post",
                data: {
                    posts_id: posts_id,
                    _token: '{{ csrf_token() }}'
                },
                beforeSend: function() {},
                error: function(a, b, c) {},
                success: function(res) {
                    alertModal(res.status, res.pesan)

                    $('#formData').each(function() {
                        this.reset()
                    });
                    dataTable.draw(false)
                    posts_id = []
                }

            })
        }
    </script>
@endsection
