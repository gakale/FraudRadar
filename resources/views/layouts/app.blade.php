<!DOCTYPE html>
<html lang="fr">
@include('layouts.head')
<body class="bg-dark">
        @include('layouts.header')

            @yield('content')

    @include('layouts.footer')
    @include('layouts.scripts')

</body>
</html>
