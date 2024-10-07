<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.admin.header')

<body class="g-sidenav-show bg-gray-100">



    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('includes.admin.sidebar')


    <main class="main-content position-relative border-radius-lg">
        @include('includes.admin.navbar')

        @yield('content')
    </main>


    @include('includes.admin.script')
</body>

</html>
