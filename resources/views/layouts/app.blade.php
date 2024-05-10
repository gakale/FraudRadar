<!DOCTYPE html>
<html lang="fr">
@include('layouts.head')
<body>
        @include('layouts.header')

            @yield('content')
        </main>

    @include('layouts.footer')
    @include('layouts.scripts')

</body>
</html>
