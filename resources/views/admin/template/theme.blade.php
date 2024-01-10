<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffffff" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/arion/css/vendor.min.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/arion/css/common.css" />

    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/arion/vendor/datatable/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/arion/vendor/bootstrap-datepicker/css/datepicker.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/arion/vendor/bootstrap-datepicker/css/datepicker.css">

    <link rel=icon href="<?=isset($pengaturan_situs->logo_favicon) && $pengaturan_situs->logo_favicon ? resource_url($pengaturan_situs->logo_favicon) : null;?>" sizes="20x20" type="image/png">

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <style>
        .toggle-sidebar:hover {
            background-color: #690101;
        }
        .sidebar__logo, .sidebar__top {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            background: #7a0606;
            color: #fff;
        }
        .header {
            border-bottom: 0;
            box-shadow: 0 0 12px 12px var(--background-primary-color);
            background: #7a0606;
            color: #fff;
        }
        .profile-dropdown__item {
            color: var(--text-primary-color);
        }
        .profile-dropdown__item:hover {
            color: var(--text-primary-color);
        }
        .header__profile-toggle:hover{
            color: #fff;
        }
        div.dataTables_wrapper div.dataTables_filter input {
            margin-left: 0.5em;
            display: inline-block;
            width: auto;
            border-bottom: 1px solid var(--border-grey-color);
        }
        .miw-100{
            min-width: 100px;
        }
        .miw-200{
            min-width: 200px;
        }
        .miw-300{
            min-width: 300px;
        }
        .miw-400{
            min-width: 400px;
        }
        .miw-500{
            min-width: 500px;
        }

        .maw-100{
            max-width: 100px;
        }
        .maw-200{
            max-width: 200px;
        }
        .maw-300{
            max-width: 300px;
        }
        .maw-400{
            max-width: 400px;
        }
        .maw-500{
            max-width: 500px;
        }
        .maw-600{
            max-width: 600px;
        }
        .table-pw{
            max-height: 52px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
        div.table-pw2 {
            max-height: 52px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .dataTables_paginate {
            list-style: none;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            min-height: 2.6667rem;
            padding: 0;
            margin: 0;
            border-radius: var(--radius-base);
            background-color: var(--background-secondary-color);
            -webkit-filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
            filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
        }
        .paginate_button  {
            color: var(--grey-color-4);
            -webkit-transition: var(--t-base);
            transition: var(--t-base);
            border:0;
            padding: 0.4rem 0.5rem!important;
            min-width: 36px;
            margin: 3px 2px;
            border-radius: var(--radius-base);
            -webkit-transition: none;
            transition: none;
            border-radius: 8px!important;
        }
        .dataTables_paginate  {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .paginate_button.current {
            background-color: var(--primary-color)!important;
            color: var(--white-color)!important;
            -webkit-filter: drop-shadow(0 8px 16px rgba(0,129,255,.2))!important;
            filter: drop-shadow(0 8px 16px rgba(0,129,255,.2))!important;
        }
        .paginate_button.previous {
            border-right: 1px solid var(--background-secondary-color);
            border-radius: var(--radius-base) 0 0 var(--radius-base);
        }
        .label--secondary {
            background-color: var(--grey-light-color-3);
        }
        .note-editor.note-airframe .note-statusbar, 
        .note-editor.note-frame .note-statusbar {
            background-color: hsl(0deg 0% 50.2% / 0%);
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            border-top: 1px solid rgb(255 255 255 / 20%);
        }
        .modal--panel .modal__window.modal--lg {
            max-width: 760px;
        }
        .modal--panel .modal__window.modal--xl {
            max-width: 1180px;
        }
        .modal.is-animate {
            backdrop-filter: blur(3px);
        }
        div.dt-buttons {
            margin-bottom: 8px;
        }
        div.dt-buttons>.dt-button:first-child, div.dt-buttons>div.dt-button-split .dt-button:first-child,
        div.dt-buttons>.dt-button, div.dt-buttons>div.dt-button-split .dt-button {
            margin-left: 0;
            color: var(--placeholder-color);
            color: var(--text-primary-color);
            border: 0;
            margin-bottom: 0;
            font-size: 16px;
            padding: 0.55em 1em;
            border-radius: var(--radius-base)!important;
            background: var(--background-secondary-color);
            background-color: var(--background-secondary-color);
            -webkit-filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
            filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
            webkit-filter: unset;
            filter: unset;
        }
        div.dt-buttons>.dt-button:hover:not(.disabled), div.dt-buttons>div.dt-button-split .dt-button:hover:not(.disabled) {
            border: 0;
            background-color: var(--control-background-hover);
            background: var(--control-background-hover);
            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,StartColorStr="rgba(153, 153, 153, 0.1)", EndColorStr="rgba(0, 0, 0, 0.1)");
        }

        div.dt-button-collection {
            font-size: 16px;
            position: absolute;
            top: 0;
            left: 0;
            width: 200px;
            margin-top: 3px;
            margin-bottom: 3px;
            padding: 0.75em 0;
            border: 0;
            background-color: var(--background-secondary-color);
            overflow: hidden;
            z-index: 2002;
            border-radius: 5px;
            box-shadow: 3px 4px 10px 1px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            color: var(--text-primary-color);
        }
        html[data-theme=dark] div.dt-buttons>.dt-button:first-child, div.dt-buttons>div.dt-button-split .dt-button:first-child{
            -webkit-filter: none;
            filter: none;
        }
        .table-wrapper__content .table {
            width: 100%!important;
        }
		table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
			margin-right: 0.5em;
			display: inline-block;
			color: rgb(255 94 6);
			content: "+";
			padding: 1px 3px;
			border-radius: 100%;
			font-size: 24px;
			position: absolute;
			left: 10px;
			border: 1px solid#ff5c02;
			line-height: 17px;
            font-family: serif;
		}
		table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before {
			content: "-";
			padding: 6px 3px 9px 3px;
			color: #fff;
			background: rgb(255 94 6);
            font-family: monospace;
            line-height: 4px;
		}
        .country-legend__marker {
            margin-right: 2px;
        }
        .sidebar__logo-icon {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            min-width: 40px;
            width: 40px;
            margin-right: 5px;
            margin-left: -2px;
        }

        .sidebar__container {
            border-right: 0;
        }
        .header {
            border-bottom: 0;
            box-shadow: 0 0 12px 12px var(--background-primary-color);
        }
        
        .swal2-popup{
            flex-direction: column-reverse;
            flex-wrap: nowrap;
            align-content: space-between;
            justify-content: space-around;
            align-items: center;
        }
        body::-webkit-scrollbar, #sectionThumbnail::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        body::-webkit-scrollbar {
            width: 8px;
        }
        body::-webkit-scrollbar-track, #sectionThumbnail::-webkit-scrollbar-track {
            background: unset; 
        }
        body::-webkit-scrollbar-thumb, #sectionThumbnail::-webkit-scrollbar-thumb {
            background: var(--scrollbar-color); 
            border-radius: 10px;
        }
        body::-webkit-scrollbar-thumb:hover, #sectionThumbnail::-webkit-scrollbar-thumb:hover {
            background: var(--text-secondary-color); 
        }

        #sTree2, #sTreePlus { 
            list-style-type: none;
            margin:0;
            padding:0;
            margin-left: 0;
        }

        #sTree2 li ul {
            padding-left:10px;
        }
        #sTree2 li, #sTreePlus li, ul#s-l-base li {
            list-style-type:none;
            margin: 5px;
            padding: 5px;
            cursor: pointer;
            position:relative;
            background: var(--background-secondary-color);
            border: 0;
            border-left: 30px solid var(--text-primary-reverse);
        }

        /* .select2-container--open .select2-dropdown--below {
            width: fit-content!important;
        } */

        .img-thumbnail {
            background-color: unset; 
            border: 0; 
        }
        .selected-img {
            background-color: unset!important;
        }
        .img-item .fa-check {
            position: absolute !important;
            top: 7px !important;
            right: 19px !important;
            font-size: 12px !important;
            padding: 4px !important;
            border: 3px solid#8bc34a;
            border-radius: 100%;
            color: #8bc34a !important;
        }
        input[type=file]{
            display: block;
        }
        .paginate_button.current{
            background: var(--background-primary-color);
            color: var(--text-primary-color);
        }
        .table-wrapper__content .table {
            margin-bottom: 19px!important;
        }
        .dropdown-items {
            top: unset;
        }
        .table__header .table__header-row th {
            vertical-align: middle;
            font-weight: 600;
        }
        .alert-primary {
            color: #e5f3ff;
            background-color: #2196f3;
        }
        .alert-success {
            color: #155724;
            background-color: #b3ffc5;
        }
        .alert-danger {
            color: #ffffff;
            background-color: #ff8080;
        }
        .alert {
            padding: 0.45rem 1.25rem;
            border:0;
        }
        .alert .close {
            line-height: 18px;
        }
        .popover, .modal-body {
            background: var(--background-secondary-color);
        }
        .popover-header, .modal-header, .modal-footer {
            background: var(--background-primary-color);
            color: var(--text-primary-color);
            border-bottom: 0;
        }
        .note-toolbar .note-btn-group button, .popover-content button  {
            color: var(--text-primary-color);
        }

        .note-editor .note-toolbar, .note-popover .popover-content {
            background: var(--background-primary-color);
        }
        .note-toolbar .btn-group-sm>.btn, .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        .note-editable .table td, .note-editable .table th {
            border: 1px solid #dee2e6;
        }
        .dropdown-toggle::after {
            display: none;
        }
        .modal-header {
            border-bottom:0;
        }
        .modal-footer {
            border: 0;
        }
        .note-modal .modal-dialog, .modal.show .modal-dialog {
            box-shadow: 0 0 30px var(--text-secondary-color);
        }
        .modal-content {
            border: 0;
        }
        .modal .modal-dialog {
            top: 10%;
        }
        .modal-backdrop.show{
            display: none;
        }
        .form-control-judul{
            border-radius: 0;
            height:auto;
            font-size: 20px;
            padding-bottom: 18px!important;
            border: 1px dashed rgb(220 220 220 / 35%);
            border-bottom:0;
        }
        .note-editor.note-airframe, .note-editor.note-frame {
            border: 1px dashed rgb(220 220 220 / 35%);
            border-top:0;
        }
        .form-control:focus {
            background-color:var(--control-background-hover);
            color: #495057;
            border: 0;
            outline: 0;
            box-shadow: unset;
        }
        .datepicker.dropdown-menu {
            z-index: 999999!important;
        }
        label.error{
            color: #ff7e7e;
            font-size: 12px;
            margin: 6px 0;
        }
        @media(max-width: 768px){
            table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
                left: -12px;
            }
        }
    </style>
</head>

