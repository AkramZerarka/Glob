<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="{{ asset('/images/logo/medsol_logo04.png') }}" rel="icon" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MedSolution') }}</title>
    
    <!-- CSS Files -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/paper-dashboard.min.css') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('/css/lightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/croppr/slim/slim.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/croppr/styles/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('datepicker/datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/web/assets/mobirise-icons/mobirise-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>

<body  data-color="white" data-active-color="danger">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
    <script src="{{ asset('/web/assets/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('datepicker/datepicker.min.js') }}"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <div class="wrapper">
        @include('components.sidebar')
        <div class="main-panel">
            @include('components.navauth')
            @yield('content')
            @include('components.footerauth')
        </div>
    </div>
    <script src="{{ asset('/croppr/slim/slim.kickstart.min.js') }}"></script>
    <script src="{{ asset('/croppr/scripts/scripts.js') }}"></script>
    <script src="{{ asset('/js/style.js') }}"></script>
    <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
</body>
