<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <!--img-->
            </div>
            <div class="pull-left info">
                <p></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
  <span class="input-group-btn">
    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
  </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
             @if (Auth::user()->type==1)

            <li><a href="/projetos">Editar Projetos</a></li>
            <li class="treeview">
                <a href="#"><span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{route('ativos')}}">Projetos Ativos</a></li>
                    <li><a href="{{route('encerrados')}}">Projetos Encerrados</a></li>
                </ul>
            </li>
            @else
            <li class="treeview">
                <a href="#"><span>Configuração de Usuário</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/alterar/profile">Alterar Nome</a></li>
                    <li><a href="/alterar/password">Alterar Senha</a></li>
                    <li><a href="/alterar/email">Alterar Email</a></li>
                </ul>
            </li>
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
