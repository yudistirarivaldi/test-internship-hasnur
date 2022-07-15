<!DOCTYPE html>


<html lang="en">


@include('include.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('sweetalert::alert')

        @include('include.nav')


        @include('include.sidebar')

        <div class="content-wrapper">

            @yield('content')

        </div>


        @include('include.control')


        @include('include.footer')

    </div>


    @include('include.scripts')
    @include('include.cssdatatables')
    @include('include.scriptdatatables')

    <script>
        $(function() {
            $('#mytable').DataTable()
        });
    </script>

</body>

</html>
