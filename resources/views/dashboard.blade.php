@include('layout.header')
    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('title_page')
        <section class="content">
        @yield('content_page')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@include ('layout.footer')
