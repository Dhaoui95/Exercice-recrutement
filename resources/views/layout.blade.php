<!DOCTYPE html>
<html lang="en">
@include('inc.head')

<body id="page-top">
@include('inc.nav')
{!! Toastr::render() !!}

    @yield('content')
    @include('inc.footer')


</body>
@include('inc.scripts')
</html>