<body class="page-home">

    <svg xmlns="http://www.w3.org/2000/svg" style="border: 0 !important; clip: rect(0 0 0 0) !important; height: 1px !important; margin: -1px !important; overflow: hidden !important; padding: 0 !important; position: absolute !important; width: 1px !important;"
    class="root-svg-symbols-element">
        <symbol id="icon-action" viewBox="0 0 22 22">
            <path d="M14.2 6.6H6.2V5L3 7.8L6.2 10.6V9H14.2V6.6ZM19 13.4L15.8 10.6V12.2H7.8V14.6H15.8V16.2L19 13.4Z" />
        </symbol>
        <symbol id="icon-archive" viewBox="0 0 22 22">
            <path d="M17.8571 8.76923V15.6923C17.8571 16.3043 17.6163 16.8913 17.1877 17.3241C16.759 17.7569 16.1776 18 15.5714 18H6.42857C5.82236 18 5.24098 17.7569 4.81233 17.3241C4.38367 16.8913 4.14286 16.3043 4.14286 15.6923V8.76923C3.83975 8.76923 3.54906 8.64766 3.33474 8.43128C3.12041 8.21489 3 7.9214 3 7.61538V4.15385C3 3.84783 3.12041 3.55434 3.33474 3.33795C3.54906 3.12157 3.83975 3 4.14286 3H17.8571C18.1602 3 18.4509 3.12157 18.6653 3.33795C18.8796 3.55434 19 3.84783 19 4.15385V7.61538C19 7.9214 18.8796 8.21489 18.6653 8.43128C18.4509 8.64766 18.1602 8.76923 17.8571 8.76923ZM5.28571 15.6923C5.28571 15.9983 5.40612 16.2918 5.62045 16.5082C5.83478 16.7246 6.12547 16.8462 6.42857 16.8462H15.5714C15.8745 16.8462 16.1652 16.7246 16.3796 16.5082C16.5939 16.2918 16.7143 15.9983 16.7143 15.6923V8.76923H5.28571V15.6923ZM17.8571 4.15385H4.14286V7.61538H17.8571V4.15385ZM12.7143 12.2308H9.28571C9.13416 12.2308 8.98882 12.17 8.88165 12.0618C8.77449 11.9536 8.71429 11.8069 8.71429 11.6538C8.71429 11.5008 8.77449 11.3541 8.88165 11.2459C8.98882 11.1377 9.13416 11.0769 9.28571 11.0769H12.7143C12.8658 11.0769 13.0112 11.1377 13.1183 11.2459C13.2255 11.3541 13.2857 11.5008 13.2857 11.6538C13.2857 11.8069 13.2255 11.9536 13.1183 12.0618C13.0112 12.17 12.8658 12.2308 12.7143 12.2308Z"
            />
        </symbol>
        <symbol id="icon-arrow-down" viewBox="0 0 22 22">
            <path d="M7 8H15L11 13L7 8Z" />
        </symbol>
        <symbol id="icon-attachment" viewBox="0 0 22 22">
            <path d="M7.91455 19C6.86045 19 5.87319 18.5469 5.16067 17.8245C3.77883 16.4236 3.39404 13.9787 5.33105 12.0154C6.46505 10.8659 11.01 6.25768 13.278 3.95803C14.0835 3.14169 15.1082 2.82576 16.089 3.09271C17.0534 3.35394 17.8426 4.15477 18.101 5.13194C18.3635 6.12788 18.0529 7.16708 17.2483 7.98343L9.64776 15.6897C9.21405 16.1297 8.72327 16.3901 8.23087 16.4424C7.74254 16.4946 7.27703 16.3363 6.95094 16.0056C6.3607 15.4048 6.27592 14.2774 7.2591 13.2815L12.5973 7.86914C12.8166 7.64709 13.172 7.64709 13.3913 7.86914C13.6106 8.09119 13.6106 8.45201 13.3913 8.67406L8.05233 14.0872C7.5909 14.5542 7.54851 15.0007 7.74498 15.2007C7.8314 15.2873 7.96184 15.3273 8.11266 15.3101C8.34337 15.2864 8.60669 15.1338 8.85371 14.8848L16.4542 7.17933C16.976 6.65034 17.1757 6.02828 17.0167 5.42827C16.8602 4.83642 16.3825 4.35233 15.7996 4.19314C15.2077 4.03232 14.593 4.23559 14.0713 4.76458C11.8033 7.06504 7.2591 11.6725 6.12428 12.8219C4.64381 14.3232 4.99844 16.0514 5.9539 17.0204C6.91018 17.9894 8.61321 18.3502 10.0945 16.8473L18.0415 8.78998C18.2608 8.56793 18.6162 8.56793 18.8355 8.78998C19.0548 9.01202 19.0548 9.37285 18.8355 9.59571L10.8886 17.653C9.95184 18.6016 8.90263 19 7.91455 19Z"
            />
        </symbol>
        <symbol id="icon-back-time" viewBox="0 0 22 22">
            <path d="M12.0118 4C8.21165 4 5.12022 7.04073 5.02789 10.8259V11.0009H3L6.07262 14.325L9.05974 11.0009H6.77537V10.8259C6.86684 8.00622 9.17601 5.75085 12.0118 5.75085C14.9066 5.75085 17.2534 8.10183 17.2534 11.0009C17.2534 13.8999 14.9066 16.2509 12.0118 16.2509C10.8517 16.2509 9.77959 15.871 8.91098 15.2324L7.70895 16.5163C8.89559 17.4451 10.3892 18 12.0118 18C15.8718 18 19 14.8671 19 11.0009C19 7.13463 15.8718 4 12.0118 4ZM11.1569 6.73256V11.0009C11.1569 11.1118 11.18 11.2228 11.2227 11.327C11.2663 11.4311 11.3287 11.5259 11.4074 11.6044L14.1431 14.3361C14.3851 14.1799 14.6134 14.004 14.816 13.8L12.8667 11.8545V6.73256H11.1569Z"
            />
        </symbol>
        <symbol id="icon-bell" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.31 4.757C10.31 4.757 10.314 4.764 10.319 4.782C10.312 4.767 10.309 4.758 10.31 4.757ZM11.824 6.687L11 6.425L10.176 6.687C10.168 6.69 10.155 6.695 10.137 6.703C10.078 6.729 9.978 6.777 9.858 6.851C9.611 7.003 9.329 7.234 9.113 7.564C8.634 8.297 8.635 9.072 8.635 9.38V9.4C8.635 10.049 8.462 11.135 7.933 12.405C7.58 13.255 7.127 14.04 6.786 14.579C7.214 14.645 7.668 14.698 8.045 14.726C8.2 14.738 8.348 14.749 8.49 14.76C9.36 14.827 10.042 14.88 11 14.88C11.958 14.88 12.64 14.827 13.51 14.76C13.652 14.749 13.8 14.738 13.955 14.726C14.332 14.698 14.786 14.645 15.214 14.579C14.872 14.04 14.42 13.255 14.067 12.405C13.538 11.135 13.365 10.049 13.365 9.4V9.38C13.365 9.072 13.366 8.297 12.887 7.564C12.671 7.234 12.389 7.003 12.142 6.851C12.022 6.777 11.922 6.729 11.863 6.703C11.845 6.695 11.832 6.69 11.824 6.687ZM5.791 14.373L5.796 14.376C5.792 14.374 5.791 14.373 5.791 14.373ZM16.209 14.373C16.209 14.373 16.208 14.374 16.204 14.376L16.209 14.373ZM11.681 4.782C11.686 4.764 11.69 4.757 11.69 4.757C11.691 4.758 11.688 4.767 11.681 4.782ZM10.011 3.4C10.467 3 10.888 3 11 3C11.112 3 11.533 3 11.989 3.4C12.446 3.8 12.522 4.6 12.522 4.6C12.522 4.6 13.854 5.023 14.728 6.36C15.572 7.65 15.567 8.982 15.565 9.362V9.4C15.565 9.72 15.665 10.52 16.098 11.56C16.531 12.6 17.163 13.56 17.391 13.88C17.437 13.944 17.488 14.007 17.542 14.072C17.756 14.334 18 14.633 18 15.16C18 15.818 17.62 16.12 17.163 16.36C16.707 16.6 15.185 16.84 14.12 16.92C13.972 16.931 13.828 16.942 13.688 16.953H13.687C12.814 17.021 12.048 17.08 11 17.08C9.952 17.08 9.186 17.021 8.313 16.953H8.312C8.172 16.942 8.028 16.931 7.88 16.92C6.815 16.84 5.293 16.6 4.837 16.36C4.38 16.12 4 15.818 4 15.16C4 14.633 4.244 14.334 4.458 14.072C4.512 14.007 4.563 13.944 4.609 13.88C4.837 13.56 5.469 12.6 5.902 11.56C6.335 10.52 6.435 9.72 6.435 9.4V9.362C6.433 8.982 6.428 7.65 7.272 6.36C8.146 5.023 9.478 4.6 9.478 4.6C9.478 4.6 9.554 3.8 10.011 3.4ZM9.096 17.704C9.096 17.704 9.5 19 11 19C12.5 19 12.905 17.704 12.905 17.704H9.096Z"
            />
        </symbol>
        <symbol id="icon-bill" viewBox="0 0 42 42">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.54541 6.36943V35.8611C9.54541 36.1224 9.83734 36.2742 10.0473 36.1222L12.8597 34.0858C13.079 33.9271 13.3735 33.9258 13.5941 34.0828L16.415 36.0907C16.747 36.327 17.1906 36.3243 17.5197 36.084L20.2487 34.0908C20.4697 33.9294 20.7677 33.9288 20.9894 34.0893L23.7566 36.0928C24.0822 36.3286 24.5188 36.333 24.8489 36.1038L27.7776 34.0709C27.9947 33.9202 28.2811 33.9208 28.4975 34.0723L31.4476 36.1372C31.6581 36.2845 31.9454 36.132 31.9454 35.8731V6.36943C31.9454 6.01479 31.6613 5.72729 31.3109 5.72729H10.18C9.82951 5.72729 9.54541 6.01479 9.54541 6.36943ZM12.9721 12.2771C12.9721 11.9225 13.2562 11.635 13.6066 11.635H22.0463C22.3968 11.635 22.6808 11.9225 22.6808 12.2771C22.6808 12.6318 22.3968 12.9193 22.0463 12.9193H13.6066C13.2562 12.9193 12.9721 12.6318 12.9721 12.2771ZM12.9721 14.942C12.9721 14.5873 13.2562 14.2998 13.6066 14.2998H20.1744C20.5248 14.2998 20.8089 14.5873 20.8089 14.942C20.8089 15.2966 20.5248 15.5841 20.1744 15.5841H13.6066C13.2562 15.5841 12.9721 15.2966 12.9721 14.942ZM12.9721 18.4737C12.9721 18.1191 13.2562 17.8316 13.6066 17.8316H22.0463C22.3968 17.8316 22.6808 18.1191 22.6808 18.4737C22.6808 18.8284 22.3968 19.1159 22.0463 19.1159H13.6066C13.2562 19.1159 12.9721 18.8284 12.9721 18.4737ZM12.9721 21.2028C12.9721 20.8481 13.2562 20.5607 13.6066 20.5607H20.1744C20.5248 20.5607 20.8089 20.8481 20.8089 21.2028C20.8089 21.5575 20.5248 21.8449 20.1744 21.8449H13.6066C13.2562 21.8449 12.9721 21.5575 12.9721 21.2028ZM12.9721 24.7345C12.9721 24.3799 13.2562 24.0925 13.6066 24.0925H22.0463C22.3968 24.0925 22.6808 24.3799 22.6808 24.7345C22.6808 25.0891 22.3968 25.3767 22.0463 25.3767H13.6066C13.2562 25.3767 12.9721 25.0891 12.9721 24.7345ZM12.9721 27.4636C12.9721 27.109 13.2562 26.8215 13.6066 26.8215H20.1744C20.5248 26.8215 20.8089 27.109 20.8089 27.4636C20.8089 27.8183 20.5248 28.1057 20.1744 28.1057H13.6066C13.2562 28.1057 12.9721 27.8183 12.9721 27.4636ZM24.8542 12.2771C24.8542 11.9225 25.1384 11.635 25.4888 11.635H28.1381C28.4886 11.635 28.7726 11.9225 28.7726 12.2771C28.7726 12.6318 28.4886 12.9193 28.1381 12.9193H25.4888C25.1384 12.9193 24.8542 12.6318 24.8542 12.2771ZM25.4888 14.2998C25.1384 14.2998 24.8542 14.5873 24.8542 14.942C24.8542 15.2966 25.1384 15.5841 25.4888 15.5841H28.1381C28.4886 15.5841 28.7726 15.2966 28.7726 14.942C28.7726 14.5873 28.4886 14.2998 28.1381 14.2998H25.4888ZM24.8542 18.4737C24.8542 18.1191 25.1384 17.8316 25.4888 17.8316H28.1381C28.4886 17.8316 28.7726 18.1191 28.7726 18.4737C28.7726 18.8284 28.4886 19.1159 28.1381 19.1159H25.4888C25.1384 19.1159 24.8542 18.8284 24.8542 18.4737ZM25.4888 20.5607C25.1384 20.5607 24.8542 20.8481 24.8542 21.2027C24.8542 21.5575 25.1384 21.8449 25.4888 21.8449H28.1381C28.4886 21.8449 28.7726 21.5575 28.7726 21.2027C28.7726 20.8481 28.4886 20.5607 28.1381 20.5607H25.4888ZM24.8542 24.7346C24.8542 24.3799 25.1384 24.0925 25.4888 24.0925H28.1381C28.4886 24.0925 28.7726 24.3799 28.7726 24.7346C28.7726 25.0892 28.4886 25.3767 28.1381 25.3767H25.4888C25.1384 25.3767 24.8542 25.0892 24.8542 24.7346ZM25.4888 26.8215C25.1384 26.8215 24.8542 27.1091 24.8542 27.4637C24.8542 27.8183 25.1384 28.1057 25.4888 28.1057H28.1381C28.4886 28.1057 28.7726 27.8183 28.7726 27.4637C28.7726 27.1091 28.4886 26.8215 28.1381 26.8215H25.4888Z"
            />
        </symbol>
        <symbol id="icon-calendar" viewBox="0 0 22 22">
            <path d="M17.2222 4.77778H16.3333V6.55556H13.6667V4.77778H8.33333V6.55556H5.66667V4.77778H4.77778C3.79911 4.77778 3 5.57778 3 6.55556V17.2222C3 18.2 3.79911 19 4.77778 19H17.2222C18.2 19 19 18.2 19 17.2222V6.55556C19 5.57778 18.2 4.77778 17.2222 4.77778ZM17.2222 17.2222H4.77778V10.1111H17.2222V17.2222ZM7.88889 3H6.11111V6.11111H7.88889V3ZM15.8889 3H14.1111V6.11111H15.8889V3Z"
            />
        </symbol>
        <symbol id="icon-camera" viewBox="0 0 50 50">
            <path d="M25.0002 22.4431C21.9875 22.4431 19.5456 24.9249 19.5456 27.9828C19.5456 31.0408 21.9875 33.5226 25.0002 33.5226C28.0111 33.5226 30.4547 31.0408 30.4547 27.9828C30.4547 24.9249 28.0111 22.4431 25.0002 22.4431ZM39.5456 16.9033H35.182C34.582 16.9033 33.9347 16.4306 33.7475 15.8507L32.6184 12.4142C32.4275 11.8363 31.7838 11.3635 31.182 11.3635H18.8184C18.2184 11.3635 17.5711 11.8363 17.3838 12.4124L16.2529 15.8507C16.0638 16.4306 15.4184 16.9033 14.8184 16.9033H10.4547C8.45472 16.9033 6.81836 18.5652 6.81836 20.5965V37.2158C6.81836 39.247 8.45472 40.909 10.4547 40.909H39.5456C41.5456 40.909 43.182 39.247 43.182 37.2158V20.5965C43.182 18.5652 41.5456 16.9033 39.5456 16.9033ZM25.0002 37.2158C19.9784 37.2158 15.9093 33.0831 15.9093 27.9828C15.9093 22.8826 19.9784 18.7499 25.0002 18.7499C30.0202 18.7499 34.0911 22.8826 34.0911 27.9828C34.0911 33.0831 30.0202 37.2158 25.0002 37.2158ZM38.6365 22.8124C37.9329 22.8124 37.3638 22.2326 37.3638 21.5179C37.3638 20.807 37.9329 20.2253 38.6365 20.2253C39.3402 20.2253 39.9093 20.8051 39.9093 21.5179C39.9093 22.2326 39.3402 22.8124 38.6365 22.8124Z"
            />
        </symbol>
        <symbol id="icon-cart" viewBox="0 0 22 22">
            <path d="M18.4658 8.33345H14.0151L12.4044 9.94411C12.0018 10.3468 11.4658 10.5681 10.8969 10.5681C10.3262 10.5681 9.79111 10.3459 9.38756 9.94322C8.98578 9.54144 8.76356 9.00633 8.76267 8.43656C8.76267 8.40189 8.77156 8.36811 8.77244 8.33345H3.53333C3.23822 8.33345 3 8.57167 3 8.86678V11.0001H19V8.86678C19 8.57167 18.76 8.33345 18.4658 8.33345ZM11.6827 9.22145L16.176 4.72811C16.3849 4.52011 16.3867 4.18322 16.1778 3.97344L15.36 3.15567C15.152 2.94767 14.8142 2.94856 14.6044 3.15567L10.1111 7.64989C9.67733 8.08367 9.67733 8.78767 10.1111 9.22145C10.5449 9.65433 11.248 9.65522 11.6827 9.22145ZM5.50933 17.4632C5.59556 17.8197 5.96711 18.1112 6.33333 18.1112H15.6667C16.0329 18.1112 16.4044 17.8197 16.4907 17.4632L17.8444 11.889H4.15556L5.50933 17.4632Z"
            />
        </symbol>
        <symbol id="icon-chat-messages" viewBox="0 0 22 22">
            <path d="M7.64 12.96V8H4.6C3.72 8 3 8.72 3 9.6V14.4C3 15.28 3.72 16 4.6 16H5.4V18.4L7.8 16H11.8C12.68 16 13.4 15.28 13.4 14.4V12.944C13.3488 12.9552 13.2944 12.9608 13.24 12.9608H7.64V12.96ZM17.4 4H10.2C9.32 4 8.6 4.72 8.6 5.6V12H14.2L16.6 14.4V12H17.4C18.28 12 19 11.2808 19 10.4V5.6C19 4.72 18.28 4 17.4 4Z"
            />
        </symbol>
        <symbol id="icon-chat" viewBox="0 0 22 22">
            <path d="M7.64 12.96V8H4.6C3.72 8 3 8.72 3 9.6V14.4C3 15.28 3.72 16 4.6 16H5.4V18.4L7.8 16H11.8C12.68 16 13.4 15.28 13.4 14.4V12.944C13.3488 12.9552 13.2944 12.9608 13.24 12.9608H7.64V12.96ZM17.4 4H10.2C9.32 4 8.6 4.72 8.6 5.6V12H14.2L16.6 14.4V12H17.4C18.28 12 19 11.2808 19 10.4V5.6C19 4.72 18.28 4 17.4 4Z"
            />
        </symbol>
        <symbol id="icon-checked" viewBox="0 0 14 12">
            <path d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z"
            />
        </symbol>
        <symbol id="icon-chevron" viewBox="0 0 24 14">
            <path d="M1.41387 9.81571C2.21327 8.99672 10.6129 0.994835 10.6129 0.994835C11.042 0.557905 11.6004 0.338461 12.1588 0.338461C12.7172 0.338461 13.2756 0.557905 13.7008 0.994835C13.7008 0.994835 22.1043 8.99672 22.8998 9.81571C23.6992 10.6347 23.7541 12.1081 22.8998 12.98C22.0495 13.8539 20.8602 13.9225 19.8158 12.98L12.1588 5.63843L4.50176 12.98C3.45744 13.9225 2.26617 13.8539 1.41387 12.98C0.559601 12.1081 0.612502 10.6347 1.41387 9.81571Z"
            />
        </symbol>
        <symbol id="icon-clipboard" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.365 7L15.3507 4.6C15.9825 4.6 16.5008 5.1032 16.5 5.72V17.88C16.5 18.4952 15.9825 19 15.3499 19H6.14926C5.51672 19 5 18.496 5 17.88V5.72C5 5.1032 5.51672 4.6 6.15008 4.6L7.13587 7H14.365ZM14.4471 4.6L13.7078 6.2H7.79224L7.05372 4.6H8.84456L9.43603 3H12.0648L12.6554 4.6H14.4471ZM7.46458 9.39999H14.0365V10.2H7.46458V9.39999ZM7.46458 15.8H14.0365V16.6H7.46458V15.8ZM14.0365 12.6H7.46458V13.4H14.0365V12.6Z"
            />
        </symbol>
        <symbol id="icon-clock" viewBox="0 0 22 22">
            <path d="M11.0004 3C6.58148 3 3 6.58148 3 10.9996C3 15.4185 6.58148 19 11.0004 19C15.4177 19 19 15.4185 19 10.9996C19 6.58148 15.4177 3 11.0004 3ZM10.9996 17.3326C7.50226 17.3326 4.66658 14.4977 4.66658 10.9996C4.66658 7.50227 7.50143 4.66658 10.9996 4.66658C14.4969 4.66658 17.3334 7.50143 17.3334 10.9996C17.3334 14.4969 14.4969 17.3326 10.9996 17.3326ZM12 6H10.3334V11.2039L7.37857 12.9105L8.21186 14.3537L11.6409 12.373C11.8392 12.2588 12 11.9789 12 11.7497C12 8.90718 12 9.70745 12 6Z"
            />
        </symbol>
        <symbol id="icon-comments" viewBox="0 0 22 22">
            <path d="M3 5.60714V14.4464C3 15.3175 3.7328 16.0536 4.6 16.0536H6.73333V18.7321C6.73333 18.8428 6.80107 18.9421 6.90373 18.9821C6.9352 18.9944 6.96773 19 7 19C7.0736 19 7.1456 18.9695 7.19733 18.9124L9.78453 16.0536H17.4C18.2672 16.0536 19 15.3175 19 14.4464V5.60714C19 4.73607 18.2672 4 17.4 4H4.6C3.7328 4 3 4.73607 3 5.60714ZM13.6667 9.89286C13.6667 9.30196 14.1451 8.82143 14.7333 8.82143C15.3216 8.82143 15.8 9.30196 15.8 9.89286C15.8 10.4837 15.3216 10.9643 14.7333 10.9643C14.1451 10.9643 13.6667 10.4837 13.6667 9.89286ZM9.93333 9.89286C9.93333 9.30196 10.4117 8.82143 11 8.82143C11.5883 8.82143 12.0667 9.30196 12.0667 9.89286C12.0667 10.4837 11.5883 10.9643 11 10.9643C10.4117 10.9643 9.93333 10.4837 9.93333 9.89286ZM6.2 9.89286C6.2 9.30196 6.6784 8.82143 7.26667 8.82143C7.85493 8.82143 8.33333 9.30196 8.33333 9.89286C8.33333 10.4837 7.85493 10.9643 7.26667 10.9643C6.6784 10.9643 6.2 10.4837 6.2 9.89286Z"
            />
        </symbol>
        <symbol id="icon-contacts" viewBox="0 0 22 22">
            <path d="M18.2 6H3.8C3.3576 6 3 6.3576 3 6.8V16.4C3 16.8416 3.3576 17.2 3.8 17.2H18.2C18.6424 17.2 19 16.8416 19 16.4V6.8C19 6.3584 18.6424 6 18.2 6ZM13.4 9.2H16.6V10H13.4V9.2ZM11.8 15.4424C11.6968 15.3608 11.5656 15.2816 11.3768 15.2C10.4328 14.7936 9.008 14.192 9.008 13.4592C9.008 13.0184 9.2952 13.1624 9.4224 12.356C9.4752 12.0216 9.7304 12.3504 9.7784 11.5872C9.7784 11.2832 9.6392 11.2072 9.6392 11.2072C9.6392 11.2072 9.7096 10.7576 9.7376 10.4104C9.7664 10.048 9.5608 8.9704 8.716 8.7328C8.5672 8.5824 8.4672 8.644 8.9224 8.4032C7.9272 8.356 7.6952 8.8768 7.1656 9.26C6.7144 9.596 6.592 10.128 6.6144 10.4112C6.644 10.7576 6.7144 11.208 6.7144 11.208C6.7144 11.208 6.5744 11.2832 6.5744 11.5872C6.6232 12.3504 6.8784 12.0216 6.9304 12.356C7.0568 13.1624 7.3456 13.0184 7.3456 13.4592C7.3456 14.192 5.9208 14.7936 4.9768 15.2C4.8144 15.2704 4.6976 15.3384 4.6 15.408V7.6H11.8V15.4424ZM17.4 12.4H13.4V11.6H17.4V12.4Z"
            />
        </symbol>
        <symbol id="icon-credit-card" viewBox="0 0 22 22">
            <path d="M17.4 6H4.6C3.7192 6 3 6.70714 3 7.57143V15.4286C3 16.2929 3.7192 17 4.6 17H17.4C18.28 17 19 16.2929 19 15.4286V7.57143C19 6.70714 18.28 6 17.4 6ZM17.4 15.4286H4.6V10.7143H17.4V15.4286ZM17.4 8.35714H4.6V7.57143H17.4V8.35714ZM6.2 12.3643V12.8357H6.68V12.3643H6.2ZM9.08 13.3064V13.7786H10.04V13.3064H10.52V12.8349H11V12.3635H10.04V12.8349H9.5592V13.3064H9.08ZM11 13.7786V13.3064H10.5192V13.7786H11ZM8.6 13.7786V13.3064H7.64V13.7786H8.6ZM9.08 12.8349H9.56V12.3635H8.6V13.3056H9.08V12.8349ZM7.1592 13.3064H7.64V12.8349H8.12V12.3635H7.16V12.8349H6.68V13.3064H6.2V13.7786H7.1592V13.3064Z"
            />
        </symbol>
        <symbol id="icon-cross" viewBox="0 0 14 14">
            <path d="M4.91 3.992C5.14252 4.21583 7.41432 6.56773 7.41432 6.56773C7.53837 6.68788 7.60068 6.84423 7.60068 7.00058C7.60068 7.15694 7.53837 7.31329 7.41432 7.43234C7.41432 7.43234 5.14252 9.78533 4.91 10.0081C4.67747 10.2319 4.25916 10.2473 4.01162 10.0081C3.76352 9.76997 3.74405 9.43696 4.01162 9.14455L6.09596 7.00058L4.01162 4.85661C3.74405 4.5642 3.76352 4.23065 4.01162 3.992C4.25916 3.75281 4.67747 3.76762 4.91 3.992Z"
            />
            <path d="M9.08999 3.992C8.85747 4.21583 6.58566 6.56773 6.58566 6.56773C6.46162 6.68788 6.39931 6.84423 6.39931 7.00058C6.39931 7.15694 6.46162 7.31329 6.58566 7.43234C6.58566 7.43234 8.85747 9.78533 9.08999 10.0081C9.32251 10.2319 9.74083 10.2473 9.98837 10.0081C10.2365 9.76997 10.2559 9.43696 9.98837 9.14455L7.90402 7.00058L9.98837 4.85661C10.2559 4.5642 10.2365 4.23065 9.98837 3.992C9.74083 3.75281 9.32251 3.76762 9.08999 3.992Z"
            />
        </symbol>
        <symbol id="icon-dashboard" viewBox="0 0 22 22">
            <path d="M17.4 5H4.6C3.72 5 3 5.675 3 6.5V15.5C3 16.325 3.72 17 4.6 17H17.4C18.28 17 19 16.325 19 15.5V6.5C19 5.675 18.28 5 17.4 5ZM6.6 6.3125C6.9312 6.3125 7.2 6.5645 7.2 6.875C7.2 7.1855 6.9312 7.4375 6.6 7.4375C6.2688 7.4375 6 7.1855 6 6.875C6 6.5645 6.2688 6.3125 6.6 6.3125ZM4.4 6.875C4.4 6.5645 4.6688 6.3125 5 6.3125C5.3312 6.3125 5.6 6.5645 5.6 6.875C5.6 7.1855 5.3312 7.4375 5 7.4375C4.6688 7.4375 4.4 7.1855 4.4 6.875ZM17.4 15.5H4.6V8.75H17.4V15.5ZM17.4 7.25H7.8V6.5H17.4152L17.4 7.25Z"
            />
        </symbol>
        <symbol id="icon-detail" viewBox="0 0 22 22">
            <path d="M11.0004 3C6.58148 3 3 6.58148 3 10.9996C3 15.4185 6.58148 19 11.0004 19C15.4177 19 19 15.4185 19 10.9996C19 6.58148 15.4177 3 11.0004 3ZM11.747 5.88818C12.527 5.88818 12.7562 6.34066 12.7562 6.85813C12.7562 7.50393 12.2395 8.1014 11.3571 8.1014C10.6188 8.1014 10.2671 7.73059 10.2888 7.11645C10.2888 6.59898 10.7213 5.88818 11.747 5.88818ZM9.74882 15.791C9.21551 15.791 8.82636 15.4669 9.19884 14.0461L9.80965 11.5254C9.91547 11.1221 9.93297 10.9604 9.80965 10.9604C9.65049 10.9604 8.95802 11.2387 8.54971 11.5137L8.28389 11.0779C9.57966 9.99547 11.0696 9.3605 11.707 9.3605C12.2404 9.3605 12.3287 9.99047 12.0629 10.9604L11.3629 13.6103C11.2387 14.0786 11.2921 14.2402 11.4162 14.2402C11.5762 14.2402 12.0995 14.0469 12.6145 13.6411L12.9162 14.0461C11.6554 15.306 10.2813 15.791 9.74882 15.791Z"
            />
        </symbol>
        <symbol id="icon-details" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.44444 10.1111C7.44444 9.74292 7.74292 9.44444 8.11111 9.44444H14.3333C14.7015 9.44444 15 9.74292 15 10.1111C15 10.4793 14.7015 10.7778 14.3333 10.7778H8.11111C7.74292 10.7778 7.44444 10.4793 7.44444 10.1111ZM7.44444 12.7778C7.44444 12.4096 7.74292 12.1111 8.11111 12.1111H14.3333C14.7015 12.1111 15 12.4096 15 12.7778C15 13.146 14.7015 13.4444 14.3333 13.4444H8.11111C7.74292 13.4444 7.44444 13.146 7.44444 12.7778ZM7.44444 15.4444C7.44444 15.0763 7.74292 14.7778 8.11111 14.7778H11.2222C11.5904 14.7778 11.8889 15.0763 11.8889 15.4444C11.8889 15.8126 11.5904 16.1111 11.2222 16.1111H8.11111C7.74292 16.1111 7.44444 15.8126 7.44444 15.4444ZM11.4444 4.33333H6.33333V17.6667H16.1111V9C16.1111 9 12.9757 9 12.4578 9C11.9399 9 11.4444 8.47204 11.4444 8.00978C11.4444 7.54752 11.4444 4.33333 11.4444 4.33333ZM17.4444 8.33333V18.1111C17.4444 18.602 17.0465 19 16.5556 19H5.88889C5.39797 19 5 18.602 5 18.1111V3.88889C5 3.39797 5.39797 3 5.88889 3H12.1111L17.4444 8.33333Z"
            />
        </symbol>
        <symbol id="icon-doc" viewBox="0 0 31 40">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49998 0H19.7412L30.9999 11.215V37.5C30.9999 38.8812 29.88 40 28.4999 40H2.49998C1.11994 40 0 38.8812 0 37.5V2.49998C0 1.11877 1.12007 0 2.49998 0Z" fill="#26A6D1" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9638 11.25H22.25C20.8699 11.25 19.75 10.1301 19.75 8.75004V0.0250244L30.9638 11.25Z" fill="#1E7EA0" />
            <path d="M5.7923 24C5.55897 24 5.37897 23.9367 5.2523 23.81C5.12564 23.6833 5.0623 23.5033 5.0623 23.27V17.68C5.0623 17.4467 5.12564 17.2667 5.2523 17.14C5.37897 17.0133 5.55897 16.95 5.7923 16.95H7.8023C8.56897 16.95 9.22897 17.09 9.78231 17.37C10.3356 17.65 10.759 18.0533 11.0523 18.58C11.3456 19.1067 11.4923 19.7367 11.4923 20.47C11.4923 21.2033 11.3456 21.8367 11.0523 22.37C10.7656 22.8967 10.3456 23.3 9.79231 23.58C9.23897 23.86 8.57564 24 7.8023 24H5.7923ZM7.6923 22.74C9.1923 22.74 9.9423 21.9833 9.9423 20.47C9.9423 18.9633 9.1923 18.21 7.6923 18.21H6.6223V22.74H7.6923ZM15.9293 24.09C15.2293 24.09 14.6193 23.9433 14.0993 23.65C13.5859 23.35 13.1893 22.93 12.9093 22.39C12.6293 21.8433 12.4893 21.2033 12.4893 20.47C12.4893 19.7367 12.6293 19.1 12.9093 18.56C13.1893 18.0133 13.5859 17.5933 14.0993 17.3C14.6193 17.0067 15.2293 16.86 15.9293 16.86C16.6293 16.86 17.2359 17.0067 17.7493 17.3C18.2693 17.5933 18.6693 18.0133 18.9493 18.56C19.2293 19.1 19.3693 19.7367 19.3693 20.47C19.3693 21.2033 19.2293 21.8433 18.9493 22.39C18.6693 22.93 18.2693 23.35 17.7493 23.65C17.2359 23.9433 16.6293 24.09 15.9293 24.09ZM15.9293 22.88C16.5159 22.88 16.9759 22.6733 17.3093 22.26C17.6493 21.8467 17.8193 21.25 17.8193 20.47C17.8193 19.69 17.6526 19.0967 17.3193 18.69C16.9859 18.2767 16.5226 18.07 15.9293 18.07C15.3359 18.07 14.8726 18.2767 14.5393 18.69C14.2126 19.0967 14.0493 19.69 14.0493 20.47C14.0493 21.25 14.2159 21.8467 14.5493 22.26C14.8826 22.6733 15.3426 22.88 15.9293 22.88ZM23.8004 24.09C23.107 24.09 22.5004 23.9433 21.9804 23.65C21.4604 23.3567 21.0604 22.9367 20.7804 22.39C20.5004 21.8433 20.3604 21.2033 20.3604 20.47C20.3604 19.7367 20.5004 19.1 20.7804 18.56C21.0604 18.0133 21.4604 17.5933 21.9804 17.3C22.5004 17.0067 23.107 16.86 23.8004 16.86C24.6737 16.86 25.427 17.1 26.0604 17.58C26.1604 17.66 26.2304 17.74 26.2704 17.82C26.3104 17.9 26.3304 18 26.3304 18.12C26.3304 18.2933 26.2804 18.4433 26.1804 18.57C26.087 18.69 25.9704 18.75 25.8304 18.75C25.737 18.75 25.6537 18.74 25.5804 18.72C25.5137 18.6933 25.437 18.65 25.3504 18.59C25.0837 18.4167 24.837 18.2933 24.6104 18.22C24.3837 18.14 24.1404 18.1 23.8804 18.1C23.2404 18.1 22.757 18.3 22.4304 18.7C22.1104 19.0933 21.9504 19.6833 21.9504 20.47C21.9504 22.0567 22.5937 22.85 23.8804 22.85C24.127 22.85 24.3604 22.8133 24.5804 22.74C24.8004 22.66 25.057 22.5333 25.3504 22.36C25.4504 22.3 25.5337 22.26 25.6004 22.24C25.667 22.2133 25.7437 22.2 25.8304 22.2C25.9704 22.2 26.087 22.2633 26.1804 22.39C26.2804 22.51 26.3304 22.6567 26.3304 22.83C26.3304 22.95 26.307 23.0533 26.2604 23.14C26.2204 23.22 26.1537 23.2967 26.0604 23.37C25.427 23.85 24.6737 24.09 23.8004 24.09Z"
            fill="white" />
        </symbol>
        <symbol id="icon-dot" viewBox="0 0 9 21">
            <circle cx="1.5" cy="19.5" r="1.5" transform="rotate(-90 1.5 19.5)" />
            <circle cx="1.5" cy="13.5" r="1.5" transform="rotate(-90 1.5 13.5)" />
            <circle cx="1.5" cy="7.5" r="1.5" transform="rotate(-90 1.5 7.5)" />
            <circle cx="1.5" cy="1.5" r="1.5" transform="rotate(-90 1.5 1.5)" />
            <circle cx="7.5" cy="19.5" r="1.5" transform="rotate(-90 7.5 19.5)" />
            <circle cx="7.5" cy="13.5" r="1.5" transform="rotate(-90 7.5 13.5)" />
            <circle cx="7.5" cy="7.5" r="1.5" transform="rotate(-90 7.5 7.5)" />
            <circle cx="7.5" cy="1.5" r="1.5" transform="rotate(-90 7.5 1.5)" />
        </symbol>
        <symbol id="icon-dots" viewBox="0 0 25 25">
            <path d="M10.2273 12.499C10.2273 13.6996 11.2006 14.6739 12.4012 14.6739C13.6018 14.6739 14.5751 13.6996 14.5751 12.499C14.5751 11.2984 13.6018 10.3261 12.4012 10.3261C11.2006 10.3261 10.2273 11.2984 10.2273 12.499ZM10.2273 19.416C10.2273 20.6166 11.2006 21.5909 12.4012 21.5909C13.6018 21.5909 14.5751 20.6166 14.5751 19.416C14.5751 18.2154 13.6008 17.2431 12.4012 17.2431C11.2016 17.2431 10.2273 18.2154 10.2273 19.416ZM10.2273 5.58202C10.2273 6.78261 11.2006 7.75692 12.4012 7.75692C13.6018 7.75692 14.5751 6.78261 14.5751 5.58202C14.5751 4.38143 13.6018 3.40909 12.4012 3.40909C11.2006 3.40909 10.2273 4.38143 10.2273 5.58202Z"
            />
        </symbol>
        <symbol id="icon-download" viewBox="0 0 22 22">
            <path d="M17.1765 8.64706H13.4118V3H7.76471V8.64706H4L10.5882 15.2353L17.1765 8.64706ZM4 17.1176V19H17.1765V17.1176H4Z" />
        </symbol>
        <symbol id="icon-drafts" viewBox="0 0 22 22">
            <path d="M17.8736 4.12588C16.5627 2.81406 15.5782 3.01042 15.5782 3.01042L10.0763 8.51223L3.91818 14.6695L3 18.9986L7.32999 18.0804L13.4882 11.9249L18.99 6.42314C18.989 6.42314 19.1863 5.4386 17.8736 4.12588ZM7.07272 17.5604L5.59636 17.8786C5.45454 17.6122 5.28272 17.3458 4.96909 17.0313C4.65454 16.7168 4.38818 16.5468 4.12182 16.4031L4.44 14.9277L4.86727 14.5013C4.86727 14.5013 5.66999 14.5177 6.57726 15.4249C7.48363 16.3304 7.5009 17.1349 7.5009 17.1349L7.07272 17.5604Z"
            />
        </symbol>
        <symbol id="icon-duplicate" viewBox="0 0 22 22">
            <path d="M16.7143 15.5714H8.71429C8.10808 15.5714 7.5267 15.3306 7.09804 14.902C6.66939 14.4733 6.42857 13.8919 6.42857 13.2857V5.28571C6.42857 4.67951 6.66939 4.09812 7.09804 3.66947C7.5267 3.24082 8.10808 3 8.71429 3H16.7143C17.3205 3 17.9019 3.24082 18.3305 3.66947C18.7592 4.09812 19 4.67951 19 5.28571V13.2857C19 13.8919 18.7592 14.4733 18.3305 14.902C17.9019 15.3306 17.3205 15.5714 16.7143 15.5714ZM17.8571 5.28571C17.8571 4.98261 17.7367 4.69192 17.5224 4.47759C17.3081 4.26326 17.0174 4.14286 16.7143 4.14286H8.71429C8.41118 4.14286 8.12049 4.26326 7.90616 4.47759C7.69184 4.69192 7.57143 4.98261 7.57143 5.28571V13.2857C7.57143 13.5888 7.69184 13.8795 7.90616 14.0938C8.12049 14.3082 8.41118 14.4286 8.71429 14.4286H16.7143C17.0174 14.4286 17.3081 14.3082 17.5224 14.0938C17.7367 13.8795 17.8571 13.5888 17.8571 13.2857V5.28571ZM13.2857 12.1429H12.1429V9.85714H9.85714V8.71429H12.1429V6.42857H13.2857V8.71429H15.5714V9.85714H13.2857V12.1429ZM5.28571 17.8571H13.2857C13.5888 17.8571 13.8795 17.7367 14.0938 17.5224C14.3082 17.3081 14.4286 17.0174 14.4286 16.7143H15.5714C15.5714 17.3205 15.3306 17.9019 14.902 18.3305C14.4733 18.7592 13.8919 19 13.2857 19H5.28571C4.67951 19 4.09812 18.7592 3.66947 18.3305C3.24082 17.9019 3 17.3205 3 16.7143V8.71429C3 8.10808 3.24082 7.5267 3.66947 7.09804C4.09812 6.66939 4.67951 6.42857 5.28571 6.42857V7.57143C4.98261 7.57143 4.69192 7.69184 4.47759 7.90616C4.26326 8.12049 4.14286 8.41118 4.14286 8.71429V16.7143C4.14286 17.0174 4.26326 17.3081 4.47759 17.5224C4.69192 17.7367 4.98261 17.8571 5.28571 17.8571Z"
            />
        </symbol>
        <symbol id="icon-email-2" viewBox="0 0 22 22">
            <path d="M14.8417 12.8131C14.8417 13.514 15.0408 13.7935 15.5617 13.7935C16.7225 13.7935 17.4617 12.3125 17.4617 9.84939C17.4617 6.08469 14.7217 4.28244 11.3008 4.28244C7.78167 4.28244 4.58083 6.64539 4.58083 11.111C4.58083 15.3763 7.38083 17.6992 11.6808 17.6992C13.1408 17.6992 14.1208 17.539 15.62 17.0384L15.9417 18.3792C14.4617 18.8607 12.88 19 11.6608 19C6.02083 19 3 15.8961 3 11.1101C3 6.2841 6.50083 3 11.3208 3C16.3408 3 19 6.00375 19 9.68836C19 12.8123 18.0208 15.1952 14.9408 15.1952C13.54 15.1952 12.6208 14.6345 12.5008 13.3922C12.1408 14.7739 11.1808 15.1952 9.88 15.1952C8.14 15.1952 6.68 13.8527 6.68 11.1502C6.68 8.42678 7.96083 6.74468 10.2608 6.74468C11.4808 6.74468 12.2408 7.22528 12.5792 7.98623L13.16 6.92491H14.84V12.8131H14.8417ZM12.3825 10.1698C12.3825 9.06925 11.5617 8.60784 10.8817 8.60784C10.1417 8.60784 9.3225 9.20776 9.3225 10.9708C9.3225 12.3725 9.9425 13.1535 10.8817 13.1535C11.5417 13.1535 12.3825 12.733 12.3825 11.5715V10.1698Z"
            />
        </symbol>
        <symbol id="icon-email" viewBox="0 0 22 22">
            <path d="M17.4 5H4.6C3.72 5 3.008 5.74483 3.008 6.65517L3 15.3448C3 16.2552 3.72 17 4.6 17H17.4C18.28 17 19 16.2552 19 15.3448V6.65517C19 5.74483 18.28 5 17.4 5ZM16.6 15.3448H5.4C4.96 15.3448 4.6 14.9724 4.6 14.5172V8.31034L10.152 11.9021C10.672 12.2414 11.328 12.2414 11.848 11.9021L17.4 8.31034V14.5172C17.4 14.9724 17.04 15.3448 16.6 15.3448ZM11 10.7931L4.6 6.65517H17.4L11 10.7931Z"
            />
        </symbol>
        <symbol id="icon-emoji" viewBox="0 0 22 22">
            <path d="M11 3C6.58167 3 3 6.58167 3 11C3 15.4183 6.58167 19 11 19C15.4175 19 19 15.4183 19 10.9992C19 6.58167 15.4175 3 11 3ZM11 17.3325C7.5025 17.3325 4.66667 14.4975 4.66667 10.9992C4.66667 7.50083 7.50167 4.66667 11 4.66667C14.4975 4.66667 17.3342 7.50167 17.3342 11C17.3342 14.4983 14.4975 17.3325 11 17.3325ZM8.9175 10.7917C9.6075 10.7917 10.1667 10.1392 10.1667 9.33333C10.1667 8.5275 9.60667 7.875 8.91667 7.875C8.22667 7.875 7.66667 8.5275 7.66667 9.33333C7.66667 10.1392 8.22667 10.7917 8.9175 10.7917ZM13.0833 10.7917C13.7742 10.7917 14.3333 10.1392 14.3333 9.33333C14.3333 8.5275 13.7733 7.875 13.0833 7.875C12.3933 7.875 11.8333 8.52833 11.8333 9.33333C11.8333 10.1383 12.3933 10.7917 13.0833 10.7917ZM14.6175 12.1133C14.315 11.9583 13.9383 12.0775 13.7775 12.38C13.7492 12.435 13.0533 13.7075 11.0008 13.7075C8.95833 13.7075 8.25833 12.4467 8.22333 12.3808C8.06667 12.0767 7.69667 11.9525 7.38667 12.1067C7.07833 12.2617 6.95333 12.6367 7.1075 12.9458C7.14917 13.0283 8.1475 14.9575 11.0008 14.9575C13.855 14.9575 14.8517 13.0275 14.8925 12.945C15.0458 12.6392 14.9225 12.27 14.6175 12.1133Z"
            />
        </symbol>
        <symbol id="icon-file-empty" viewBox="0 0 31 40">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49998 0H19.7412L30.9999 11.215V37.5C30.9999 38.8812 29.88 40 28.4999 40H2.49998C1.11994 40 0 38.8812 0 37.5V2.49998C0 1.11877 1.12007 0 2.49998 0Z" fill="#B3C0CE" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9638 11.25H22.25C20.8699 11.25 19.75 10.1301 19.75 8.75004V0.0250244L30.9638 11.25Z" fill="#8697A8" />
            <path d="M14.8278 23.55C14.4612 23.55 14.1695 23.425 13.9528 23.175C13.7528 22.925 13.6528 22.5917 13.6528 22.175C13.6528 21.325 13.8028 20.6167 14.1028 20.05C14.4195 19.4833 14.8778 18.8583 15.4778 18.175C15.9278 17.6583 16.2528 17.2333 16.4528 16.9C16.6695 16.55 16.7778 16.1583 16.7778 15.725C16.7778 15.2583 16.6028 14.8917 16.2528 14.625C15.9195 14.3417 15.4612 14.2 14.8778 14.2C14.3445 14.2 13.8445 14.3083 13.3778 14.525C12.9278 14.7417 12.3195 15.075 11.5528 15.525C11.0695 15.7917 10.6695 15.925 10.3528 15.925C10.0028 15.925 9.70283 15.775 9.45283 15.475C9.2195 15.1583 9.10283 14.7833 9.10283 14.35C9.10283 14.05 9.15283 13.8 9.25283 13.6C9.3695 13.3833 9.5445 13.1833 9.77783 13C10.5112 12.4167 11.3528 11.9667 12.3028 11.65C13.2695 11.3167 14.2362 11.15 15.2028 11.15C16.2362 11.15 17.1612 11.3333 17.9778 11.7C18.8112 12.0667 19.4528 12.575 19.9028 13.225C20.3695 13.8583 20.6028 14.575 20.6028 15.375C20.6028 15.9917 20.4778 16.5583 20.2278 17.075C19.9945 17.575 19.7112 18.0167 19.3778 18.4C19.0445 18.7667 18.5945 19.225 18.0278 19.775C17.3945 20.3583 16.9195 20.85 16.6028 21.25C16.2862 21.6333 16.0862 22.0667 16.0028 22.55C15.9362 22.8667 15.7945 23.1167 15.5778 23.3C15.3778 23.4667 15.1278 23.55 14.8278 23.55ZM14.8778 29.15C14.2612 29.15 13.7528 28.95 13.3528 28.55C12.9528 28.1333 12.7528 27.6167 12.7528 27C12.7528 26.3833 12.9528 25.875 13.3528 25.475C13.7528 25.0583 14.2612 24.85 14.8778 24.85C15.4778 24.85 15.9778 25.0583 16.3778 25.475C16.7778 25.875 16.9778 26.3833 16.9778 27C16.9778 27.6167 16.7778 28.1333 16.3778 28.55C15.9778 28.95 15.4778 29.15 14.8778 29.15Z"
            fill="white" />
        </symbol>
        <symbol id="icon-flag" viewBox="0 0 22 22">
            <path d="M18.9343 6.18591C10.6329 18.2464 13.4747 5.9548 6.4569 11.8366L8.05247 18.1113H6.25779L3 5.30236L4.64445 4.71213C12.5103 -1.0399 8.40269 9.88549 18.5441 5.8268C18.8676 5.69613 19.1263 5.9068 18.9343 6.18591Z" />
        </symbol>
        <symbol id="icon-folder" viewBox="0 0 22 22">
            <path d="M17.7296 7.24105C17.6407 6.88876 17.2051 6.60132 16.7608 6.60132H11.305C10.8615 6.60132 10.2402 6.34671 9.92631 6.03525L9.44912 5.56447C9.13526 5.25301 8.51475 5 8.07118 5H5.46503C5.02067 5 4.61714 5.3579 4.5683 5.79586L4.3345 8.20264H17.8905L17.7296 7.24105ZM18.5358 9.0033H3.46418C3.19036 9.0033 2.97578 9.2387 3.0022 9.51172L3.74121 17.2533C3.77084 17.5688 4.03666 17.8106 4.35452 17.8106H17.6455C17.9633 17.8106 18.2284 17.5688 18.2588 17.2533L18.9978 9.51172C19.0242 9.2387 18.8096 9.0033 18.5358 9.0033Z"
            />
        </symbol>
        <symbol id="icon-grid" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33333 3H4.33333C3.596 3 3 3.596 3 4.33333V8.33333C3 9.06933 3.596 9.66667 4.33333 9.66667H8.33333C9.07067 9.66667 9.66667 9.06933 9.66667 8.33333V4.33333C9.66667 3.59733 9.07067 3 8.33333 3ZM17.6667 3H13.6667C12.9293 3 12.3333 3.596 12.3333 4.33333V8.33333C12.3333 9.06933 12.9293 9.66667 13.6667 9.66667H17.6667C18.404 9.66667 19 9.06933 19 8.33333V4.33333C19 3.59733 18.404 3 17.6667 3ZM8.33333 12.3333H4.33333C3.596 12.3333 3 12.9293 3 13.6667V17.6667C3 18.4027 3.596 19 4.33333 19H8.33333C9.07067 19 9.66667 18.4027 9.66667 17.6667V13.6667C9.66667 12.9307 9.07067 12.3333 8.33333 12.3333ZM17.6667 12.3333H13.6667C12.9293 12.3333 12.3333 12.9293 12.3333 13.6667V17.6667C12.3333 18.4027 12.9293 19 13.6667 19H17.6667C18.404 19 19 18.4027 19 17.6667V13.6667C19 12.9307 18.404 12.3333 17.6667 12.3333Z"
            />
        </symbol>
        <symbol id="icon-help" viewBox="0 0 16 16">
            <path d="M7.99982 2.18188C4.78649 2.18188 2.18164 4.78673 2.18164 8.00007C2.18164 11.2134 4.78649 13.8182 7.99982 13.8182C11.2126 13.8182 13.818 11.2134 13.818 7.99946C13.818 4.78673 11.2126 2.18188 7.99982 2.18188ZM7.90831 11.3934H7.8774C7.40346 11.3795 7.06891 11.0298 7.08285 10.5625C7.09619 10.1031 7.43861 9.76916 7.89679 9.76916L7.92467 9.77037C8.41194 9.78431 8.74285 10.1304 8.72891 10.611C8.71497 11.0716 8.37861 11.3934 7.90831 11.3934ZM9.90285 7.43522C9.79134 7.59279 9.54649 7.79037 9.2374 8.03098L8.89679 8.26552C8.71013 8.41098 8.5974 8.54855 8.55558 8.68249C8.52164 8.78795 8.50588 8.81643 8.50285 9.03158V9.08613H7.20285L7.20649 8.97582C7.22285 8.52492 7.23376 8.25825 7.42103 8.03825C7.71497 7.69401 8.36346 7.27582 8.39073 7.25825C8.48407 7.18855 8.56225 7.10916 8.62043 7.0237C8.75679 6.83522 8.81679 6.68734 8.81679 6.5431C8.81679 6.34067 8.7574 6.1534 8.63922 5.98795C8.52528 5.82673 8.30891 5.74673 7.99619 5.74673C7.68588 5.74673 7.47316 5.84492 7.34649 6.04734C7.21558 6.25401 7.14952 6.47158 7.14952 6.69401V6.74976H5.80952L5.81194 6.69158C5.84649 5.87158 6.13982 5.28067 6.68164 4.93582C7.02285 4.71704 7.4477 4.60613 7.94285 4.60613C8.59013 4.60613 9.138 4.7637 9.56831 5.07401C10.0053 5.38855 10.2265 5.86007 10.2265 6.47461C10.2259 6.81825 10.1174 7.14128 9.90285 7.43522Z"
            />
        </symbol>
        <symbol id="icon-home" viewBox="0 0 18 18">
            <path d="M15.2511 9.74455H14.0459V14.0155C14.0459 14.3322 13.9061 14.7273 13.3251 14.7273H10.4417V10.4564H7.55838V14.7273H4.67504C4.09405 14.7273 3.95421 14.3322 3.95421 14.0155V9.74455H2.74897C2.31791 9.74455 2.41018 9.51393 2.70572 9.21212L8.4897 3.49481C8.63027 3.35102 8.8148 3.27984 9.00005 3.27272C9.18531 3.27984 9.36984 3.35031 9.51041 3.49481L15.2937 9.2114C15.5899 9.51393 15.6822 9.74455 15.2511 9.74455Z"
            />
        </symbol>
        <symbol id="icon-import" viewBox="0 0 22 22">
            <path d="M18.2727 12.8909H16.0909V9.07981C16.0911 9.07336 16.0919 9.06705 16.0919 9.06061C16.0919 8.88577 16.0295 8.72591 15.9267 8.60048C15.9257 8.59922 15.9247 8.59792 15.9236 8.59665C15.9102 8.58056 15.8961 8.56514 15.8814 8.55021C15.8792 8.54807 15.8771 8.54589 15.875 8.54376C15.8686 8.53741 15.8626 8.53057 15.856 8.52446L10.5447 3.21314C10.5449 3.21338 10.5445 3.21295 10.5447 3.21314C10.5298 3.19825 10.5135 3.18371 10.4976 3.17033C10.4926 3.16611 10.4874 3.16218 10.4823 3.15806C10.4706 3.1488 10.4588 3.13988 10.4466 3.13139C10.4406 3.12718 10.4345 3.12301 10.4284 3.11898C10.4156 3.11059 10.4025 3.10274 10.3892 3.09522C10.3839 3.09217 10.3787 3.08887 10.3732 3.08596C10.3556 3.07656 10.3376 3.06793 10.3194 3.06002C10.312 3.05682 10.3043 3.05401 10.2968 3.05105C10.2847 3.04625 10.2725 3.04175 10.2601 3.03762C10.2516 3.03481 10.2432 3.0321 10.2346 3.02958C10.2206 3.0255 10.2064 3.02192 10.1921 3.01867C10.1858 3.01726 10.1796 3.01547 10.1731 3.01416C10.1528 3.01008 10.1322 3.00708 10.1116 3.0048C10.1053 3.00407 10.0989 3.00368 10.0925 3.0031C10.0754 3.0016 10.0583 3.00078 10.0411 3.00048C10.0375 3.00048 10.034 3 10.0303 3H3.72727C3.32562 3 3 3.32562 3 3.72727V18.2727C3 18.6744 3.32562 19 3.72727 19H15.3636C15.7653 19 16.0909 18.6744 16.0909 18.2727V14.3455H18.2727C18.6744 14.3455 19 14.0198 19 13.6182C19 13.2165 18.6744 12.8909 18.2727 12.8909ZM14.6364 17.5455H4.45455V4.45455H9.30303V9.06061C9.30303 9.46225 9.62865 9.78788 10.0303 9.78788H14.6364V12.8909L11.7861 12.8908L12.3628 12.3142C12.6468 12.0302 12.6468 11.5697 12.3628 11.2857C12.0787 11.0017 11.6183 11.0017 11.3343 11.2857L9.51607 13.1038C9.51336 13.1065 9.51103 13.1095 9.50841 13.1123C9.49459 13.1265 9.48107 13.141 9.46851 13.1564C9.4639 13.1619 9.45998 13.168 9.45552 13.1737C9.44538 13.1868 9.4352 13.1998 9.42599 13.2136C9.42274 13.2184 9.42007 13.2236 9.41692 13.2285C9.40727 13.2436 9.39777 13.2589 9.38919 13.2748C9.3873 13.2783 9.38579 13.282 9.38395 13.2856C9.37493 13.3032 9.36625 13.3209 9.35864 13.3392C9.35767 13.3416 9.35695 13.3441 9.35598 13.3465C9.34812 13.366 9.3408 13.3857 9.33464 13.4061C9.33382 13.4087 9.33333 13.4114 9.33256 13.4141C9.32674 13.4341 9.32141 13.4543 9.31729 13.4749C9.31607 13.4809 9.31554 13.487 9.31452 13.4931C9.31151 13.5104 9.30846 13.5277 9.30672 13.5455C9.30429 13.5695 9.30303 13.5937 9.30303 13.618C9.30303 13.6424 9.30429 13.6666 9.30672 13.6907C9.30846 13.7084 9.31151 13.7257 9.31452 13.743C9.31554 13.749 9.31607 13.7552 9.31729 13.7612C9.32145 13.7821 9.32684 13.8025 9.33275 13.8226C9.33343 13.825 9.33387 13.8275 9.33464 13.8299C9.34085 13.8503 9.34817 13.8703 9.35607 13.8899C9.35699 13.8922 9.35767 13.8945 9.35864 13.8968C9.36635 13.9153 9.37508 13.9333 9.38424 13.951C9.38599 13.9544 9.38739 13.9579 9.38919 13.9613C9.39782 13.9774 9.40747 13.9929 9.41731 14.0082C9.42027 14.0129 9.42284 14.0178 9.42594 14.0224C9.43549 14.0368 9.44606 14.0503 9.45658 14.0639C9.46061 14.0691 9.46424 14.0746 9.46841 14.0797C9.48238 14.0967 9.49721 14.1129 9.51263 14.1285C9.51379 14.1297 9.51486 14.1311 9.51607 14.1323L11.3343 15.9505C11.4763 16.0926 11.6624 16.1636 11.8485 16.1636C12.0346 16.1636 12.2208 16.0926 12.3628 15.9506C12.6468 15.6666 12.6468 15.2061 12.3628 14.9221L11.7861 14.3454L14.6364 14.3454V17.5455Z"
            />
        </symbol>
        <symbol id="icon-inbox" viewBox="0 0 22 22">
            <path d="M18.4771 10.1484C18.1635 9.77867 16.6467 8.12978 15.9541 7.37689C15.7416 7.14667 15.4378 7 15.1194 7H6.87984C6.56144 7 6.25759 7.14667 6.04506 7.37689C5.35169 8.12978 3.83567 9.77778 3.52213 10.1484C3.13019 10.6116 2.93786 10.9502 3.01786 11.4364C3.09787 11.9227 3.39445 13.7956 3.46718 14.1689C3.53829 14.5413 4.01992 15 4.46924 15H17.53C17.9793 15 18.4609 14.5413 18.5328 14.1689C18.6047 13.7956 18.9021 11.9227 18.9821 11.4364C19.0621 10.9502 18.8698 10.6107 18.4771 10.1484ZM14.2434 10.5582C14.1617 10.5582 14.0874 10.6044 14.051 10.6764L13.3965 12.3333H8.60273L7.94897 10.6764C7.9126 10.6044 7.83826 10.5582 7.75664 10.5582H4.91693L6.55093 8.77778H15.4483L17.0831 10.5582H14.2434Z"
            />
        </symbol>
        <symbol id="icon-invoice" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25 3C4.25 2.58579 4.58579 2.25 5 2.25H17C17.4142 2.25 17.75 2.58579 17.75 3V19C17.75 19.3019 17.569 19.5744 17.2907 19.6914C17.0123 19.8084 16.691 19.7471 16.4753 19.5359L14.8586 17.9529L13.4652 19.5016C13.323 19.6597 13.1203 19.75 12.9077 19.75C12.695 19.75 12.4924 19.6597 12.3501 19.5016L10.9911 17.991L9.63198 19.5016C9.48975 19.6597 9.28709 19.75 9.07443 19.75C8.86177 19.75 8.65911 19.6597 8.51687 19.5016L7.12567 17.9553L5.52692 19.5337C5.31167 19.7462 4.98984 19.8086 4.71077 19.692C4.43169 19.5753 4.25 19.3025 4.25 19V3ZM5.75 3.75V17.2056L6.63088 16.336C6.77672 16.192 6.97513 16.114 7.17998 16.12C7.38483 16.1261 7.57828 16.2157 7.71535 16.3681L9.07443 17.8787L10.4335 16.3681C10.5757 16.21 10.7784 16.1197 10.9911 16.1197C11.2037 16.1197 11.4064 16.21 11.5486 16.3681L12.9077 17.8787L14.2668 16.3681C14.4035 16.2161 14.5963 16.1266 14.8006 16.1201C15.0049 16.1136 15.203 16.1908 15.349 16.3338L16.25 17.216V3.75H5.75ZM7.10455 5.46254C7.10455 5.04833 7.44034 4.71254 7.85455 4.71254H12.0363C12.4505 4.71254 12.7863 5.04833 12.7863 5.46254C12.7863 5.87676 12.4505 6.21254 12.0363 6.21254H7.85455C7.44034 6.21254 7.10455 5.87676 7.10455 5.46254ZM13.3772 5.46254C13.3772 5.04833 13.713 4.71254 14.1272 4.71254H14.1599C14.5741 4.71254 14.9099 5.04833 14.9099 5.46254C14.9099 5.87676 14.5741 6.21254 14.1599 6.21254H14.1272C13.713 6.21254 13.3772 5.87676 13.3772 5.46254ZM7.10455 8.22425C7.10455 7.81004 7.44034 7.47425 7.85455 7.47425H10.4682C10.8824 7.47425 11.2182 7.81004 11.2182 8.22425C11.2182 8.63846 10.8824 8.97425 10.4682 8.97425H7.85455C7.44034 8.97425 7.10455 8.63846 7.10455 8.22425ZM7.10455 11.5383C7.10455 11.1241 7.44034 10.7883 7.85455 10.7883H12.0363C12.4505 10.7883 12.7863 11.1241 12.7863 11.5383C12.7863 11.9525 12.4505 12.2883 12.0363 12.2883H7.85455C7.44034 12.2883 7.10455 11.9525 7.10455 11.5383ZM13.3772 11.5383C13.3772 11.1241 13.713 10.7883 14.1272 10.7883H14.1599C14.5741 10.7883 14.9099 11.1241 14.9099 11.5383C14.9099 11.9525 14.5741 12.2883 14.1599 12.2883H14.1272C13.713 12.2883 13.3772 11.9525 13.3772 11.5383ZM7.10455 14.3C7.10455 13.8858 7.44034 13.55 7.85455 13.55H10.4682C10.8824 13.55 11.2182 13.8858 11.2182 14.3C11.2182 14.7142 10.8824 15.05 10.4682 15.05H7.85455C7.44034 15.05 7.10455 14.7142 7.10455 14.3Z"
            />
        </symbol>
        <symbol id="icon-keyboard-down" viewBox="0 0 11 6">
            <path d="M10.6579 1.76106C10.3062 2.12142 6.61033 5.64225 6.61033 5.64225C6.42153 5.8345 6.17583 5.93105 5.93013 5.93105C5.68443 5.93105 5.43873 5.8345 5.25166 5.64225C5.25166 5.64225 1.5541 2.12142 1.20408 1.76106C0.852345 1.4007 0.828207 0.752401 1.20408 0.368765C1.57824 -0.0157329 2.10153 -0.0459065 2.56103 0.368765L5.93013 3.59906L9.29923 0.368765C9.75873 -0.0459065 10.2829 -0.0157329 10.6579 0.368765C11.0338 0.752401 11.0105 1.4007 10.6579 1.76106Z"
            />
        </symbol>
        <symbol id="icon-keyboard-left" viewBox="0 0 6 10">
            <path d="M4.30791 9.72675C3.94755 9.37501 0.426722 5.67918 0.426722 5.67918C0.234473 5.49038 0.137917 5.24468 0.137917 4.99898C0.137917 4.75328 0.234473 4.50758 0.426722 4.3205C0.426722 4.3205 3.94755 0.622945 4.30791 0.272931C4.66827 -0.0788069 5.31657 -0.102945 5.7002 0.272931C6.0847 0.647084 6.11488 1.17038 5.7002 1.62988L2.46991 4.99898L5.7002 8.36808C6.11488 8.82758 6.0847 9.35174 5.7002 9.72675C5.31657 10.1026 4.66827 10.0794 4.30791 9.72675Z"
            />
        </symbol>
        <symbol id="icon-keyboard-right" viewBox="0 0 6 10">
            <path d="M1.69209 0.273249C2.05245 0.624986 5.57328 4.32082 5.57328 4.32082C5.76553 4.50962 5.86208 4.75532 5.86208 5.00102C5.86208 5.24672 5.76553 5.49242 5.57328 5.6795C5.57328 5.6795 2.05245 9.37706 1.69209 9.72707C1.33173 10.0788 0.683431 10.1029 0.299795 9.72707C-0.0847026 9.35292 -0.114876 8.82962 0.299795 8.37012L3.53009 5.00102L0.299795 1.63192C-0.114876 1.17242 -0.0847026 0.648263 0.299795 0.273249C0.683431 -0.102628 1.33173 -0.0793515 1.69209 0.273249Z"
            />
        </symbol>
        <symbol id="icon-language" viewBox="0 0 27 27">
            <path d="M13.501 3.68182C8.08563 3.68182 3.68176 8.0867 3.68176 13.5C3.68176 18.9133 8.08563 23.3182 13.501 23.3182C18.9143 23.3182 23.3191 18.9133 23.3191 13.5C23.3191 8.0867 18.9143 3.68182 13.501 3.68182ZM21.8751 13.5C21.8751 15.4156 21.2246 17.1818 20.1405 18.5932C19.8337 18.3539 19.5074 17.7065 19.8143 17.0356C20.1241 16.3606 20.2049 14.7978 20.1334 14.1893C20.0659 13.5818 19.7498 12.1183 18.8918 12.104C18.0347 12.0917 17.4466 11.8084 16.9373 10.7918C15.8809 8.67682 18.9204 8.2708 17.8639 7.1008C17.5684 6.77148 16.0404 8.45284 15.8164 6.21205C15.8021 6.05148 15.9545 5.81114 16.1601 5.56159C19.4778 6.67636 21.8751 9.81307 21.8751 13.5ZM12.3504 5.20875C12.1499 5.59943 11.6212 5.75795 11.3001 6.05148C10.6005 6.68455 10.2998 6.59659 9.92347 7.20409C9.54403 7.81159 8.32085 8.68602 8.32085 9.12579C8.32085 9.56557 8.93858 10.0831 9.24744 9.98284C9.55631 9.88057 10.3714 9.8867 10.8501 10.0544C11.3297 10.2242 14.853 10.394 13.7301 13.3722C13.3741 14.3192 11.8145 14.1597 11.3993 15.7275C11.3369 15.9576 11.1211 16.9405 11.1078 17.2616C11.0822 17.7586 11.4596 19.6323 10.9799 19.6323C10.4982 19.6323 9.20244 17.956 9.20244 17.6523C9.20244 17.3485 8.86699 16.2839 8.86699 15.3716C8.86699 14.4603 7.31449 14.4747 7.31449 13.2627C7.31449 12.1705 8.15619 11.6264 7.96699 11.1017C7.78188 10.5801 6.30301 10.5627 5.68631 10.4983C6.76324 7.70523 9.29654 5.63216 12.3504 5.20875ZM10.8664 21.4466C11.3696 21.1807 11.4207 20.837 11.8769 20.8197C12.3985 20.7961 12.8229 20.6161 13.411 20.4862C13.9326 20.3727 14.8663 19.843 15.6876 19.7755C16.381 19.7192 17.7484 19.8113 18.1165 20.4801C16.7921 21.3607 15.2038 21.8741 13.4999 21.8741C12.5805 21.8741 11.6948 21.7217 10.8664 21.4466Z"
            />
        </symbol>
        <symbol id="icon-like" viewBox="0 0 22 22">
            <path d="M17.6884 6.06867C16.1331 4.64378 13.6114 4.64378 12.0561 6.06867L11.0003 7.03655L9.94365 6.06867C8.38837 4.64378 5.86755 4.64378 4.31227 6.06867C2.56258 7.67282 2.56258 10.2672 4.31227 11.8704L11.0003 18L17.6884 11.8704C19.4372 10.2672 19.4372 7.67189 17.6884 6.06867Z"
            />
        </symbol>
        <symbol id="icon-list" viewBox="0 0 22 22">
            <path d="M16.0286 9.71429H9.4C8.76914 9.71429 8.71429 10.2251 8.71429 10.8571C8.71429 11.4891 8.76914 12 9.4 12H16.0286C16.6594 12 16.7143 11.4891 16.7143 10.8571C16.7143 10.2251 16.6594 9.71429 16.0286 9.71429ZM18.3143 15.4286H9.4C8.76914 15.4286 8.71429 15.9394 8.71429 16.5714C8.71429 17.2034 8.76914 17.7143 9.4 17.7143H18.3143C18.9451 17.7143 19 17.2034 19 16.5714C19 15.9394 18.9451 15.4286 18.3143 15.4286ZM9.4 6.28571H18.3143C18.9451 6.28571 19 5.77486 19 5.14286C19 4.51086 18.9451 4 18.3143 4H9.4C8.76914 4 8.71429 4.51086 8.71429 5.14286C8.71429 5.77486 8.76914 6.28571 9.4 6.28571ZM5.74286 9.71429H3.68571C3.05486 9.71429 3 10.2251 3 10.8571C3 11.4891 3.05486 12 3.68571 12H5.74286C6.37371 12 6.42857 11.4891 6.42857 10.8571C6.42857 10.2251 6.37371 9.71429 5.74286 9.71429ZM5.74286 15.4286H3.68571C3.05486 15.4286 3 15.9394 3 16.5714C3 17.2034 3.05486 17.7143 3.68571 17.7143H5.74286C6.37371 17.7143 6.42857 17.2034 6.42857 16.5714C6.42857 15.9394 6.37371 15.4286 5.74286 15.4286ZM5.74286 4H3.68571C3.05486 4 3 4.51086 3 5.14286C3 5.77486 3.05486 6.28571 3.68571 6.28571H5.74286C6.37371 6.28571 6.42857 5.77486 6.42857 5.14286C6.42857 4.51086 6.37371 4 5.74286 4Z"
            />
        </symbol>
        <symbol id="icon-location" viewBox="0 0 22 22">
            <path d="M18.4203 17.4816L17.3009 14.2H16.0727L16.7548 17.4H4.74567L5.42776 14.2H4.1995L3.07933 17.4816C2.79519 18.3168 3.29878 19 4.1995 19H17.3009C18.2017 19 18.7052 18.3168 18.4203 17.4816ZM14.8444 7C14.8444 4.7912 13.0119 3 10.7502 3C8.48858 3 6.65602 4.7912 6.65602 7C6.65602 10.82 10.7502 15 10.7502 15C10.7502 15 14.8444 10.82 14.8444 7ZM8.53935 7.048C8.53935 5.8552 9.52851 4.8888 10.7502 4.8888C11.9719 4.8888 12.9611 5.8552 12.9611 7.048C12.9611 8.2416 11.9711 9.208 10.7502 9.208C9.52933 9.208 8.53935 8.2408 8.53935 7.048Z"
            />
        </symbol>
        <symbol id="icon-logout" viewBox="0 0 22 22">
            <path d="M19 11L13.6667 6.55556V9.22222H7.44444V12.7778H13.6667V15.4444L19 11ZM4.77778 4.77778H11.8889V3H4.77778C3.8 3 3 3.8 3 4.77778V17.2222C3 18.2 3.8 19 4.77778 19H11.8889V17.2222H4.77778V4.77778Z" />
        </symbol>
        <symbol id="icon-menu" viewBox="0 0 22 22">
            <path d="M3 16C3 15.4477 3.44772 15 4 15H13C13.5523 15 14 15.4477 14 16C14 16.5523 13.5523 17 13 17H4C3.44772 17 3 16.5523 3 16Z" />
            <path d="M3 6C3 5.44772 3.44772 5 4 5H18C18.5523 5 19 5.44772 19 6C19 6.55228 18.5523 7 18 7H4C3.44772 7 3 6.55228 3 6Z" />
            <path d="M3 11C3 10.4477 3.44772 10 4 10H18C18.5523 10 19 10.4477 19 11C19 11.5523 18.5523 12 18 12H4C3.44772 12 3 11.5523 3 11Z" />
        </symbol>
        <symbol id="icon-message" viewBox="0 0 22 22">
            <path d="M17.4 5H4.6C3.72 5 3.008 5.74483 3.008 6.65517L3 15.3448C3 16.2552 3.72 17 4.6 17H17.4C18.28 17 19 16.2552 19 15.3448V6.65517C19 5.74483 18.28 5 17.4 5ZM16.6 15.3448H5.4C4.96 15.3448 4.6 14.9724 4.6 14.5172V8.31034L10.152 11.9021C10.672 12.2414 11.328 12.2414 11.848 11.9021L17.4 8.31034V14.5172C17.4 14.9724 17.04 15.3448 16.6 15.3448ZM11 10.7931L4.6 6.65517H17.4L11 10.7931Z"
            />
        </symbol>
        <symbol id="icon-more" viewBox="0 0 25 25">
            <path d="M12.501 10.2273C11.3004 10.2273 10.3261 11.2006 10.3261 12.4012C10.3261 13.6018 11.3004 14.5751 12.501 14.5751C13.7016 14.5751 14.6739 13.6018 14.6739 12.4012C14.6739 11.2006 13.7016 10.2273 12.501 10.2273ZM5.58402 10.2273C4.38343 10.2273 3.40912 11.2006 3.40912 12.4012C3.40912 13.6018 4.38343 14.5751 5.58402 14.5751C6.78461 14.5751 7.75694 13.6008 7.75694 12.4012C7.75694 11.2016 6.78461 10.2273 5.58402 10.2273ZM19.418 10.2273C18.2174 10.2273 17.2431 11.2006 17.2431 12.4012C17.2431 13.6018 18.2174 14.5751 19.418 14.5751C20.6186 14.5751 21.5909 13.6018 21.5909 12.4012C21.5909 11.2006 20.6186 10.2273 19.418 10.2273Z"
            />
        </symbol>
        <symbol id="icon-move" viewBox="0 0 9 24">
            <circle cx="1.5" cy="1.5" r="1.5" />
            <circle cx="1.5" cy="8.5" r="1.5" />
            <circle cx="1.5" cy="15.5" r="1.5" />
            <circle cx="1.5" cy="22.5" r="1.5" />
            <circle cx="7.5" cy="1.5" r="1.5" />
            <circle cx="7.5" cy="8.5" r="1.5" />
            <circle cx="7.5" cy="15.5" r="1.5" />
            <circle cx="7.5" cy="22.5" r="1.5" />
        </symbol>
        <symbol id="icon-password" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0002 4.4C9.78087 4.4 8.7924 5.38848 8.7924 6.60782V8.84119H13.208V6.60782C13.208 5.38848 12.2196 4.4 11.0002 4.4ZM14.608 8.84119V6.60782C14.608 4.61528 12.9928 3 11.0002 3C9.00767 3 7.3924 4.61528 7.3924 6.60782V8.84119H6.69994C5.20877 8.84119 3.99994 10.05 3.99994 11.5412V16.303C3.99994 17.7941 5.20877 19.003 6.69994 19.003H15.3005C16.7917 19.003 18.0005 17.7941 18.0005 16.303V11.5412C18.0005 10.05 16.7917 8.84119 15.3005 8.84119H14.608ZM6.69994 10.2412C5.98197 10.2412 5.39994 10.8232 5.39994 11.5412V16.303C5.39994 17.021 5.98197 17.603 6.69994 17.603H15.3005C16.0185 17.603 16.6005 17.021 16.6005 16.303V11.5412C16.6005 10.8232 16.0185 10.2412 15.3005 10.2412H13.908H8.0924H6.69994ZM14.6882 14.6887C15.1166 14.6887 15.464 14.34 15.464 13.9099C15.464 13.4798 15.1166 13.1311 14.6882 13.1311C14.2598 13.1311 13.9125 13.4798 13.9125 13.9099C13.9125 14.34 14.2598 14.6887 14.6882 14.6887ZM10.5494 13.9099C10.5494 14.34 10.2021 14.6887 9.77368 14.6887C9.34526 14.6887 8.99795 14.34 8.99795 13.9099C8.99795 13.4798 9.34526 13.1311 9.77368 13.1311C10.2021 13.1311 10.5494 13.4798 10.5494 13.9099ZM7.31792 14.6887C7.74634 14.6887 8.09365 14.3401 8.09365 13.9099C8.09365 13.4798 7.74634 13.1311 7.31792 13.1311C6.8895 13.1311 6.54219 13.4798 6.54219 13.9099C6.54219 14.3401 6.8895 14.6887 7.31792 14.6887ZM13.0064 13.9099C13.0064 14.34 12.6591 14.6887 12.2307 14.6887C11.8023 14.6887 11.455 14.34 11.455 13.9099C11.455 13.4798 11.8023 13.1311 12.2307 13.1311C12.6591 13.1311 13.0064 13.4798 13.0064 13.9099Z"
            />
        </symbol>
        <symbol id="icon-pdf" viewBox="0 0 31 40">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49998 -6.10352e-05H19.7412L30.9999 11.2149V37.4999C30.9999 38.8811 29.88 39.9999 28.4999 39.9999H2.49998C1.11994 39.9999 0 38.8811 0 37.4999V2.49992C0 1.11871 1.12007 -6.10352e-05 2.49998 -6.10352e-05Z"
            fill="#E2574C" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9638 11.2499H22.25C20.8699 11.2499 19.75 10.13 19.75 8.74998V0.0249634L30.9638 11.2499Z" fill="#B53629" />
            <path d="M6.96535 24.0599C6.72535 24.0599 6.53535 23.9899 6.39535 23.8499C6.25535 23.7099 6.18535 23.5199 6.18535 23.2799V17.6799C6.18535 17.4466 6.24868 17.2666 6.37535 17.1399C6.50202 17.0133 6.68202 16.9499 6.91535 16.9499H9.42535C10.192 16.9499 10.7887 17.1433 11.2154 17.5299C11.642 17.9166 11.8554 18.4566 11.8554 19.1499C11.8554 19.8433 11.642 20.3833 11.2154 20.7699C10.7887 21.1566 10.192 21.3499 9.42535 21.3499H7.74535V23.2799C7.74535 23.5199 7.67535 23.7099 7.53535 23.8499C7.39535 23.9899 7.20535 24.0599 6.96535 24.0599ZM9.22535 20.1699C10.0054 20.1699 10.3954 19.8333 10.3954 19.1599C10.3954 18.4799 10.0054 18.1399 9.22535 18.1399H7.74535V20.1699H9.22535ZM13.595 23.9999C13.3617 23.9999 13.1817 23.9366 13.055 23.8099C12.9284 23.6833 12.865 23.5033 12.865 23.2699V17.6799C12.865 17.4466 12.9284 17.2666 13.055 17.1399C13.1817 17.0133 13.3617 16.9499 13.595 16.9499H15.605C16.3717 16.9499 17.0317 17.0899 17.585 17.3699C18.1384 17.6499 18.5617 18.0533 18.855 18.5799C19.1484 19.1066 19.295 19.7366 19.295 20.4699C19.295 21.2033 19.1484 21.8366 18.855 22.3699C18.5684 22.8966 18.1484 23.2999 17.595 23.5799C17.0417 23.8599 16.3784 23.9999 15.605 23.9999H13.595ZM15.495 22.7399C16.995 22.7399 17.745 21.9833 17.745 20.4699C17.745 18.9633 16.995 18.2099 15.495 18.2099H14.425V22.7399H15.495ZM21.272 24.0599C21.0387 24.0599 20.8487 23.9899 20.702 23.8499C20.562 23.7033 20.492 23.5133 20.492 23.2799V17.6799C20.492 17.4466 20.5553 17.2666 20.682 17.1399C20.8087 17.0133 20.9887 16.9499 21.222 16.9499H24.662C24.9153 16.9499 25.102 16.9999 25.222 17.0999C25.342 17.1999 25.402 17.3566 25.402 17.5699C25.402 17.7766 25.342 17.9299 25.222 18.0299C25.102 18.1299 24.9153 18.1799 24.662 18.1799H22.032V19.7999H24.462C24.7153 19.7999 24.902 19.8499 25.022 19.9499C25.142 20.0499 25.202 20.2066 25.202 20.4199C25.202 20.6266 25.142 20.7799 25.022 20.8799C24.902 20.9799 24.7153 21.0299 24.462 21.0299H22.032V23.2799C22.032 23.5199 21.962 23.7099 21.822 23.8499C21.6887 23.9899 21.5053 24.0599 21.272 24.0599Z"
            fill="white" />
        </symbol>
        <symbol id="icon-phone" viewBox="0 0 25 25">
            <path d="M15.7728 6.13633H9.77277V3.40906H7.95459V20.3182C7.95459 21.0182 8.52641 21.5909 9.2255 21.5909H15.7728C16.4719 21.5909 17.0455 21.0172 17.0455 20.3182V7.40997C17.0455 6.70815 16.4719 6.13633 15.7728 6.13633ZM10.6819 17.0454C10.0537 17.0454 9.5455 16.6391 9.5455 16.1363C9.5455 15.6336 10.0537 15.2272 10.6819 15.2272C11.31 15.2272 11.8182 15.6336 11.8182 16.1363C11.8182 16.6391 11.31 17.0454 10.6819 17.0454ZM11.8182 18.8636C11.8182 19.3663 11.31 19.7727 10.6819 19.7727C10.0537 19.7727 9.5455 19.3663 9.5455 18.8636C9.5455 18.3609 10.0537 17.9545 10.6819 17.9545C11.31 17.9545 11.8182 18.3609 11.8182 18.8636ZM9.77277 13.4091V7.95451H15.2273V13.4091H9.77277ZM14.3182 17.0454C13.69 17.0454 13.1819 16.6391 13.1819 16.1363C13.1819 15.6336 13.69 15.2272 14.3182 15.2272C14.9464 15.2272 15.4546 15.6336 15.4546 16.1363C15.4546 16.6391 14.9464 17.0454 14.3182 17.0454ZM15.4546 18.8636C15.4546 19.3663 14.9464 19.7727 14.3182 19.7727C13.69 19.7727 13.1819 19.3663 13.1819 18.8636C13.1819 18.3609 13.69 17.9545 14.3182 17.9545C14.9464 17.9545 15.4546 18.3609 15.4546 18.8636Z"
            />
        </symbol>
        <symbol id="icon-plus" viewBox="0 0 16 16">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00738 2.18188C7.36472 2.18188 6.84374 2.70286 6.84374 3.34552V6.83643H3.35291C2.71025 6.83643 2.18927 7.35741 2.18927 8.00007C2.18927 8.64273 2.71025 9.16371 3.35291 9.16371H6.84374V12.6546C6.84374 13.2973 7.36472 13.8182 8.00738 13.8182C8.65004 13.8182 9.17102 13.2973 9.17102 12.6546V9.16371H12.662C13.3047 9.16371 13.8256 8.64273 13.8256 8.00007C13.8256 7.35741 13.3047 6.83643 12.662 6.83643H9.17102V3.34552C9.17102 2.70286 8.65004 2.18188 8.00738 2.18188Z"
            />
        </symbol>
        <symbol id="icon-print" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.0001 4.00007H7.00017V6.00012H6.0001V4.00007C6.0001 3.44831 6.44788 3 7.00017 3H15.0001C15.5527 3 16 3.44831 15.9999 4.00007V6.00012H15.0001V4.00007ZM8.00016 15.0003H13V16.0005H8.00016V15.0003ZM13.9998 13.0003H8.00016V14.0004H13.9998V13.0003ZM4.00007 7.00018H18.0001C18.5528 7.00018 19 7.44836 19 8.00015V14.0004C19 14.553 18.5528 15.0003 18.0001 15.0003H16V18.0005C16 18.5533 15.5528 19.0005 15.0001 19.0005H7.0002C6.44791 19.0005 6.00012 18.5533 6.00012 18.0005V15.0003H4.00007C3.44779 15.0003 3 14.553 3 14.0004V8.00015C3 7.44836 3.44779 7.00018 4.00007 7.00018ZM7.0002 18.0005H15.0001V12.0002H7.0002V18.0005ZM16 9.00023C16 9.55301 16.4472 10.0003 16.9999 10.0003C17.5527 10.0003 18.0001 9.55298 18.0001 9.00023C18.0001 8.44847 17.5528 8.00015 16.9999 8.00015C16.4472 8.00015 16 8.4485 16 9.00023Z"
            />
        </symbol>
        <symbol id="icon-pushpin" viewBox="0 0 22 22">
            <path d="M14.5306 13.8831C14.3445 13.0996 13.966 12.5749 13.3948 12.3085L15.4754 7.8466C15.7753 7.98647 16.0867 7.99729 16.4086 7.87864C16.7309 7.76017 16.9626 7.54978 17.1034 7.24776C17.2443 6.94559 17.2565 6.63302 17.14 6.30995C17.0241 5.98709 16.8157 5.75552 16.5157 5.61563L10.9774 3.03307C10.6773 2.89314 10.3663 2.8825 10.0441 3.00104C9.72186 3.11957 9.49038 3.32983 9.34946 3.63203C9.20857 3.93418 9.19626 4.24671 9.31258 4.56973C9.42888 4.8927 9.63709 5.12416 9.93707 5.26404L7.8565 9.72584C7.28533 9.4595 6.63997 9.50689 5.92018 9.86796C5.20044 10.2291 4.67398 10.7667 4.34068 11.4815C4.27025 11.6325 4.26411 11.7888 4.32229 11.9503C4.38056 12.1117 4.48462 12.2274 4.63462 12.2974L8.13076 13.9277L6.81754 18.461C6.77316 18.6313 6.82897 18.7527 6.98473 18.8253L6.99355 18.8294C7.06248 18.8616 7.13342 18.8646 7.20539 18.8382C7.27738 18.8116 7.33546 18.7661 7.37947 18.7018L9.78349 14.6984L13.496 16.4295C13.646 16.4995 13.8017 16.5049 13.9625 16.4457C14.1237 16.3865 14.2396 16.2814 14.31 16.1303C14.6434 15.4157 14.7167 14.6666 14.5306 13.8831ZM9.92492 10.351C9.88703 10.4323 9.82999 10.487 9.75358 10.5151C9.67726 10.5432 9.5987 10.5384 9.51795 10.5007C9.43726 10.4631 9.38302 10.406 9.35548 10.3295C9.32794 10.253 9.33319 10.174 9.37108 10.0928L11.1916 6.18871C11.2295 6.1074 11.2866 6.05252 11.3629 6.02456C11.4392 5.99656 11.5178 6.00137 11.5985 6.039C11.6792 6.07665 11.7335 6.13367 11.761 6.2102C11.7886 6.28668 11.7833 6.36566 11.7454 6.44697L9.92492 10.351Z"
            />
        </symbol>
        <symbol id="icon-refresh" viewBox="0 0 22 22">
            <path d="M6.62499 15.1205C4.41825 12.7479 4.45728 9.02903 6.74987 6.71985C7.68837 5.77452 8.861 5.21064 10.0805 5.02626L10.0132 3C8.30102 3.2078 6.64548 3.97167 5.33334 5.29357C2.26126 8.38613 2.22419 13.3801 5.21334 16.5429L3.51487 18.2521L8.89027 18.5457L8.87564 12.8542L6.62499 15.1205ZM13.1096 3.45364L13.1242 9.14512L15.3749 6.87985C17.5816 9.25438 17.5426 12.9733 15.25 15.2805C14.3125 16.2258 13.1389 16.7897 11.9194 16.9741L11.9867 18.9994C13.6989 18.7916 15.3544 18.0277 16.6675 16.7068C19.7386 13.6123 19.7757 8.61831 16.7865 5.45746L18.485 3.74631L13.1096 3.45364Z"
            />
        </symbol>
        <symbol id="icon-reply-all" viewBox="0 0 22 22">
            <path d="M8.78 8.1448V6L3 11.1648L8.78 16.5176V14.296L5.4 11.1648L8.78 8.1448ZM12.78 9.0936V6L7 11.1648L12.78 16.5176V13.032C15.4136 13.032 17.0128 13.3696 19 16.88C19 16.8792 18.7056 9.0936 12.78 9.0936Z" />
        </symbol>
        <symbol id="icon-reply" viewBox="0 0 22 22">
            <path d="M19 17.192C19 17.192 17.0222 8.54133 9.22222 8.54133V5L3 10.8427L9.22222 16.7893V12.9164C13.456 12.9156 16.792 13.2907 19 17.192Z" />
        </symbol>
        <symbol id="icon-restore" viewBox="0 0 14 14">
            <path d="M9.06667 13V13.5C9.19597 13.5 9.32025 13.4499 9.41341 13.3602L9.06667 13ZM12 10.1765L12.3467 10.5367C12.4447 10.4424 12.5 10.3124 12.5 10.1765H12ZM0.5 2V12H1.5V2H0.5ZM11 0.5H2V1.5H11V0.5ZM2 13.5H9.06667V12.5H2V13.5ZM9.56667 13V11.1765H8.56667V13H9.56667ZM12.5 10.1765V2H11.5V10.1765H12.5ZM10.0667 10.6765H12V9.67647H10.0667V10.6765ZM9.41341 13.3602L12.3467 10.5367L11.6533 9.81624L8.71992 12.6398L9.41341 13.3602ZM9.56667 11.1765C9.56667 10.9003 9.79052 10.6765 10.0667 10.6765V9.67647C9.23824 9.67647 8.56667 10.348 8.56667 11.1765H9.56667ZM11 1.5C11.2761 1.5 11.5 1.72386 11.5 2H12.5C12.5 1.17157 11.8284 0.5 11 0.5V1.5ZM0.5 12C0.5 12.8284 1.17157 13.5 2 13.5V12.5C1.72386 12.5 1.5 12.2761 1.5 12H0.5ZM1.5 2C1.5 1.72386 1.72386 1.5 2 1.5V0.5C1.17157 0.5 0.5 1.17157 0.5 2H1.5Z"
            />
            <path d="M4 6.5L3.575 6.76338C3.71117 6.98312 3.99239 7.06282 4.22361 6.94721L4 6.5ZM3.3125 5.39062L3.48232 4.92035C3.28215 4.84806 3.05815 4.91042 2.92411 5.07573C2.79008 5.24105 2.77538 5.4731 2.8875 5.65401L3.3125 5.39062ZM5 6L5.22361 6.44721C5.40247 6.35778 5.51085 6.17037 5.49914 5.97074C5.48744 5.7711 5.35791 5.59764 5.16982 5.52972L5 6ZM5.61068 8.29202C5.36344 8.16902 5.06331 8.26975 4.94032 8.51699C4.81732 8.76423 4.91805 9.06436 5.16529 9.18735L5.61068 8.29202ZM8.5 6.5C8.5 7.60457 7.60457 8.5 6.5 8.5V9.5C8.15685 9.5 9.5 8.15685 9.5 6.5H8.5ZM4.5 6.5C4.5 5.39543 5.39543 4.5 6.5 4.5V3.5C4.84315 3.5 3.5 4.84315 3.5 6.5H4.5ZM6.5 4.5C7.60457 4.5 8.5 5.39543 8.5 6.5H9.5C9.5 4.84315 8.15685 3.5 6.5 3.5V4.5ZM4.425 6.23662L3.7375 5.12724L2.8875 5.65401L3.575 6.76338L4.425 6.23662ZM3.14268 5.8609L4.83018 6.47028L5.16982 5.52972L3.48232 4.92035L3.14268 5.8609ZM4.77639 5.55279L3.77639 6.05279L4.22361 6.94721L5.22361 6.44721L4.77639 5.55279ZM6.5 8.5C6.17951 8.5 5.87798 8.42499 5.61068 8.29202L5.16529 9.18735C5.56786 9.38762 6.02152 9.5 6.5 9.5V8.5Z"
            />
        </symbol>
        <symbol id="icon-save" viewBox="0 0 16 16">
            <path d="M11.762 2.18182H3.63619C2.83546 2.18182 2.18164 2.83637 2.18164 3.63637V12.3636C2.18164 13.1636 2.83546 13.8182 3.63619 13.8182H12.3635C13.1642 13.8182 13.818 13.1636 13.818 12.3636V4.45601L11.762 2.18182ZM10.9089 6.54546C10.9089 6.94473 10.5816 7.27273 10.1816 7.27273H5.818C5.418 7.27273 5.09073 6.94473 5.09073 6.54546V2.9091H10.9089V6.54546ZM10.1816 3.63637H8.7271V6.54546H10.1816V3.63637Z"
            />
        </symbol>
        <symbol id="icon-search" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.1184 13.4407C11.1132 14.1763 9.87362 14.6106 8.53259 14.6106C5.17579 14.6106 2.45456 11.8894 2.45456 8.53258C2.45456 5.17577 5.17579 2.45455 8.53259 2.45455C11.8894 2.45455 14.6106 5.17577 14.6106 8.53258C14.6106 9.87378 14.1762 11.1135 13.4404 12.1188C13.4461 12.1242 13.4518 12.1297 13.4574 12.1353L15.2716 13.9495C15.6368 14.3147 15.6368 14.9067 15.2716 15.2719C14.9064 15.6371 14.3144 15.6371 13.9492 15.2719L12.135 13.4577C12.1294 13.4521 12.1238 13.4464 12.1184 13.4407ZM12.874 8.53258C12.874 10.9303 10.9303 12.874 8.53259 12.874C6.13488 12.874 4.19114 10.9303 4.19114 8.53258C4.19114 6.13486 6.13488 4.19113 8.53259 4.19113C10.9303 4.19113 12.874 6.13486 12.874 8.53258Z"
            />
        </symbol>
        <symbol id="icon-send" viewBox="0 0 22 22">
            <path d="M16.862 3.12108L3.95415 8.45832C3.41034 8.68315 3.04632 9.1875 3.00407 9.77441C2.96187 10.3614 3.24997 10.9126 3.75597 11.213L7.45534 13.2884C8.02155 12.7222 12.3904 9.60964 12.3904 9.60964C12.3904 9.60964 9.27785 13.9785 8.71165 14.5447L10.787 18.244C11.0874 18.75 11.6386 19.0382 12.2256 18.9959C12.8137 18.9536 13.3172 18.5886 13.5417 18.0458L18.8789 5.13795C19.1219 4.55026 18.9935 3.90584 18.5438 3.45616C18.0942 3.00647 17.4497 2.87803 16.862 3.12108Z"
            />
        </symbol>
        <symbol id="icon-settings" viewBox="0 0 22 22">
            <path d="M17.4583 10.999C17.4583 10.0001 18.0734 9.21355 18.9981 8.67266C18.8305 8.11653 18.6105 7.58231 18.3391 7.08047C17.3021 7.35186 16.4632 6.9462 15.7575 6.23961C15.0519 5.53494 14.8357 4.69599 15.1071 3.65802C14.6053 3.38662 14.0711 3.16474 13.5149 3C12.9741 3.9237 11.9961 4.53791 10.999 4.53791C10.0011 4.53791 9.02404 3.9237 8.4822 3C7.92513 3.16474 7.39281 3.38662 6.89097 3.65802C7.16236 4.69599 6.94715 5.53494 6.23961 6.23961C5.53494 6.9462 4.69599 7.35186 3.65802 7.08047C3.38662 7.58231 3.16569 8.11653 3 8.67266C3.9237 9.21355 4.53791 10.0001 4.53791 10.999C4.53791 11.9961 3.9237 12.974 3 13.5159C3.16665 14.072 3.38662 14.6053 3.65802 15.1081C4.69599 14.8367 5.53494 15.0519 6.23961 15.7575C6.94524 16.4641 7.16236 17.3031 6.89097 18.3391C7.39281 18.6105 7.92608 18.8324 8.48316 18.999C9.02404 18.0725 10.002 17.4592 11 17.4592C11.997 17.4592 12.975 18.0734 13.5168 18.999C14.073 18.8314 14.6062 18.6105 15.109 18.3391C14.8376 17.3031 15.0528 16.4641 15.7594 15.7575C16.4651 15.0528 17.304 14.6472 18.341 14.9167C18.6124 14.4148 18.8334 13.8825 19 13.3245C18.0734 12.7826 17.4583 11.9961 17.4583 10.999ZM10.999 14.4767C9.07737 14.4767 7.52041 12.9198 7.52041 10.999C7.52041 9.07737 9.07832 7.51946 10.999 7.51946C12.9207 7.51946 14.4767 9.07832 14.4767 10.999C14.4767 12.9207 12.9207 14.4767 10.999 14.4767Z"
            />
        </symbol>
        <symbol id="icon-star" viewBox="0 0 22 22">
            <path d="M11.7725 3.48035L13.5771 7.13694C13.7026 7.39126 13.9452 7.56748 14.2259 7.6082L18.2613 8.1946C18.9682 8.2974 19.2502 9.16582 18.7389 9.66411L15.8189 12.5103C15.616 12.7083 15.5232 12.9936 15.5712 13.273L16.2604 17.292C16.3813 17.9959 15.6423 18.5326 15.0102 18.2005L11.401 16.3031C11.15 16.1713 10.85 16.1713 10.599 16.3031L6.9898 18.2005C6.35768 18.5329 5.61875 17.9959 5.73957 17.292L6.42877 13.273C6.47683 12.9936 6.38404 12.7083 6.18112 12.5103L3.26112 9.66411C2.74982 9.16549 3.03184 8.29706 3.73872 8.1946L7.77412 7.6082C8.05481 7.56748 8.29744 7.39126 8.42293 7.13694L10.2275 3.48035C10.5433 2.83988 11.4564 2.83988 11.7725 3.48035Z"
            />
        </symbol>
        <symbol id="icon-status" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.77822 16.3367H16.3367V11.8911L18.1149 10.1129V16.3367C18.1149 17.3147 17.3147 18.1149 16.3367 18.1149H4.77822C3.8002 18.1149 3 17.3147 3 16.3367V4.77822C3 3.8002 3.8002 3 4.77822 3H11.002L9.22379 4.77822H4.77822V16.3367ZM18.717 5.73187C19.081 5.37526 19.0958 4.78186 18.75 4.40648C18.4042 4.0311 17.8288 4.01589 17.4648 4.3725L10.8345 10.8681L8.55192 8.51427C8.19689 8.14816 7.62129 8.14816 7.26627 8.51427C6.91124 8.88039 6.91124 9.47398 7.26627 9.8401L10.1754 12.8401C10.524 13.1996 11.0869 13.207 11.4443 12.8569L18.717 5.73187Z"
            />
        </symbol>
        <symbol id="icon-task-notes" viewBox="0 0 22 22">
            <path d="M18.2696 3.73061C17.2898 2.75081 16.4185 3.03977 16.4185 3.03977L8.73744 10.7146L7.44556 14.5547L11.2839 13.2619L18.9605 5.58175C18.9605 5.58175 19.2485 4.71042 18.2696 3.73061ZM11.5399 12.4252L11.1212 12.8431L9.81149 13.2877C9.71902 13.0743 9.60344 12.8636 9.36871 12.6297C9.13399 12.395 8.92416 12.2794 8.71077 12.187L9.15532 10.8773L9.5741 10.4594C9.5741 10.4594 10.264 10.3803 10.9407 11.0578C11.6182 11.7344 11.5399 12.4252 11.5399 12.4252ZM16.3367 17.222H4.77822V5.66354H9.22379L11.002 3.88532H4.77822C3.8002 3.88532 3 4.68552 3 5.66354V17.222C3 18.2 3.8002 19.0002 4.77822 19.0002H16.3367C17.3147 19.0002 18.1149 18.2 18.1149 17.222V10.9982L16.3367 12.7764V17.222Z"
            />
        </symbol>
        <symbol id="icon-task" viewBox="0 0 22 22">
            <path d="M18.2696 3.73061C17.2898 2.75081 16.4185 3.03977 16.4185 3.03977L8.73744 10.7146L7.44556 14.5547L11.2839 13.2619L18.9605 5.58175C18.9605 5.58175 19.2485 4.71042 18.2696 3.73061ZM11.5399 12.4252L11.1212 12.8431L9.81149 13.2877C9.71902 13.0743 9.60344 12.8636 9.36871 12.6297C9.13399 12.395 8.92416 12.2794 8.71077 12.187L9.15532 10.8773L9.5741 10.4594C9.5741 10.4594 10.264 10.3803 10.9407 11.0578C11.6182 11.7344 11.5399 12.4252 11.5399 12.4252ZM16.3367 17.222H4.77822V5.66354H9.22379L11.002 3.88532H4.77822C3.8002 3.88532 3 4.68552 3 5.66354V17.222C3 18.2 3.8002 19.0002 4.77822 19.0002H16.3367C17.3147 19.0002 18.1149 18.2 18.1149 17.222V10.9982L16.3367 12.7764V17.222Z"
            />
        </symbol>
        <symbol id="icon-text-bold" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2184 9.48564C13.7071 8.88901 12.9487 8.47436 11.9429 8.24137C12.6478 7.91749 13.0739 7.69877 13.2216 7.58519C13.5795 7.31811 13.8494 7.01975 14.0309 6.69026C14.2128 6.36064 14.3036 5.99703 14.3036 5.59936C14.3036 5.23008 14.2441 4.88351 14.1246 4.55963C14.0053 4.23568 13.8207 3.94025 13.5707 3.67323C13.315 3.40628 13.0253 3.19025 12.7014 3.02547C12.4002 2.8778 12.1275 2.76702 11.8832 2.69317C11.298 2.53974 10.7554 2.46302 10.2554 2.46302H9.62473C9.51113 2.46302 9.3959 2.46159 9.27945 2.45872L9.18214 2.45646L9.09635 2.45454C9.06802 2.45454 9.02817 2.45604 8.97689 2.45875C8.92575 2.46162 8.88587 2.46305 8.85751 2.46305L8.47393 2.47162L5.23544 2.5824L3.01961 2.63356L3.0537 3.34088C3.5309 3.40344 3.8549 3.44049 4.02529 3.45177C4.31505 3.46882 4.51107 3.51153 4.61338 3.57962C4.67594 3.62514 4.71003 3.6592 4.71571 3.68193C4.77248 3.80691 4.80365 4.11654 4.80944 4.61091C4.83213 5.45184 4.85777 6.59954 4.8861 8.05403L4.90314 12.2897C4.90314 13.0169 4.87762 13.5682 4.82648 13.9431C4.80377 14.0795 4.74404 14.2244 4.64747 14.3779C4.38609 14.4856 4.03669 14.5739 3.59919 14.642C3.4686 14.659 3.27537 14.693 3.01973 14.7444L3.00269 15.5455C4.36057 15.4999 5.13326 15.4688 5.32099 15.4516C6.53678 15.3777 7.38348 15.3466 7.8607 15.3578L9.53958 15.3919C10.1989 15.4145 10.7613 15.3832 11.2272 15.2981C11.9657 15.1618 12.5423 14.9912 12.9573 14.7866C13.3776 14.5821 13.7753 14.2752 14.1502 13.8662C14.4346 13.5538 14.636 13.2214 14.7554 12.869C14.9201 12.3862 15.0025 11.9289 15.0025 11.497C15.0026 10.7585 14.7413 10.0879 14.2184 9.48564ZM7.54536 3.44338C7.98852 3.36953 8.35784 3.33261 8.65327 3.33261C9.6248 3.33261 10.3494 3.54572 10.8266 3.9718C11.3092 4.39784 11.5508 4.92915 11.5508 5.56545C11.5508 6.46892 11.2981 7.10524 10.7924 7.47453C10.2868 7.84379 9.53676 8.0285 8.5425 8.0285C8.16751 8.0285 7.85786 8.00866 7.6136 7.96889C7.60784 7.77567 7.605 7.55695 7.605 7.31259L7.6136 6.47739C7.61921 5.58545 7.60217 4.79288 7.56244 4.09959C7.55102 3.91213 7.54536 3.69353 7.54536 3.44338ZM10.767 14.2499C11.2498 14.0169 11.5965 13.6958 11.8067 13.2868C12.0224 12.8891 12.1304 12.375 12.1306 11.7445C12.1306 11.0967 12.0141 10.5854 11.7812 10.2103C11.4516 9.67621 11.051 9.3183 10.5795 9.13633C10.1249 8.95457 9.42327 8.86364 8.4744 8.86364C8.05399 8.86364 7.76703 8.892 7.6136 8.94881V10.1761L7.605 11.6505L7.6305 13.9516C7.63062 14.0368 7.66473 14.1621 7.73291 14.3267C8.1647 14.5085 8.56244 14.5993 8.92608 14.5993C9.67029 14.5993 10.284 14.4829 10.767 14.2499Z"
            />
        </symbol>
        <symbol id="icon-text-center" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1571 6.59037H7.55718C7.45789 6.59037 7.37196 6.55102 7.29932 6.47236C7.22678 6.39363 7.19048 6.30048 7.19048 6.19282V5.39762C7.19048 5.28995 7.22678 5.19672 7.29931 5.11802C7.37191 5.03943 7.45782 5 7.55718 5H14.1571C14.2564 5 14.3424 5.03943 14.415 5.11802C14.4875 5.19681 14.5238 5.28995 14.5238 5.39762V6.19282C14.5238 6.3005 14.4875 6.39365 14.415 6.47236C14.3424 6.55102 14.2564 6.59037 14.1571 6.59037ZM17.143 10.0604H4.57147C4.42964 10.0604 4.30689 10.021 4.20311 9.94225C4.09948 9.86367 4.04762 9.77041 4.04762 9.66277V8.86756C4.04762 8.75988 4.09948 8.66669 4.20308 8.58803C4.30679 8.50933 4.42952 8.47001 4.57147 8.47001H17.143C17.2849 8.47001 17.4076 8.50933 17.5113 8.58803C17.6149 8.66671 17.6667 8.75981 17.6667 8.86756V9.66277C17.6667 9.77041 17.6149 9.86367 17.5113 9.94225C17.4076 10.021 17.2848 10.0604 17.143 10.0604ZM18.8303 15.5277C18.7171 15.449 18.583 15.4096 18.4284 15.4096H3.57147C3.41661 15.4096 3.28273 15.449 3.16959 15.5277C3.05657 15.6064 3 15.6996 3 15.8072V16.6024C3 16.71 3.05657 16.8032 3.16962 16.8821C3.28286 16.9607 3.4168 17 3.5715 17H18.4284C18.583 17 18.7171 16.9607 18.8303 16.8821C18.9433 16.8033 19 16.71 19 16.6024V15.8072C18.9999 15.6996 18.9433 15.6064 18.8303 15.5277ZM15.1429 13.5301H6.57147C6.45541 13.5301 6.35498 13.4908 6.27008 13.4121C6.18529 13.3335 6.14286 13.2402 6.14286 13.1326V12.3374C6.14286 12.2298 6.18529 12.1365 6.27005 12.0579C6.35491 11.9792 6.45533 11.9398 6.57147 11.9398H15.1429C15.2589 11.9398 15.3594 11.9792 15.4442 12.0579C15.529 12.1365 15.5715 12.2298 15.5715 12.3374V13.1325C15.5715 13.2402 15.529 13.3334 15.4442 13.412C15.3594 13.4907 15.2588 13.5301 15.1429 13.5301Z"
            />
        </symbol>
        <symbol id="icon-text-font" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6878 14.2574C14.9345 14.2893 15.2045 14.3612 15.4982 14.473C15.5297 14.6809 15.5453 14.8326 15.5453 14.9283C15.5453 15.003 15.5429 15.0722 15.5375 15.1361C15.1179 15.1361 14.6143 15.1148 14.0271 15.0722C13.5392 15.0297 13.0435 15.0083 12.5403 15.0083C12.126 15.0083 11.7718 15.0137 11.4781 15.0244L9.90469 15.1122L9.44839 15.1283C9.44839 14.8886 9.45866 14.6809 9.47968 14.505L10.5103 14.2814C10.8042 14.2122 10.9824 14.151 11.0454 14.0977C11.1084 14.0339 11.1398 13.9619 11.1398 13.882C11.1398 13.8021 11.1241 13.717 11.0926 13.6263L10.7231 12.7156L9.99925 10.8939L6.45895 10.878C6.30684 11.2241 6.03419 11.954 5.6408 13.0671C5.52019 13.4082 5.45984 13.6317 5.45984 13.7383C5.45984 13.9035 5.50443 14.018 5.59359 14.0818C5.72991 14.1936 6.00002 14.2789 6.4039 14.3375C6.41962 14.3375 6.45509 14.3429 6.51011 14.3534C6.56518 14.3641 6.64386 14.3773 6.74612 14.3934C6.84835 14.4093 6.95457 14.4254 7.06468 14.4413C7.07 14.5905 7.07259 14.7449 7.07259 14.9048C7.07259 14.9952 7.06735 15.0672 7.05686 15.1205C6.71077 15.1205 5.79557 15.0672 4.31125 14.9608L3.93359 15.0245C3.50883 15.099 3.07088 15.1364 2.61981 15.1364H2.45459L2.47032 14.5049C2.5857 14.4677 2.79544 14.4198 3.0997 14.361C3.56645 14.276 3.85494 14.1933 3.96506 14.1135C4.06993 14.0283 4.19585 13.8471 4.34272 13.5702L6.20721 8.64829L8.40993 2.86363H8.99998H9.41686L9.50344 3.03143L11.1162 6.86651C11.6565 8.15564 11.9815 8.94664 12.0917 9.23954C12.2962 9.78284 12.5479 10.4088 12.8468 11.1171C12.9831 11.4261 13.1537 11.8629 13.3583 12.4276C13.4841 12.7845 13.6545 13.1814 13.8696 13.618C13.985 13.8791 14.0768 14.0308 14.1451 14.0736C14.2604 14.1749 14.4414 14.236 14.6878 14.2574ZM8.96455 9.93071C9.16644 9.93329 9.30411 9.93474 9.37757 9.93474L9.60588 9.91882C9.43797 9.41279 9.19675 8.77089 8.88194 7.99319C8.60402 7.29005 8.36281 6.72811 8.15825 6.30729L6.82088 9.90275C7.20372 9.9081 7.60627 9.91336 8.02844 9.91882L8.96455 9.93071Z"
            />
        </symbol>
        <symbol id="icon-text-justify" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8303 5.11802C18.7171 5.03943 18.583 5 18.4284 5H3.57147C3.41661 5 3.28273 5.03943 3.16959 5.11802C3.05657 5.19672 3 5.28995 3 5.39762V6.19282C3 6.30048 3.05657 6.39363 3.16962 6.47236C3.28286 6.55104 3.4168 6.59037 3.5715 6.59037H18.4284C18.583 6.59037 18.7171 6.55102 18.8303 6.47236C18.9433 6.39365 19 6.3005 19 6.19282V5.39762C18.9999 5.28995 18.9433 5.19678 18.8303 5.11802ZM3.57147 11.9399H18.4284C18.583 11.9399 18.7171 11.9792 18.8303 12.058C18.9433 12.1366 19 12.2299 19 12.3375V13.1326C19 13.2403 18.9433 13.3335 18.8303 13.4121C18.7171 13.4908 18.583 13.5303 18.4284 13.5303H3.5715C3.4168 13.5303 3.28286 13.4908 3.16962 13.4121C3.05657 13.3335 3 13.2402 3 13.1326V12.3375C3 12.2299 3.05657 12.1366 3.16959 12.058C3.28273 11.9793 3.41661 11.9399 3.57147 11.9399ZM3.57147 15.4096H18.4284C18.583 15.4096 18.7171 15.449 18.8303 15.5277C18.9433 15.6064 19 15.6996 19 15.8072V16.6024C19 16.71 18.9433 16.8033 18.8303 16.8821C18.7171 16.9607 18.583 17 18.4284 17H3.5715C3.4168 17 3.28286 16.9607 3.16962 16.8821C3.05657 16.8032 3 16.71 3 16.6024V15.8072C3 15.6996 3.05657 15.6064 3.16959 15.5277C3.28273 15.449 3.41661 15.4096 3.57147 15.4096ZM3.57147 8.47001H18.4284C18.583 8.47001 18.7171 8.50933 18.8303 8.58803C18.9433 8.66671 19 8.75981 19 8.86756V9.66277C19 9.77041 18.9433 9.86367 18.8303 9.94225C18.7171 10.021 18.583 10.0604 18.4284 10.0604H3.5715C3.4168 10.0604 3.28286 10.021 3.16962 9.94225C3.05657 9.86367 3 9.77041 3 9.66277V8.86756C3 8.75988 3.05657 8.66669 3.16959 8.58803C3.28273 8.50933 3.41661 8.47001 3.57147 8.47001Z"
            />
        </symbol>
        <symbol id="icon-text-left" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9474 6.59037H3.57624C3.42021 6.59037 3.28519 6.55102 3.17104 6.47236C3.05704 6.39363 3 6.30048 3 6.19282V5.39762C3 5.28995 3.05704 5.19672 3.17101 5.11802C3.28509 5.03943 3.42009 5 3.57624 5H13.9474C14.1035 5 14.2388 5.03943 14.3528 5.11802C14.4667 5.19681 14.5238 5.28995 14.5238 5.39762V6.19282C14.5238 6.3005 14.4667 6.39365 14.3528 6.47236C14.2387 6.55102 14.1035 6.59037 13.9474 6.59037ZM17.2858 10.0604H3.57147C3.41674 10.0604 3.28283 10.021 3.16962 9.94225C3.05657 9.86367 3 9.77041 3 9.66277V8.86756C3 8.75988 3.05657 8.66669 3.16959 8.58803C3.28273 8.50933 3.41661 8.47001 3.57147 8.47001H17.2858C17.4405 8.47001 17.5744 8.50933 17.6875 8.58803C17.8005 8.66671 17.857 8.75981 17.857 8.86756V9.66277C17.857 9.77041 17.8005 9.86367 17.6875 9.94225C17.5744 10.021 17.4405 10.0604 17.2858 10.0604ZM18.8303 15.5277C18.7171 15.449 18.583 15.4096 18.4284 15.4096H3.57147C3.41661 15.4096 3.28273 15.449 3.16959 15.5277C3.05657 15.6064 3 15.6996 3 15.8072V16.6024C3 16.71 3.05657 16.8032 3.16962 16.8821C3.28286 16.9607 3.4168 17 3.5715 17H18.4284C18.583 17 18.7171 16.9607 18.8303 16.8821C18.9433 16.8033 19 16.71 19 16.6024V15.8072C18.9999 15.6996 18.9433 15.6064 18.8303 15.5277ZM15 13.5301H3.57147C3.41674 13.5301 3.28283 13.4908 3.16962 13.4121C3.05657 13.3335 3 13.2402 3 13.1326V12.3374C3 12.2298 3.05657 12.1365 3.16959 12.0579C3.28273 11.9792 3.41661 11.9398 3.57147 11.9398H15C15.1547 11.9398 15.2887 11.9792 15.4017 12.0579C15.5148 12.1365 15.5715 12.2298 15.5715 12.3374V13.1325C15.5715 13.2402 15.5148 13.3334 15.4017 13.412C15.2887 13.4907 15.1547 13.5301 15 13.5301Z"
            />
        </symbol>
        <symbol id="icon-text-right" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.4281 5C18.5827 5 18.7168 5.03943 18.8299 5.11802C18.9429 5.19678 18.9996 5.28995 18.9996 5.39762V6.19282C18.9996 6.3005 18.9429 6.39365 18.8299 6.47236C18.7167 6.55102 18.5826 6.59037 18.4281 6.59037H8.1426C7.98783 6.59037 7.85392 6.55104 7.74075 6.47236C7.62764 6.39363 7.57106 6.30048 7.57106 6.19282V5.39762C7.57106 5.28995 7.62764 5.19672 7.74075 5.11802C7.8538 5.03943 7.98773 5 8.1426 5H18.4281ZM18.4283 8.47001H4.71424C4.55937 8.47001 4.42543 8.50933 4.31239 8.58803C4.19927 8.66669 4.14277 8.75988 4.14277 8.86756V9.66277C4.14277 9.77041 4.19927 9.86367 4.31239 9.94225C4.42556 10.021 4.55937 10.0604 4.71424 10.0604H18.4283C18.5829 10.0604 18.717 10.021 18.8302 9.94225C18.9431 9.86367 18.9998 9.77041 18.9998 9.66277V8.86756C18.9998 8.75981 18.9431 8.66671 18.8302 8.58803C18.717 8.50933 18.5829 8.47001 18.4283 8.47001ZM6.99977 11.9399H18.4281C18.5827 11.9399 18.7168 11.9792 18.83 12.058C18.943 12.1366 18.9997 12.2299 18.9997 12.3375V13.1326C18.9997 13.2403 18.943 13.3335 18.83 13.4121C18.7168 13.4908 18.5827 13.5303 18.4281 13.5303H6.99977C6.845 13.5303 6.71112 13.4908 6.59792 13.4121C6.48481 13.3335 6.4283 13.2402 6.4283 13.1326V12.3375C6.4283 12.2299 6.48477 12.1366 6.59792 12.058C6.71103 11.9793 6.8449 11.9399 6.99977 11.9399ZM3.57147 15.4096H18.4284C18.583 15.4096 18.7171 15.449 18.8303 15.5277C18.9433 15.6064 19 15.6996 19 15.8072V16.6024C19 16.71 18.9433 16.8033 18.8303 16.8821C18.7171 16.9607 18.583 17 18.4284 17H3.5715C3.4168 17 3.28286 16.9607 3.16962 16.8821C3.05657 16.8032 3 16.71 3 16.6024V15.8072C3 15.6996 3.05657 15.6064 3.16959 15.5277C3.28273 15.449 3.41661 15.4096 3.57147 15.4096Z"
            />
        </symbol>
        <symbol id="icon-text-style" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0596 2.47589C12.8608 2.49016 12.6675 2.50302 12.48 2.51431C11.6391 2.56532 11.031 2.59096 10.6561 2.59096C10.4629 2.59096 10.2555 2.5852 10.034 2.57392L7.3324 2.45454L7.17043 3.3324C7.2272 3.34368 7.3352 3.35515 7.49431 3.36652C8.07945 3.40049 8.48859 3.48013 8.72154 3.60512V3.929L8.65336 4.35503L8.4659 5.50561L8.32948 6.04257L8.08231 7.3806C8.08231 7.38636 8.07234 7.41905 8.05246 7.47873C8.03259 7.53833 8.00697 7.62496 7.9758 7.73857C7.9445 7.85228 7.90906 7.9844 7.86921 8.13493C7.82936 8.28544 7.78396 8.47586 7.73279 8.70598C7.68165 8.93604 7.63332 9.17616 7.58792 9.42611L7.48559 9.97161L7.0084 12.2557L6.77825 13.4401C6.71003 13.8039 6.59364 14.0909 6.42887 14.3009C6.20158 14.4146 5.87203 14.5253 5.44021 14.6335C5.02546 14.7413 4.80674 14.7982 4.78403 14.8039L4.63916 15.5284C4.77543 15.5171 5.05382 15.4916 5.47433 15.4516C6.23 15.3835 6.7243 15.3523 6.9572 15.3579L8.64474 15.3748C9.36053 15.4489 9.77241 15.497 9.88029 15.5199C9.98827 15.5368 10.0679 15.5455 10.1189 15.5455C10.2213 15.5455 10.3405 15.5398 10.4769 15.5284C10.5053 15.5228 10.5707 15.5199 10.6729 15.5199C10.6842 15.4632 10.7098 15.3466 10.7496 15.1704C10.7835 15.0056 10.8034 14.8408 10.8093 14.676C10.6387 14.6476 10.4513 14.6192 10.2466 14.5909C9.93429 14.5569 9.59606 14.4971 9.23238 14.412C9.21555 14.2983 9.21264 14.2216 9.22399 14.1818L9.32638 13.7984L9.6929 11.7956L10.0167 10.449L10.5367 7.79843C10.6616 7.19045 10.8491 6.32128 11.0993 5.19047C11.1221 4.97459 11.1588 4.7416 11.2101 4.49157C11.2782 4.16775 11.3466 3.9178 11.4146 3.74157C11.6249 3.6564 11.9119 3.56837 12.2754 3.47744C12.5825 3.40936 12.892 3.32127 13.2044 3.21332C13.2386 3.08831 13.2757 2.94344 13.3153 2.77867C13.3382 2.67063 13.3552 2.56275 13.3664 2.45484C13.3608 2.45463 13.2584 2.46171 13.0596 2.47589Z"
            />
        </symbol>
        <symbol id="icon-text-underline" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.11641 3.59642C3.97446 3.39236 3.55689 3.2815 2.86366 3.26442C2.65343 3.25314 2.52557 3.24174 2.48017 3.23051L2.45459 2.48048C2.52838 2.47475 2.64202 2.47201 2.79546 2.47201C3.13635 2.47201 3.45456 2.48332 3.74999 2.50601C4.49999 2.54586 4.97155 2.56562 5.16477 2.56562C5.65336 2.56562 6.13058 2.5572 6.59662 2.54013C7.25569 2.51741 7.67053 2.5032 7.84092 2.49753C8.15912 2.49753 8.40339 2.4918 8.57379 2.48045L8.56533 2.59983L8.58235 3.14523V3.22195C8.24145 3.27308 7.88925 3.2986 7.52552 3.2986C7.18462 3.2986 6.96026 3.36962 6.85217 3.51171C6.77835 3.59129 6.74142 3.96622 6.74142 4.63663C6.74142 4.7106 6.74285 4.80275 6.74572 4.91353C6.74856 5.0243 6.75002 5.09678 6.75002 5.13075L6.7587 7.08222L6.87803 9.46842C6.91214 10.173 7.05706 10.7471 7.31267 11.1901C7.51154 11.5254 7.78423 11.7867 8.13079 11.9741C8.63085 12.2413 9.13345 12.3747 9.6393 12.3747C10.2301 12.3747 10.7726 12.2953 11.267 12.1361C11.5853 12.0338 11.8665 11.889 12.1106 11.7016C12.3834 11.4969 12.5681 11.3152 12.6649 11.156C12.8692 10.8379 13.02 10.5139 13.1164 10.1843C13.2357 9.76959 13.2954 9.11926 13.2954 8.23287C13.2954 7.78401 13.2854 7.4204 13.2656 7.14191C13.2458 6.86359 13.2145 6.51556 13.1718 6.09794C13.1291 5.68039 13.0909 5.22735 13.0566 4.73875L13.0226 4.2358C12.9943 3.85511 12.926 3.6052 12.8181 3.48589C12.6249 3.28699 12.4061 3.19036 12.162 3.19604L11.3097 3.21305L11.1903 3.18756L11.2074 2.45454H11.9233L13.6704 2.53974C14.1022 2.55675 14.659 2.52842 15.3408 2.45454L15.4943 2.47159C15.5285 2.68738 15.5453 2.83231 15.5453 2.90616C15.5453 2.94601 15.5342 3.03407 15.5112 3.17039C15.2556 3.23845 15.017 3.2755 14.7953 3.28117C14.3805 3.34368 14.1562 3.39207 14.122 3.42613C14.0368 3.51126 13.9941 3.62783 13.9941 3.77556C13.9941 3.81538 13.9984 3.89195 14.007 4.00565C14.0153 4.11926 14.0197 4.20735 14.0197 4.26977C14.0651 4.37774 14.1278 5.50266 14.2072 7.64478C14.2413 8.75263 14.1986 9.61658 14.0793 10.2358C13.9941 10.6673 13.8774 11.014 13.7297 11.2753C13.5139 11.6447 13.1959 11.9942 12.7752 12.3236C12.3492 12.6475 11.8321 12.9004 11.2243 13.0822C10.6048 13.2698 9.88031 13.3633 9.05086 13.3633C8.10208 13.3633 7.29527 13.2327 6.6305 12.9714C5.95444 12.7045 5.44582 12.3577 5.10504 11.9316C4.75847 11.4999 4.52271 10.9458 4.39757 10.2697C4.30668 9.81514 4.26131 9.14195 4.26131 8.24983V5.41173C4.26131 4.34362 4.21295 3.73863 4.11641 3.59642ZM2.72728 14.4547H15.2723C15.352 14.4547 15.4174 14.4803 15.4685 14.5315C15.5195 14.5826 15.545 14.6479 15.545 14.7275V15.2728C15.545 15.3525 15.5195 15.4178 15.4685 15.4689C15.4174 15.52 15.352 15.5455 15.2723 15.5455H2.72728C2.64763 15.5455 2.58238 15.52 2.53125 15.4689C2.48017 15.4178 2.45459 15.3525 2.45459 15.2728V14.7275C2.45459 14.6479 2.48005 14.5826 2.53125 14.5315C2.58238 14.4802 2.64775 14.4547 2.72728 14.4547Z"
            />
        </symbol>
        <symbol id="icon-todo" viewBox="0 0 22 22">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2222 5C16.2409 5 15.4444 5.79556 15.4444 6.77778C15.4444 7.76 16.2409 8.55556 17.2222 8.55556C18.2036 8.55556 19 7.76 19 6.77778C19 5.79556 18.2036 5 17.2222 5ZM13.2222 5.88889H3.44444C3.19911 5.88889 3 6.088 3 6.33333V7.22222C3 7.46756 3.19911 7.66667 3.44444 7.66667H13.2222C13.4676 7.66667 13.6667 7.46756 13.6667 7.22222V6.33333C13.6667 6.088 13.4676 5.88889 13.2222 5.88889ZM13.2222 10.3333H3.44444C3.19911 10.3333 3 10.5324 3 10.7778V11.6667C3 11.912 3.19911 12.1111 3.44444 12.1111H13.2222C13.4676 12.1111 13.6667 11.912 13.6667 11.6667V10.7778C13.6667 10.5324 13.4676 10.3333 13.2222 10.3333ZM13.2222 14.7778H3.44444C3.19911 14.7778 3 14.9769 3 15.2222V16.1111C3 16.3564 3.19911 16.5556 3.44444 16.5556H13.2222C13.4676 16.5556 13.6667 16.3564 13.6667 16.1111V15.2222C13.6667 14.9769 13.4676 14.7778 13.2222 14.7778Z"
            />
        </symbol>
        <symbol id="icon-trade-down" viewBox="0 0 30 30">
            <path d="M4.4459 10.251C3.97254 9.77764 3.97254 9.01015 4.4459 8.53682C4.91927 8.06349 5.68673 8.06349 6.1601 8.53682L4.4459 10.251ZM11.4134 15.5043L12.2705 16.3614C11.7971 16.8348 11.0297 16.8348 10.5563 16.3614L11.4134 15.5043ZM15.6641 11.2536L14.807 10.3965C15.2804 9.92313 16.0479 9.92313 16.5213 10.3965L15.6641 11.2536ZM23.9599 17.8352C24.4334 18.3086 24.4334 19.0761 23.9599 19.5494C23.4866 20.0228 22.7191 20.0228 22.2458 19.5494L23.9599 17.8352ZM22.0402 19.755L21.8025 20.9436C21.3642 20.8559 21.0096 20.5341 20.8801 20.1063C20.7506 19.6784 20.867 19.214 21.1831 18.8979L22.0402 19.755ZM24.1655 17.6297L23.3084 16.7726C23.6245 16.4565 24.089 16.34 24.5168 16.4696C24.9447 16.5991 25.2665 16.9536 25.3541 17.3919L24.1655 17.6297ZM24.6969 20.2864L25.8855 20.0486C25.965 20.4461 25.8405 20.8569 25.554 21.1435C25.2674 21.43 24.8565 21.5544 24.4592 21.4749L24.6969 20.2864ZM6.1601 8.53682L12.2705 14.6472L10.5563 16.3614L4.4459 10.251L6.1601 8.53682ZM10.5563 14.6472L14.807 10.3965L16.5213 12.1107L12.2705 16.3614L10.5563 14.6472ZM16.5213 10.3965L23.9599 17.8352L22.2458 19.5494L14.807 12.1107L16.5213 10.3965ZM21.1831 18.8979L23.3084 16.7726L25.0227 18.4868L22.8973 20.6121L21.1831 18.8979ZM25.3541 17.3919L25.8855 20.0486L23.5083 20.5241L22.977 17.8674L25.3541 17.3919ZM24.4592 21.4749L21.8025 20.9436L22.2779 18.5664L24.9346 19.0978L24.4592 21.4749Z"
            />
        </symbol>
        <symbol id="icon-trade-up" viewBox="0 0 30 30">
            <path d="M4.44593 19.4293C3.97257 19.9027 3.97257 20.6702 4.44593 21.1435C4.9193 21.6168 5.68676 21.6168 6.16013 21.1435L4.44593 19.4293ZM11.4134 14.176L12.2705 13.3189C11.7972 12.8456 11.0297 12.8456 10.5563 13.3189L11.4134 14.176ZM15.6642 18.4267L14.8071 19.2838C15.2804 19.7572 16.0479 19.7572 16.5213 19.2838L15.6642 18.4267ZM23.96 11.8451C24.4334 11.3717 24.4334 10.6042 23.96 10.1309C23.4866 9.65752 22.7191 9.65752 22.2458 10.1309L23.96 11.8451ZM22.0402 9.92531L21.8025 8.73672C21.3642 8.82439 21.0097 9.14621 20.8801 9.57405C20.7506 10.0019 20.867 10.4663 21.1831 10.7824L22.0402 9.92531ZM24.1655 12.0507L23.3084 12.9078C23.6246 13.2239 24.0891 13.3403 24.5168 13.2108C24.9447 13.0812 25.2665 12.7267 25.3541 12.2884L24.1655 12.0507ZM24.6969 9.39396L25.8855 9.63168C25.965 9.23427 25.8406 8.82344 25.554 8.53686C25.2675 8.25029 24.8566 8.1259 24.4592 8.20538L24.6969 9.39396ZM6.16013 21.1435L12.2705 15.0331L10.5563 13.3189L4.44593 19.4293L6.16013 21.1435ZM10.5563 15.0331L14.8071 19.2838L16.5213 17.5696L12.2705 13.3189L10.5563 15.0331ZM16.5213 19.2838L23.96 11.8451L22.2458 10.1309L14.8071 17.5696L16.5213 19.2838ZM21.1831 10.7824L23.3084 12.9078L25.0227 11.1936L22.8973 9.0682L21.1831 10.7824ZM25.3541 12.2884L25.8855 9.63168L23.5083 9.15625L22.9771 11.8129L25.3541 12.2884ZM24.4592 8.20538L21.8025 8.73672L22.2779 11.1139L24.9346 10.5825L24.4592 8.20538Z"
            />
        </symbol>
        <symbol id="icon-trash" viewBox="0 0 22 22">
            <path d="M17.9105 5.76028C17.8509 5.69793 17.7747 5.66659 17.682 5.66659H14.6094L13.9134 3.9271C13.814 3.67009 13.635 3.45133 13.3766 3.27076C13.118 3.09023 12.856 3 12.5909 3H9.40906C9.14399 3 8.88209 3.09023 8.62357 3.27076C8.36502 3.45133 8.18604 3.67006 8.08658 3.9271L7.39057 5.66659H4.31814C4.22526 5.66659 4.14913 5.69793 4.08944 5.76028C4.02992 5.82278 4 5.90269 4 5.99988V6.66662C4 6.76382 4.02978 6.84372 4.08944 6.90611C4.14913 6.96858 4.2254 6.99981 4.31814 6.99981H5.27261V16.9166C5.27261 17.4932 5.42839 17.9844 5.73991 18.3905C6.05151 18.797 6.42604 19 6.86357 19H15.1364C15.574 19 15.9485 18.79 16.2601 18.3699C16.5716 17.9496 16.7273 17.4514 16.7273 16.8751V6.99981H17.6819C17.7746 6.99981 17.8509 6.96858 17.9105 6.90611C17.97 6.84376 18 6.76382 18 6.66662V5.99988C18.0001 5.90269 17.97 5.82278 17.9105 5.76028ZM9.25996 4.44768C9.30632 4.38521 9.3627 4.3469 9.42898 4.33311H12.5809C12.6472 4.34701 12.7037 4.38529 12.75 4.44768L13.2274 5.66644H8.77274L9.25996 4.44768ZM15.4547 16.8752C15.4547 17.0279 15.4316 17.1686 15.3851 17.297C15.3386 17.4253 15.2904 17.5191 15.2408 17.5781C15.191 17.6373 15.1565 17.6667 15.1364 17.6667H6.8636C6.84371 17.6667 6.8091 17.6373 6.75926 17.5781C6.70949 17.5191 6.6614 17.4253 6.61497 17.297C6.56862 17.1686 6.54542 17.0277 6.54542 16.8752V6.99981H15.4546L15.4547 16.8752Z"
            />
            <path d="M9.1365 15.6668H9.77282C9.86571 15.6668 9.94201 15.6356 10.0015 15.5731C10.0611 15.5104 10.091 15.4308 10.091 15.3334V9.33319C10.091 9.23603 10.0611 9.15612 10.0015 9.09359C9.94184 9.03123 9.86574 9 9.77282 9H9.1365C9.04362 9 8.96745 9.0312 8.90779 9.09359C8.84821 9.15612 8.81836 9.23603 8.81836 9.33319V15.3334C8.81836 15.4308 8.8481 15.5105 8.90779 15.5731C8.96745 15.6355 9.04362 15.6668 9.1365 15.6668Z"
            />
            <path d="M12.3182 15.6668H12.9544C13.0474 15.6668 13.1237 15.6356 13.1832 15.5731C13.2428 15.5104 13.2725 15.4308 13.2725 15.3334V9.33319C13.2725 9.23603 13.2428 9.15612 13.1832 9.09359C13.1237 9.03123 13.0474 9 12.9544 9H12.3182C12.2252 9 12.1492 9.0312 12.0894 9.09359C12.0298 9.15612 12 9.23603 12 9.33319V15.3334C12 15.4308 12.0298 15.5105 12.0894 15.5731C12.1492 15.6355 12.2252 15.6668 12.3182 15.6668Z"
            />
        </symbol>
        <symbol id="icon-truck" viewBox="0 0 30 30">
            <path d="M10.5543 17.9109C9.49298 17.9109 8.6322 18.7866 8.6322 19.863C8.6322 20.9426 9.49298 21.8182 10.5543 21.8182C11.6125 21.8182 12.4733 20.9426 12.4733 19.863C12.4733 18.7866 11.6125 17.9109 10.5543 17.9109ZM10.5543 20.8422C10.0236 20.8422 9.59173 20.4028 9.59173 19.863C9.59173 19.3263 10.0236 18.8869 10.5543 18.8869C11.0818 18.8869 11.5138 19.3263 11.5138 19.863C11.5138 20.4028 11.0819 20.8422 10.5543 20.8422ZM8.89975 17.9118H4.59815C4.42777 17.9118 4.28966 18.0522 4.28966 18.2256V19.1778C4.28966 19.3511 4.42777 19.4916 4.59815 19.4916H8.04606C8.13612 18.8633 8.44785 18.3082 8.89975 17.9118ZM20.5965 17.9109C19.5382 17.9109 18.6775 18.7866 18.6775 19.863C18.6775 20.9426 19.5383 21.8182 20.5965 21.8182C21.6578 21.8182 22.5154 20.9426 22.5154 19.863C22.5154 18.7866 21.6578 17.9109 20.5965 17.9109ZM20.5965 20.8422C20.0658 20.8422 19.637 20.4028 19.637 19.863C19.637 19.3263 20.0658 18.8869 20.5965 18.8869C21.1271 18.8869 21.5559 19.3263 21.5559 19.863C21.556 20.4028 21.1271 20.8422 20.5965 20.8422ZM25.6006 17.9109H24.8509V13.6458C24.8509 13.1468 24.7028 12.6572 24.4282 12.2429L22.5494 9.41213C22.0928 8.72167 21.3246 8.3074 20.504 8.3074H17.5916C17.2522 8.3074 16.9745 8.58672 16.9745 8.93509V17.9109H12.208C12.6584 18.3095 12.97 18.8619 13.0595 19.4927H18.0913C18.2672 18.2467 19.3223 17.2832 20.5965 17.2832C21.8706 17.2832 22.9258 18.2467 23.1047 19.4927H25.6006C25.7734 19.4927 25.9091 19.3514 25.9091 19.1788V18.2248C25.9091 18.0521 25.7733 17.9109 25.6006 17.9109ZM22.5277 12.8079H18.6837C18.514 12.8079 18.3752 12.6698 18.3752 12.494V10.3254C18.3752 10.1528 18.514 10.0116 18.6837 10.0116H21.0253C21.1271 10.0116 21.2228 10.0618 21.2783 10.1434L22.7808 12.3151C22.9257 12.5223 22.7777 12.8079 22.5277 12.8079ZM15.506 17.2832H4.70792C4.36717 17.2832 4.09091 17.0022 4.09091 16.6556V13.831C4.09091 13.4843 4.36717 13.2033 4.70792 13.2033H15.506C15.8467 13.2033 16.123 13.4843 16.123 13.831V16.6556C16.123 17.0022 15.8467 17.2832 15.506 17.2832ZM9.02717 12.2618H4.70792C4.36717 12.2618 4.09091 11.9807 4.09091 11.6341V8.80958C4.09091 8.46291 4.36717 8.18188 4.70792 8.18188H9.02713C9.36792 8.18188 9.64417 8.46291 9.64417 8.80958V11.6341C9.64421 11.9807 9.36795 12.2618 9.02717 12.2618ZM15.506 12.2618H11.1868C10.846 12.2618 10.5697 11.9808 10.5697 11.6342V8.80958C10.5697 8.46291 10.846 8.18192 11.1868 8.18192H15.506C15.8468 8.18192 16.123 8.46295 16.123 8.80958V11.6342C16.123 11.9807 15.8467 12.2618 15.506 12.2618Z"
            />
        </symbol>
        <symbol id="icon-upload" viewBox="0 0 30 30">
            <path d="M20.6868 12.1516C20.3857 12.1516 20.0912 12.1789 19.8043 12.2258C19.0886 9.88582 16.8719 8.18182 14.2461 8.18182C11.0399 8.18182 8.44246 10.7215 8.44246 13.8535C8.44246 14.1327 8.46428 14.4076 8.50464 14.6782C8.35082 14.6596 8.19591 14.6487 8.03664 14.6487C5.857 14.6487 4.09082 16.3746 4.09082 18.5051C4.09082 20.6356 5.857 22.3636 8.03664 22.3636H12.8181V18H10.0908L14.9999 12.5455L19.909 18H17.1817V22.3636H20.6868C23.5701 22.3636 25.909 20.0771 25.909 17.2582C25.909 14.4371 23.5701 12.1516 20.6868 12.1516Z"
            />
        </symbol>
        <symbol id="icon-user-outline" viewBox="0 0 22 22">
            <path d="M16.0002 17.65H5.00024C4.36512 17.65 3.85024 17.1351 3.85024 16.5V15.8216C3.85024 15.4551 4.02489 15.1106 4.32047 14.894L7.40562 12.633C7.9211 12.2553 8.57794 12.1264 9.19795 12.2814L9.56631 12.3735C10.1794 12.5268 10.8208 12.5268 11.4338 12.3735L11.8022 12.2814C12.4222 12.1264 13.079 12.2552 13.5945 12.633L16.68 14.894C16.9756 15.1106 17.1502 15.4551 17.1502 15.8216V16.5C17.1502 17.1351 16.6354 17.65 16.0002 17.65ZM7.35024 6.99987C7.35024 5.27216 8.77771 3.86294 10.5181 3.87281C12.2446 3.88261 13.6502 5.28618 13.6502 7.00013C13.6502 8.72784 12.2228 10.1371 10.4824 10.1272C8.75592 10.1174 7.35024 8.71382 7.35024 6.99987Z"
            stroke-width="1.7" />
        </symbol>
        <symbol id="icon-user" viewBox="0 0 22 22">
            <path d="M16.484 18.15H5.00017C4.36505 18.15 3.85017 17.6351 3.85017 17V16.2025C3.85017 15.836 4.02482 15.4915 4.3204 15.2749L7.56807 12.8948C8.08356 12.517 8.7404 12.3882 9.36041 12.5432L9.80817 12.6551C10.4212 12.8084 11.0626 12.8084 11.6757 12.6551L12.1235 12.5432C12.7435 12.3882 13.4003 12.517 13.9158 12.8948L17.1638 15.2749C17.4594 15.4915 17.634 15.836 17.634 16.2025V17C17.634 17.6351 17.1192 18.15 16.484 18.15ZM7.46308 7.1289C7.46308 5.33004 8.94917 3.86327 10.7607 3.87355C12.5577 3.88375 14.0211 5.34464 14.0211 7.12917C14.0211 8.92802 12.5351 10.3948 10.7235 10.3845C8.92648 10.3743 7.46308 8.91342 7.46308 7.1289Z"
            />
        </symbol>
        <symbol id="icon-view" viewBox="0 0 22 22">
            <path d="M7.46545 11.5C7.45005 10.5112 7.81185 9.55605 8.47243 8.84149C9.13302 8.12692 10.0391 7.71059 10.9944 7.68273C11.4732 7.68734 11.9465 7.78992 12.3869 7.98456C12.8273 8.17919 13.2262 8.46205 13.5605 8.81684C13.8949 9.17163 14.1581 9.59135 14.3351 10.0518C14.5121 10.5123 14.5993 11.0045 14.5918 11.5C14.5993 11.9955 14.5121 12.4877 14.3351 12.9482C14.1581 13.4087 13.8949 13.8284 13.5605 14.1832C13.2262 14.538 12.8273 14.8208 12.3869 15.0154C11.9465 15.2101 11.4732 15.3127 10.9944 15.3173C10.0391 15.2894 9.13302 14.8731 8.47243 14.1585C7.81185 13.444 7.45005 12.4888 7.46545 11.5V11.5ZM13.3355 11.5C13.3401 11.1777 13.283 10.8577 13.1677 10.5584C13.0523 10.259 12.881 9.98618 12.6634 9.75556C12.4459 9.52494 12.1864 9.34108 11.9 9.21453C11.6136 9.08799 11.3058 9.02126 10.9944 9.01818C10.3744 9.03675 9.78656 9.30793 9.35881 9.77271C8.93105 10.2375 8.69797 10.8583 8.71027 11.5C8.69797 12.1417 8.93105 12.7625 9.35881 13.2273C9.78656 13.6921 10.3744 13.9632 10.9944 13.9818C11.3067 13.9803 11.6157 13.9147 11.9035 13.7889C12.1912 13.663 12.452 13.4794 12.6708 13.2486C12.8896 13.0178 13.062 12.7445 13.178 12.4443C13.2941 12.1442 13.3515 11.8232 13.347 11.5H13.3355ZM9.85232 11.5C9.86191 11.2487 9.94367 11.0061 10.0872 10.8032C10.2307 10.6003 10.4294 10.4462 10.6579 10.3607C10.8864 10.2752 11.1344 10.2622 11.3701 10.3232C11.6058 10.3843 11.8186 10.5167 11.9812 10.7035C12.1439 10.8903 12.249 11.1231 12.2832 11.3721C12.3174 11.621 12.279 11.8749 12.1731 12.1012C12.0672 12.3275 11.8984 12.516 11.6885 12.6426C11.4785 12.7691 11.2368 12.8281 10.9944 12.8118C10.6784 12.7848 10.3842 12.634 10.172 12.3902C9.95976 12.1465 9.84542 11.828 9.85232 11.5ZM18.6346 12.9655C18.5915 13.0389 18.5345 13.1027 18.4671 13.1528C18.3996 13.2029 18.323 13.2384 18.242 13.2572C18.1609 13.276 18.077 13.2776 17.9954 13.262C17.9137 13.2464 17.8359 13.2138 17.7667 13.1664C17.6283 13.0659 17.5323 12.9144 17.4983 12.743C17.4643 12.5716 17.495 12.3933 17.5839 12.2445C17.7166 12.0248 17.787 11.7709 17.787 11.5118C17.787 11.2527 17.7166 10.9988 17.5839 10.7791C16.5447 9.12455 14.0436 6.33545 10.9944 6.33545C7.94511 6.33545 5.46688 9.12455 4.45046 10.7673C4.31548 10.9883 4.24384 11.2444 4.24384 11.5059C4.24384 11.7674 4.31548 12.0235 4.45046 12.2445C5.46688 13.8755 7.97937 16.6645 10.9944 16.6645C12.8665 16.5559 14.6276 15.7102 15.9166 14.3009C15.9731 14.239 16.0413 14.1898 16.1169 14.1561C16.1925 14.1224 16.2739 14.105 16.3562 14.105C16.4385 14.105 16.52 14.1224 16.5956 14.1561C16.6712 14.1898 16.7394 14.239 16.7959 14.3009C16.9132 14.4284 16.9787 14.5976 16.9787 14.7736C16.9787 14.9496 16.9132 15.1189 16.7959 15.2464C15.2785 16.9055 13.1994 17.8923 10.9944 18C9.23963 17.9559 7.55022 17.3024 6.19778 16.1445C5.10366 15.2536 4.16173 14.179 3.4112 12.9655C3.14225 12.5252 2.99948 12.015 2.99948 11.4941C2.99948 10.9732 3.14225 10.463 3.4112 10.0227C4.17063 8.81578 5.12027 7.74917 6.22062 6.86727C7.56543 5.71014 9.24615 5.05272 10.9944 5C12.7472 5.04642 14.4335 5.70444 15.7795 6.86727C16.8739 7.75339 17.8159 8.82416 18.5661 10.0345C18.8349 10.4718 18.9796 10.9784 18.9836 11.4966C18.9876 12.0148 18.8509 12.5238 18.5889 12.9655H18.6346Z"
            />
        </symbol>
        <symbol id="icon-wallet" viewBox="0 0 22 22">
            <path d="M17 6.7368H4.5V6.2368L15.5 5.3568V6.2368H17V4.7368C17 3.6368 16.109 2.8648 15.021 3.0198L4.98 4.4538C3.891 4.6098 3 5.6368 3 6.7368V16.7368C3 17.8408 3.895 18.7368 5 18.7368H17C18.104 18.7368 19 17.8408 19 16.7368V8.7368C19 7.6328 18.104 6.7368 17 6.7368ZM15.5 13.7428C14.672 13.7428 14 13.0708 14 12.2428C14 11.4148 14.672 10.7428 15.5 10.7428C16.328 10.7428 17 11.4148 17 12.2428C17 13.0708 16.328 13.7428 15.5 13.7428Z"
            />
        </symbol>
        <symbol id="icon-xls" viewBox="0 0 31 40">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49998 -6.10352e-05H19.7412L30.9999 11.2149V37.4999C30.9999 38.8811 29.88 39.9999 28.4999 39.9999H2.49998C1.11994 39.9999 0 38.8811 0 37.4999V2.49992C0 1.11871 1.12007 -6.10352e-05 2.49998 -6.10352e-05Z"
            fill="#09B66D" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9638 11.2499H22.25C20.8699 11.2499 19.75 10.13 19.75 8.74998V0.0249634L30.9638 11.2499Z" fill="#00A344" />
            <path d="M12.4206 22.8799C12.5473 23.0266 12.6106 23.1799 12.6106 23.3399C12.6106 23.5333 12.5339 23.7033 12.3806 23.8499C12.2339 23.9899 12.0639 24.0599 11.8706 24.0599C11.6706 24.0599 11.5006 23.9766 11.3606 23.8099L9.48059 21.5099L7.58059 23.8099C7.43392 23.9766 7.26392 24.0599 7.07059 24.0599C6.88392 24.0599 6.71392 23.9899 6.56059 23.8499C6.41392 23.7033 6.34059 23.5333 6.34059 23.3399C6.34059 23.1733 6.40059 23.0199 6.52059 22.8799L8.57059 20.4399L6.59059 18.0699C6.46392 17.9233 6.40059 17.7699 6.40059 17.6099C6.40059 17.4166 6.47392 17.2499 6.62059 17.1099C6.77392 16.9633 6.94392 16.8899 7.13059 16.8899C7.33059 16.8899 7.50392 16.9766 7.65059 17.1499L9.48059 19.3599L11.2906 17.1499C11.4373 16.9766 11.6106 16.8899 11.8106 16.8899C11.9973 16.8899 12.1639 16.9633 12.3106 17.1099C12.4639 17.2499 12.5406 17.4166 12.5406 17.6099C12.5406 17.7766 12.4806 17.9299 12.3606 18.0699L10.3806 20.4399L12.4206 22.8799ZM14.2786 23.9999C14.0453 23.9999 13.8653 23.9366 13.7386 23.8099C13.612 23.6833 13.5486 23.5033 13.5486 23.2699V17.6699C13.5486 17.4366 13.6186 17.2499 13.7586 17.1099C13.8986 16.9699 14.0886 16.8999 14.3286 16.8999C14.5686 16.8999 14.7586 16.9699 14.8986 17.1099C15.0386 17.2499 15.1086 17.4366 15.1086 17.6699V22.7299H17.6686C18.1553 22.7299 18.3986 22.9433 18.3986 23.3699C18.3986 23.7899 18.1553 23.9999 17.6686 23.9999H14.2786ZM21.6257 24.0899C21.0991 24.0899 20.6091 24.0299 20.1557 23.9099C19.7024 23.7833 19.3324 23.6066 19.0457 23.3799C18.9457 23.3066 18.8724 23.2299 18.8257 23.1499C18.7857 23.0633 18.7657 22.9566 18.7657 22.8299C18.7657 22.6633 18.8157 22.5166 18.9157 22.3899C19.0224 22.2633 19.1424 22.1999 19.2757 22.1999C19.3491 22.1999 19.4191 22.2133 19.4857 22.2399C19.5591 22.2599 19.6457 22.2999 19.7457 22.3599C20.0324 22.5399 20.3224 22.6733 20.6157 22.7599C20.9091 22.8399 21.2324 22.8799 21.5857 22.8799C22.0257 22.8799 22.3624 22.8066 22.5957 22.6599C22.8291 22.5133 22.9457 22.3033 22.9457 22.0299C22.9457 21.8233 22.8357 21.6566 22.6157 21.5299C22.4024 21.4033 22.0191 21.2833 21.4657 21.1699C20.8457 21.0433 20.3491 20.8899 19.9757 20.7099C19.6091 20.5299 19.3391 20.3066 19.1657 20.0399C18.9991 19.7733 18.9157 19.4499 18.9157 19.0699C18.9157 18.6499 19.0357 18.2733 19.2757 17.9399C19.5224 17.5999 19.8591 17.3366 20.2857 17.1499C20.7191 16.9566 21.2057 16.8599 21.7457 16.8599C22.6924 16.8599 23.4724 17.0966 24.0857 17.5699C24.1857 17.6499 24.2557 17.7333 24.2957 17.8199C24.3424 17.8999 24.3657 17.9999 24.3657 18.1199C24.3657 18.2866 24.3124 18.4333 24.2057 18.5599C24.1057 18.6866 23.9891 18.7499 23.8557 18.7499C23.7824 18.7499 23.7124 18.7399 23.6457 18.7199C23.5857 18.6999 23.4991 18.6566 23.3857 18.5899C23.1124 18.4166 22.8591 18.2866 22.6257 18.1999C22.3991 18.1133 22.1091 18.0699 21.7557 18.0699C21.3491 18.0699 21.0291 18.1499 20.7957 18.3099C20.5624 18.4633 20.4457 18.6766 20.4457 18.9499C20.4457 19.1099 20.4891 19.2433 20.5757 19.3499C20.6691 19.4499 20.8191 19.5399 21.0257 19.6199C21.2391 19.6999 21.5391 19.7833 21.9257 19.8699C22.8324 20.0699 23.4824 20.3266 23.8757 20.6399C24.2757 20.9533 24.4757 21.3833 24.4757 21.9299C24.4757 22.3566 24.3557 22.7333 24.1157 23.0599C23.8824 23.3866 23.5491 23.6399 23.1157 23.8199C22.6891 23.9999 22.1924 24.0899 21.6257 24.0899Z"
            fill="white" />
        </symbol>
    </svg>

    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <header class="header">
            <div class="header__inner">
                <div class="container-fluid">

                    <div class="header__row row justify-content-between">
                        <div class="header__col-left col d-flex align-items-center">
                            <div class="header__left-toggle">
                                <button class="header__toggle-menu toggle-sidebar" type="button">
                                    <svg class="icon-icon-menu">
                                        <use xlink:href="#icon-menu"></use>
                                    </svg>
                                </button>
                            </div>
                            
                        </div>
                        <div class="header__col-right col d-flex align-items-center">
                        <div class="header__language dropdown">        
                            <div class="lang-menu dropdown-menu">
                                    <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                        <img class="lang-menu__icon" src="{{ env('APP_URL') }}/assets/arion/img/content/flags/us.svg" alt="#"><span class="lang-menu__text">EN</span>
                                    </button>
                                    <button class="lang-menu__button dropdown-menu__item active" tabindex="0">
                                        <img class="lang-menu__icon" src="{{ env('APP_URL') }}/assets/arion/img/content/flags/id.svg" alt="#"><span class="lang-menu__text">ID</span>
                                    </button>
                                    <div class="lang-menu__separate"></div><a class="lang-menu__button lang-menu__button--all dropdown-menu__item" href="{{ env('APP_URL') }}/assets/arion/#" tabindex="0">Learn</a>
                                </div>
                            </div>
                            <div class="header__profile dropdown">
                                <a class="header__profile-toggle dropdown__toggle" href="assets-{{ env('APP_URL') }}/admin/#" data-toggle="dropdown">
                                    <div class="header__profile-image"><span class="header__profile-image-text">MA</span>
                                        <img src="{{ env('APP_URL').(Session::get('foto') ? Session::get('foto') : '/assets/images/user.png') }}" alt="#" />
                                    </div>
                                    <div class="header__profile-text"><span>{{ auth()->user()->nama }}</span></div>
                                    <span class="icon-arrow-down">
                                        <svg class="icon-icon-arrow-down"><use xlink:href="#icon-arrow-down"></use></svg>
                                    </span>
                                </a>
                                <div class="profile-dropdown dropdown-menu dropdown-menu--right">
                                    <a class="profile-dropdown__item dropdown-menu__item" href="{{ env('APP_URL').'/logout' }}" tabindex="0">
                                        <span class="profile-dropdown__icon">
                                            <svg class="icon-icon-logout">
                                                <use xlink:href="#icon-logout"></use>
                                            </svg>
                                        </span>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar__backdrop"></div>
            <div class="sidebar__container">
                <div class="sidebar__top">
                    <div class="container container--sm">
                        <a class="sidebar__logo" href="{{ env('APP_URL') }}">
                            <div class="sidebar__logo-text" style="font-size: 13px;">
                                <small style="color: #f6603a; font-size: 16px">{{ env('APP_NAME') }}</small>
                                <div style="margin-top: 6px;line-height: 8px;font-size: 9.5px;letter-spacing: 2px;">
                                    Admin Dashboard
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__content" data-simplebar="data-simplebar">
                    <nav class="sidebar__nav">
                        <ul class="sidebar__menu">
                            <br>
                            <li class="sidebar__menu-item">
                                <a class="sidebar__link {{ isset($menu) && $menu=='home' ? 'active' : null; }}" href="{{ env('APP_URL').'/admin' }}" aria-expanded="true">
                                    <span class="sidebar__link-icon"><svg class="icon-icon-dashboard"><use xlink:href="#icon-dashboard"></use></svg></span>
                                    <span class="sidebar__link-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar__menu-item">
                                <a class="sidebar__link {{ isset($menu) && $menu=='mypost' ? 'active' : null; }}" href="{{ env('APP_URL').'/admin/mypost' }}" aria-expanded="true">
                                    <span class="sidebar__link-icon"><svg class="icon-icon-send"><use xlink:href="#icon-send"></use></svg></span>
                                    <span class="sidebar__link-text">My Post</span>
                                </a>
                            </li>
                            <li class="sidebar__menu-item">
                                <a class="sidebar__link {{ isset($menu) && $menu=='category' ? 'active' : null; }}" href="{{ env('APP_URL').'/admin/category' }}" aria-expanded="true">
                                    <span class="sidebar__link-icon"><svg class="icon-icon-grid"><use xlink:href="#icon-grid"></use></svg></span>
                                    <span class="sidebar__link-text">Category</span>
                                </a>
                            </li>
                            
                            <li class="sidebar__menu-item">
                                <a class="sidebar__link" href="{{ env('APP_URL').'/logout' }}" aria-expanded="false">
                                    <span class="sidebar__link-icon"><svg class="icon-icon-settings"><use xlink:href="#icon-logout"></use></svg></span>
                                    <span class="sidebar__link-text">Keluar</span>
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        


    <div class="modal modal-compact modal-success scrollbar-thin" id="modalAlert">
        <div class="modal__overlay"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <img class="modal-success__icon" id="iconModalAlert-fail" src="{{ env('APP_URL') }}/assets/arion/img/content/checked-failed.svg" width="80px" alt="#">
                            <img class="modal-success__icon" id="iconModalAlert-success" src="{{ env('APP_URL') }}/assets/arion/img/content/checked-success.svg" width="80px" alt="#">
                            <h4 class="modal-success__title" id="textModalAlert"> . . .</h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal" data-modal="" id="btnMoreModal" disabled><span class="button__text"></span></button>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <!-- LOAD MAIN -->
        @yield('konten')


        <script type="text/javascript">
    var website_id  = 1,
        base_url    = "{{ env('APP_URL') }}"
        resource_url= "{{ env('APP_URL') }}"
