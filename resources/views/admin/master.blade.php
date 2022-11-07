<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')|| DashBoard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('adminAssets')}}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
@include('admin.include.header')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.include.sidebar')
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        @include('admin.include.footer')
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('adminAssets')}}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('adminAssets')}}/assets/demo/chart-area-demo.js"></script>
<script src="{{asset('adminAssets')}}/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('adminAssets')}}/js/datatables-simple-demo.js"></script>
<script src="{{asset('adminAssets')}}/ckeditor/ckeditor.js"></script>
<script src="{{asset('adminAssets')}}/ckeditor/styles.js"></script>
<script>
    CKEDITOR.replace('editor')
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
    CKEDITOR.replace('editor3')
    CKEDITOR.replace('editor4')
</script>
<script>
    var $readmore = $('.readmore');
    $readmore.bind('onclick',function(){
        var $next = $(this).next('p');
        $next[$next.is(':visible') ? 'hide' : 'show']();
    });
</script>
</body>
</html>
