<!DOCTYPE html>

<html lang="zxx">



<head>

    <title>PORTAL O-MEC</title>

    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!--Start Style -->

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/fonts.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/icofont.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/css/style.css') }}">

    

  <link rel="stylesheet" href="{{ asset('dash-assets/bundles/datatables/datatables.min.css') }}">

  <link rel="stylesheet" href="{{ asset('dash-assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" id="theme-change" type="text/css" href="#">

    <link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}" />

    @yield('style')

    <!-- Favicon Link -->

    <!--  <link rel="shortcut icon" type="image/png" href="/dash-assets/images/favicon.png') }}"> -->

</head>



<body>

    <div class="loader">

        <div class="spinner">

            <img src="/{{ asset('dash-assets/images/loader.gif') }}" alt="" />

        </div>

    </div>

    <!-- Main Body -->

    <div class="page-wrapper">

        <!-- Header Start -->

        <header class="header-wrapper main-header">

            <div class="header-inner-wrapper">

                <div class="header-right">



                    <div class="header-left">

                        <div class="header-links">

                            <a href="javascript:void(0);" class="toggle-btn">

                                <span></span>

                            </a>

                        </div>



                    </div>

                    <div class="header-controls">


                        <!-- DESACTIVO ICONO DE NOTIFICACIONES
                        <div class="notification-wrapper header-links">

                            <a href="javascript:void(0);" class="notification-info">

                                <span class="header-icon">

                                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"

                                        xmlns="http://www.w3.org/2000/svg">

                                        <path

                                            d="m450.201 407.453c-1.505-.977-12.832-8.912-24.174-32.917-20.829-44.082-25.201-106.18-25.201-150.511 0-.193-.004-.384-.011-.576-.227-58.589-35.31-109.095-85.514-131.756v-34.657c0-31.45-25.544-57.036-56.942-57.036h-4.719c-31.398 0-56.942 25.586-56.942 57.036v34.655c-50.372 22.734-85.525 73.498-85.525 132.334 0 44.331-4.372 106.428-25.201 150.511-11.341 24.004-22.668 31.939-24.174 32.917-6.342 2.935-9.469 9.715-8.01 16.586 1.473 6.939 7.959 11.723 15.042 11.723h109.947c.614 42.141 35.008 76.238 77.223 76.238s76.609-34.097 77.223-76.238h109.947c7.082 0 13.569-4.784 15.042-11.723 1.457-6.871-1.669-13.652-8.011-16.586zm-223.502-350.417c0-14.881 12.086-26.987 26.942-26.987h4.719c14.856 0 26.942 12.106 26.942 26.987v24.917c-9.468-1.957-19.269-2.987-29.306-2.987-10.034 0-19.832 1.029-29.296 2.984v-24.914zm29.301 424.915c-25.673 0-46.614-20.617-47.223-46.188h94.445c-.608 25.57-21.549 46.188-47.222 46.188zm60.4-76.239c-.003 0-213.385 0-213.385 0 2.595-4.044 5.236-8.623 7.861-13.798 20.104-39.643 30.298-96.129 30.298-167.889 0-63.417 51.509-115.01 114.821-115.01s114.821 51.593 114.821 115.06c0 .185.003.369.01.553.057 71.472 10.25 127.755 30.298 167.286 2.625 5.176 5.267 9.754 7.861 13.798z" />

                                    </svg>

                                </span>

                                <span class="count-notification"></span>

                            </a>

                            <div class="recent-notification">

                                <div class="drop-down-header">

                                    <h4>All Notification</h4>

                                    <p>You have 6 new notifications</p>

                                </div>

                                <ul>

                                    <li>

                                        <a href="javascript:void(0);">

                                            <h5><i class="fas fa-exclamation-circle mr-2"></i>Storage Full</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetuer.</p>

                                        </a>

                                    </li>

                                    <li>

                                        <a href="javascript:void(0);">

                                            <h5><i class="far fa-envelope mr-2"></i>New Membership</h5>

                                            <p>Lorem ipsum dolor sit amet, consectetuer.</p>

                                        </a>

                                    </li>

                                </ul>

                                <div class="drop-down-footer">

                                    <a href="javascript:void(0);" class="btn sm-btn">

                                        View All

                                    </a>

                                </div>

                            </div>

                        </div>
                        -->
                        <div class="user-info-wrapper header-links">

                            <a href="javascript:void(0);" class="user-info">

                                <img src="{{ asset(Auth()->user()->image ?? 'dash-assets/images/user.jpg') }}" alt="" class="user-img">

                                <div class="blink-animation">
                                <!--
                                    <span class="blink-circle"></span>

                                    <span class="main-circle"></span>
                                -->
                                </div>

                            </a>

                            <div class="user-info-box">

                                <div class="drop-down-header">

                                    <h4>{{Auth()->user()->first_name}} {{Auth()->user()->last_name}}</h4>

                                    <p>{{Auth()->user()->profession}}</p>

                                </div>

                                <ul>

                                    <li>

                                        <a href="{{url('admin/profile')}}">

                                            <i class="far fa-edit"></i> Editar Perfil

                                        </a>

                                    </li>
                                    <!--
                                    <li>

                                        <a href="#">

                                            <i class="fas fa-cog"></i> Settings

                                        </a>

                                    </li>
                                    -->
                                    <li>

                                        <a href="javascript:void(0);"

                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión

                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"

                                            style="display: none;">

                                            @csrf

                                        </form>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- Sidebar Start -->

        <aside class="sidebar-wrapper">

            <div class="logo-wrapper">

                <a href="/" class="admin-logo">

                    <!--<h5 class="text-center text-white">PORTAL O-MEC</h5>-->
                    <img src="/dash-assets/images/auth-img1.jpg" alt="" class="sp_logo" >
                    <!--    <img src="/dash-assets/images/logo.png" alt="" class="sp_logo">

                    <img src="/{{ asset('dash-assets/images/mini_logo.png') }}" alt="" class="sp_mini_logo"> -->

                </a>

            </div>

            <div class="side-menu-wrap">

                <ul class="main-menu">
                @if(auth::user()->level !='10')
                    <li>

                        <a href="{{ route('admin.home') }}" class="active">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-home">

                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>

                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Inicio

                            </span>

                        </a>

                    </li>
                @endif
                @if(auth::user()->active_flag=='1')    

                    @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='2'||auth::user()->level=='3'||auth::user()->level=='4'||auth::user()->level=='5'||auth::user()->level=='6' || auth::user()->level=='7'|| auth::user()->level=='9'|| auth::user()->level=='21')

                    @can('access_product')

                    <li>

                        <a href="/admin/products">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Productos

                            </span>

                        </a>

                    </li>

                    @endcan

                    @endif

                    @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='2'||auth::user()->level=='3'||auth::user()->level=='4'||auth::user()->level=='5'||auth::user()->level=='6' || auth::user()->level=='7'|| auth::user()->level=='9')

                    @can('access_document')

                    <li>

                        <a href="/admin/documents">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Manuales/Catálogos

                            </span>

                        </a>

                    </li>

                    @endcan

                    @endif

                    @if(auth::user()->level=='0'||auth::user()->level=='1' || auth::user()->level=='7')

                    @can('access_warehouse')

                    <li>

                        <a href="/admin/warehouses">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Almacénes

                            </span>

                        </a>

                    </li>

                    @endcan

                    @endif

                    @if(auth::user()->level=='0'||auth::user()->level=='1'||auth::user()->level=='2'||auth::user()->level=='3'||auth::user()->level=='4'||auth::user()->level=='5'||auth::user()->level=='6' || auth::user()->level=='7'|| auth::user()->level=='8' || auth::user()->level=='9'|| auth::user()->level=='10'|| auth::user()->level=='21')

                    @can('access_stock')

                    <li>

                        <a href="/admin/stocks">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                @if(auth::user()->level =='10')
                                Stock MDG
                                @endif
                                @if(auth::user()->level !='10')
                                Existencias
                                @endif

                            </span>

                        </a>

                    </li>

                    @endif

                    @endcan

                    @if(auth::user()->level=='0')

                    @can('user_management_access')

                    <li>

                        <a href="javascript:void(0);">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-mail">

                                    <path

                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">

                                    </path>

                                    <polyline points="22,6 12,13 2,6"></polyline>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Users Management

                            </span>

                        </a>

                        <ul class="sub-menu">

                            <li>

                                <a href="/admin/permissions">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Permissions

                                    </span>

                                </a>

                            </li>

                            <li>

                                <a href="/admin/roles">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Roles

                                    </span>

                                </a>

                            </li>

                            <li>

                                <a href="/admin/users">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Users

                                    </span>

                                </a>

                            </li>

                        </ul>

                    </li>

                    @endcan

                    @endif

                    <!-- <li>

                        <a href="{{ route('comander.index') }}">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Commander Signature

                            </span>

                        </a>

                    </li> -->

                    

                    <!-- <li>



                        <a href="/admin/paid-users">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Paid Users

                            </span>

                        </a>

                    </li> -->

                    {{--<li>

                        <a href="javascript:void(0);">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-mail">

                                    <path

                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">

                                    </path>

                                    <polyline points="22,6 12,13 2,6"></polyline>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Settings

                            </span>

                        </a>

                        <ul class="sub-menu">

                            <!-- @can('service_access')

                                <li>

                                    <a href="{{ url('admin/service') }}">

                                        <span class="icon-dash">

                                        </span>

                                        <span class="menu-text">

                                            Services

                                        </span>

                                    </a>

                                </li>

                            @endcan

                            @can('content_access')

                            <li>

                                <a href="{{ url('admin/content') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Website Content

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('news_access')

                            <li>

                                <a href="{{ url('admin/news') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        News

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('abbreviation_access')

                            <li>

                                <a href="{{ url('admin/abbreviation') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Abbreviations

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('rank_access')

                            <li>

                                <a href="{{ url('admin/rank') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Ranks

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('reason_access')

                            <li>

                                <a href="{{ url('admin/reason') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Reason of Awards

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('type_medal_access')

                            <li>

                                <a href="{{ url('admin/typemedal') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Type of Medals

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('country_access')

                            <li>

                                <a href="{{ url('admin/country') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Countries

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('writing_point_access')

                            <li>

                                <a href="{{ url('admin/writing_point') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Writing Points

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('support_access')

                            <li>

                                <a href="{{ url('admin/support') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Supports

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('review_access')

                            <li>

                                <a href="{{ url('admin/review') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Reviews

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('contact_access')

                            <li>

                                <a href="{{ url('admin/contact') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Contact Mail

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('media_access')

                            <li>

                                <a href="{{ url('admin/media') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Social Media

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('faq_category_access')

                            <li>

                                <a href="{{ url('admin/faq_category') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        FAQ Categories

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('faq_access')

                            <li>

                                <a href="{{ url('admin/faq') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        FAQ

                                    </span>

                                </a>

                            </li>

                            @endcan

                            @can('newsletter_access')

                            <li>

                                <a href="{{ url('admin/newsletter') }}">

                                    <span class="icon-dash">

                                    </span>

                                    <span class="menu-text">

                                        Newsletter

                                    </span>

                                </a>

                            </li>

                            @endcan -->

                        </ul>

                    </li>--}}

                    @else

                    @can('access_document')

                    <!--<li>

                        <a href="/admin/documents">

                            <span class="icon-menu feather-icon">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"

                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" class="feather feather-package">

                                    <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>

                                    <path

                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">

                                    </path>

                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>

                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>

                                </svg>

                            </span>

                            <span class="menu-text">

                                Manuales/Catálogos

                            </span>

                        </a>

                    </li>-->

                    @endcan

                    @endif

                </ul>

            </div>

        </aside>

        <!-- Container Start -->

        <div class="page-wrapper">

            <div class="main-content">

                <!-- Page Title Start -->

                <div class="row">

                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="page-title-wrapper">

                            <div class="page-title-box">

                                <h4 class="page-title bold"></h4>
                                <!--<i class="far fa-frown-open mr-2 icon-only"></i>En el menú superior izquierdo podrá encontrar las secciones para su consulta.-->
                                @if(auth::user()->active_flag=='0')
                                <br/><br/>
                                <i class="far fa-frown-open mr-2 icon-only"></i>Para poder consultar las existencias necesitamos acitvarlo. Consulte con su agente para revisar su activación.
                                @endif
                            </div>
                                 <!-- 
                            <div class="breadcrumb-list">

                                <ul>

                                    <li class="breadcrumb-link">

                                        <a href="/admin"><i class="fas fa-home mr-2"></i>Inicio</a>

                                    </li>

                                    <li class="breadcrumb-link active">Admin</li>

                                </ul>
                            
                            </div>
                                -->
                        </div>

                    </div>
                   <!--
                    <div class="col-xl-12 col-lg-12 col-md-12">

                        <div class="card chart-card">

                            <div class="card-header">
                                <!- <h4 class="has-btn">Total Revanue <span><button type="button" class="btn btn-primary squer-btn sm-btn">Download</button></span></h4>--
                            </div>

                            <div class="card-body">

                                <div class="row">

                                    <div class="col-xl-8 col-lg-12 col-md-12">

                                        <div> <!- class="chart-holder">--

                                            <div>
                                            <i class="far fa-frown-open mr-2 icon-only"></i>En el menú superior izquierdo podrá encontrar las secciones para su consulta.
                                            @if(auth::user()->active_flag=='0')
                                            <br/><br/>
                                            <i class="far fa-frown-open mr-2 icon-only"></i>Para poder consultar las existencias necesitamos acitvarlo. Si su activación no ha sido realizada aún puede enviar un correo a info@tramec.mx
                                            @endif

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    -->

                </div>


                @yield('content')



                <div class="ad-footer-btm">

                    <p>Copyright 2025 © Todos los Derechos Reservados.</p>

                </div>



            </div>

        </div>

    </div>







    <!-- Preview Setting -->





    <!-- Script Start -->

    <!-- Script Start -->

    <script src="{{ asset('dash-assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/swiper.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apexchart/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dash-assets/js/apexchart/control-chart-apexcharts.js') }}"></script>

    

  <!-- JS Libraies -->

  <script src="{{ asset('dash-assets/bundles/datatables/datatables.min.js') }}"></script>

  <script src="{{ asset('dash-assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('dash-assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>

  <!-- Page Specific JS File -->

  <script src="{{ asset('dash-assets/js/datatables.js') }}"></script>

    <!-- Page Specific -->

    <script src="{{ asset('dash-assets/js/nice-select.min.js') }}"></script>

    <script type="text/javascript" src="/assets/js/rte.js"></script>

    <script type="text/javascript" src='/assets/js/plugins/all_plugins.js'></script>

    <!-- Custom Script -->

    <script type="text/javascript" src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <script type="text/javascript">

        var editor1 = new RichTextEditor("#div_editor1");

    </script>

    <script src="{{ asset('dash-assets/js/custom.js') }}"></script>



    @yield('scripts')



</body>



</html>

