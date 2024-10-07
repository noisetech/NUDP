<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    @include('includes.public.header')

    <title>NUDP</title>
</head>

<body>

    @include('includes.public.navbar')


    @yield('content')

    @include('includes.public.footer')



    @include('includes.public.script')
</body>

</html>
