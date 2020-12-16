
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TechBlog @yield('title')</title>
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        @yield('styles')
    </head>
    <body>




        <div class="container py-5">

            @yield('main')

        </div>






    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/jquery-3.5.1.js')}}"></script>
    </body>
    @yield('scripts')
</html>