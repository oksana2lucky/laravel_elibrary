<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div id="templatemo_container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="templatemo_content">
        <div id="templatemo_content_left">
            @include('includes.sidebar')
        </div>
        <div id="templatemo_content_right">
            @yield('content')
        </div>
        <div class="cleaner_with_height" />
    </div>

    <div id="templatemo_footer">
        @include('includes.footer')
    </div>

</div>
</body>
</html>