</script>

<script src="{{ env('APP_URL') }}/assets/arion/js/photoswipe/photoswipe-lightbox.esm.min.js" type="module"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/photoswipe/photoswipe.esm.min.js" type="module"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/gsap/gsap.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/gsap/ScrollToPlugin.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/gsap/ScrollTrigger.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/vendor.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/arion/js/common.js"></script>
<!--<script src="{{ env('APP_URL') }}/assets/arion/vendor/datatable/js/dataTables.bootstrap4.min.js"></script>-->
<script src="{{ env('APP_URL') }}/assets/arion/vendor/datatable/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>


<script src="{{ env('APP_URL') }}/assets/arion/vendor/jqueryFormValidation/jquery.validate.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/arion/vendor/jqueryFormValidation/additional-methods.min.js"></script>

<script src="{{ env('APP_URL') }}/assets/arion/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- summernote-gallery -->
<script src="{{ env('APP_URL') }}/assets/vendors/summernote2/summernote-file.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/vendors/summernote2/summernote-gallery.min.js" type="text/javascript"></script>
<script src="{{ env('APP_URL') }}/assets/vendors/summernote2/mysummernote.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/lang/summernote-id-ID.min.js" integrity="sha512-viTUgqrk+5XInorfp/0NMZSI3mSLwBb+mKXfce4CiIhW8D9b1+lq+RxyahOycN1y+VkgGC7vwCFFB6GQHFhcsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Sweatalert-->
<script src="{{ env('APP_URL') }}/assets/vendors/sweetalert2/sweetalert2.min.js" type="text/javascript"></script>
<!-- Toaster -->
<script src="{{ env('APP_URL') }}/assets/vendors/toastr/toastr.min.js" type="text/javascript"></script>


<script>
    var datatablesLanguage = "{{ env('APP_URL') }}/assets/arion/vendor/datatable/js/language.dataTables.json');?>"
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
            $('#btnMoreModal').html('<span class="button__text"></span> Add Again')
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
@yield('javascript-konten')


</div>

</body>
</html>