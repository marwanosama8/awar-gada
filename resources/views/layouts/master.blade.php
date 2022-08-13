<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.styles')
</head>

<body>
    @include('layouts.nav')


    @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>
