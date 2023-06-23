<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="/caxito/img/logo.jpg" type="image/ico" />

    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
         <!-- dropzone CSS
		============================================ -->
    <!-- forms CSS
		============================================ -->
        <link rel="stylesheet" href="/caxito/css/form/all-type-forms.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/owl.carousel.css">
    <link rel="stylesheet" href="/caxito/css/owl.theme.css">
    <link rel="stylesheet" href="/caxito/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/caxito/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/caxito/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/style.css">
        <!-- x-editor CSS
		============================================ -->
        <link rel="stylesheet" href="/caxito/css/editor/select2.css">
    <link rel="stylesheet" href="/caxito/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="/caxito/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="/caxito/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="/caxito/css/data-table/bootstrap-editable.css">
    
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/caxito/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/caxito/js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="/caxito/img/logo.jpeg" alt="" width="150px" height="150px"/></a>
                <strong><a href="index.html"><img src="/caxito/img/rede.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                       
                       <li>
                           <a title="Landing Page" href="{{ route('gabinete_psicopedagogico.home') }}" aria-expanded="false"><span class="educate-icon educate-home icon-wrap"> <span class="mini-click-non">Home</span></a>
                       </li>
                       <li>
                           <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professores</span></a>
                           <ul class="submenu-angle" aria-expanded="false">
                               <li><a title="All Professors" href="{{ route('gabinete_psicopedagogico.professores') }}"><span class="mini-sub-pro">Todos os Professores</span></a></li>
                               <li><a title="Add Professor" href="{{ route('gabinete_psicopedagogico.falta_professores') }}"><span class="mini-sub-pro">Boletins de notas</span></a></li>
                               <li><a title="Edit Professor" href="{{ route('gabinete_psicopedagogico.avaliacao') }}"><span class="mini-sub-pro">Avaliação do desempenho</span></a></li>
                               <li><a title="Edit Professor" href="{{ route('gabinete_psicopedagogico.consultoria_professor') }}"><span class="mini-sub-pro">Relatorio de consultoria</span></a></li>
                           </ul>
                       </li>
                       <li>
                           <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Estudantes</span></a>
                           <ul class="submenu-angle" aria-expanded="false">
                               <li><a title="All Students" href="{{ route('gabinete_psicopedagogico.estudantes') }}"><span class="mini-sub-pro">Todos os Estudantes</span></a></li>
                               <li><a title="Add Students" href="{{ route('gabinete_psicopedagogico.ver_festudante') }}"><span class="mini-sub-pro">Ver Faltas</span></a></li>
                               <li><a title="Edit Students" href="{{ route('gabinete_psicopedagogico.consultoria') }}"><span class="mini-sub-pro">Relatorios de Consultoria</span></a></li>
                           </ul>
                       </li>
                     
                       <li>
                           <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Funcionarios</span></a>
                           <ul class="submenu-angle" aria-expanded="false">
                               <li><a title="All Library" href=""><span class="mini-sub-pro">Todos os Funcionarios</span></a></li>
                               <li><a title="Add Library" href=""><span class="mini-sub-pro">Enviar Faltas</span></a></li>
                               <li><a title="Add Library" href="{{ route('gabinete_psicopedagogico.avaliacao') }}"><span class="mini-sub-pro">Avaliação de desempenho</span></a></li>
                           </ul>
                       </li>
                       
                    
                       
                       <li>
                           <a class="has-arrow" href="https://redeeiffel.ao:2096/" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Email</span></a>
                         
                       </li>
                      
                       
                      
                   
                      
                       <li id="removable">
                           
                           <a  aria-expanded="false" href="{{ route('gabinete_psicopedagogico.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Sair</span></a>
                                     <form action="{{ route('gabinete_psicopedagogico.logout') }}" id="logout-form" method="post">@csrf</form>
                        </li>
                   </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->



    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
											</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                           
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notificações</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Maio</span>
                                                                        <h2>Admin</h2>
                                                                        <p>Bem-vindo a Gestão Escolar da Rede Eiffel.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                           
                                                            
                                                          
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">Ver Todas as Notificações</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name">{{ Auth::guard('gabinete_psicopedagogico')->user()->name }}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Perfil</a>
                                                        </li>
                                                       
                    
                                                        <li> <a  aria-expanded="false" href="{{ route('gabinete_psicopedagogico.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Sair</span></a>
                                                            <form action="{{ route('gabinete_psicopedagogico.logout') }}" id="logout-form" method="post">@csrf</form>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">Notas</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Trabalhos</a>
                                                            </li>
                                                            
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-comments-o"></i> Notas</h2>
                                                                        <p>Tem novas notas.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                         
                                                                        
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="/img/contact/3.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p>Testar a aplicação .</p>
                                                                                            <span>16 jan</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Projects" class="tab-pane fade">
                                                                <div class="projects-settings-wrap">
                                                                   
                                                                    <div class="project-st-list-area project-st-menu-scrollbar">
                                                                        <ul class="projects-st-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="project-list-flow">
                                                                                        <div class="projects-st-heading">
                                                                                            <h2>Trabalhos</h2>
                                                                                            <p> Nenhum .</p>
                                                                                        </div>
                                                                                        
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p>
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                        <li>
                                                                            <div class="checkbox-setting-pro">
                                                                                <div class="checkbox-title-pro">
                                                                                    <h2>Show notifications</h2>
                                                                                    <div class="ts-custom-check">
                                                                                        <div class="onoffswitch">
                                                                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                            <label class="onoffswitch-label" for="example">
																									<span class="onoffswitch-inner"></span>
																									<span class="onoffswitch-switch"></span>
																								</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <li>
                                                                        
                                                                       
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a href="events.html">Faltas</a></li>
                                      
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Orientações <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Provas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                      
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Email <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Solicitar Documentos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                      
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Sair <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                           
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                             <br/>
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Procurar..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      


        @yield('content')

       
    </div>


    <!-- jquery
		============================================ -->
        <script src="/caxito/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="/caxito/js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
        <script src="/caxito/js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="/caxito/js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="/caxito/js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="/caxito/js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="/caxito/js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="/caxito/js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="/caxito/js/counterup/jquery.counterup.min.js"></script>
        <script src="/caxito/js/counterup/waypoints.min.js"></script>
        <script src="/caxito/js/counterup/counterup-active.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="/caxito/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="/caxito/js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="/caxito/js/metisMenu/metisMenu.min.js"></script>
        <script src="/caxito/js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="/caxito/js/morrisjs/raphael-min.js"></script>
        <script src="/caxito/js/morrisjs/morris.js"></script>
        <script src="/caxito/js/morrisjs/morris-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="/caxito/js/sparkline/jquery.sparkline.min.js"></script>
        <script src="/caxito/js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="/caxito/js/sparkline/sparkline-active.js"></script>
           <!-- data table JS
		============================================ -->
    <script src="/caxito/js/data-table/bootstrap-table.js"></script>
    <script src="/caxito/js/data-table/tableExport.js"></script>
    <script src="/caxito/js/data-table/data-table-active.js"></script>
    <script src="/caxito/js/data-table/bootstrap-table-editable.js"></script>
    <script src="/caxito/js/data-table/bootstrap-editable.js"></script>
    <script src="/caxito/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="/caxito/js/data-table/colResizable-1.5.source.js"></script>
    <script src="/caxito/js/data-table/bootstrap-table-export.js"></script>
      <!--  editable JS
		============================================ -->
        <script src="/caxito/js/editable/jquery.mockjax.js"></script>
    <script src="/caxito/js/editable/mock-active.js"></script>
    <script src="/caxito/js/editable/select2.js"></script>
    <script src="/caxito/js/editable/moment.min.js"></script>
    <script src="/caxito/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="/caxito/js/editable/bootstrap-editable.js"></script>
    <script src="/caxito/js/editable/xediable-active.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="/caxito/js/calendar/moment.min.js"></script>
        <script src="/caxito/js/calendar/fullcalendar.min.js"></script>
        <script src="/caxito/js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="/caxito/js/plugins.js"></script>
        <!-- peity JS
            ============================================ -->
            <script src="/caxito/js/peity/jquery.peity.min.js"></script>
            <script src="/caxito/js/peity/peity-active.js"></script>
            <!-- tab JS
                ============================================ -->
            <script src="/caxito/js/tab.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="/caxito/js/main.js"></script>
    
    <!-- icheck JS
		============================================ -->
    <script src="/caxito/js/icheck/icheck.min.js"></script>
    <script src="/caxito/js/icheck/icheck-active.js"></script>
         <!-- dropzone JS
		============================================ -->
    <script src="/caxito/js/dropzone/dropzone.js"></script>
        <!-- tawk chat JS
            ============================================ -->
     
    </body>
    
    </html>