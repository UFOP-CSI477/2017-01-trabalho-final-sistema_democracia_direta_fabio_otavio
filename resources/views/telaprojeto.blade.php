@include('layout.header')

    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('title_page')
        <section class="content">
        <div class="container-fluid">
            <div class="container">
            <div class="row">
              <div class="col">

              </div>
              <div class="col">
              <p>Nulla consectetur dignissim pellentesque. Nunc convallis consectetur feugiat.
                Quisque luctus suscipit mi, ac placerat risus. Nulla posuere felis et orci interdum pulvinar.
                Aenean ac malesuada tortor, et aliquet elit. In hac habitasse platea dictumst.
                Curabitur magna purus, malesuada at erat nec, volutpat hendrerit neque</p><br>
              </div>
            </div>
          </div>
            @yield('content_page')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@include ('layout.footer')
