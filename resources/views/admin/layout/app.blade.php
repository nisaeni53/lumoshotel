<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/')}}/admin.css">
</head>
<body>
    {{-- navbar --}}
    @include('admin.layout.navbar')
    {{-- content --}}
    @yield('content')

    <script src="{{asset('bootstrap/bootstrap-5.1.3-dist/')}}/js/bootstrap.min.js"></script>
</body>
</html>