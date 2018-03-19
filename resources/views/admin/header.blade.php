<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ secure_asset('assets/img/logo-fav.png') }}">
        <title>Sbdots | Management System</title>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/jqvmap/jqvmap.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" type="text/css"/>
    </head>
    <body>
        <div class="be-wrapper be-fixed-sidebar">
            <nav class="navbar navbar-default navbar-fixed-top be-top-header">
                <div class="container-fluid">
                    <div class="navbar-header"><a href="{{ url('/admin') }}" class="navbar-brand"></a>
                    </div>
                    <div class="be-right-navbar">
                        <ul class="nav navbar-nav navbar-right be-user-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{ secure_asset('assets/img/avatar.png') }}" alt="Avatar"><span class="user-name">{{ Auth::user()->name }}</span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <div class="user-info">
                                            <div class="user-name">{{ Auth::user()->name }}</div>
                                            <div class="user-position online">Online</div>
                                        </div>
                                    </li>
                                    <li><a href="#"><span class="icon mdi mdi-face"></span> Account</a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="icon mdi mdi-power"></span> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        <div class="page-title"><span></span></div>
                        <ul class="nav navbar-nav navbar-right be-icons-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                                <ul class="dropdown-menu be-notifications">
                                    <li>
                                        <div class="title">Notifications<span class="badge">3</span></div>
                                        <div class="list">
                                            <div class="be-scroller">
                                                <div class="content">
                                                    <ul>
                                                        {{-- <li class="notification notification-unread">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar2.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div>
                                                                    <span class="date">2 min ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar3.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">Joel King</span> is now following you</div>
                                                                    <span class="date">2 days ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar4.png" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div>
                                                                    <span class="date">2 days ago</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification">
                                                            <a href="#">
                                                                <div class="image"><img src="assets/img/avatar5.png" alt="Avatar"></div>
                                                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                                                            </a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="#">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="be-left-sidebar">
                <div class="left-sidebar-wrapper">
                    <a href="#" class="left-sidebar-toggle">Dashboard</a>
                    <div class="left-sidebar-spacer">
                        <div class="left-sidebar-scroll">
                            <div class="left-sidebar-content">
                                <ul class="sidebar-elements">
                                    <li class="divider">Menu</li>
                                    <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ url('admin') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                                    </li>
                                    <li class="parent {{ Request::is('admin/games*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-gamepad"></i><span>Games</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/games') ? 'active' : '' }}"><a href="{{ url('admin/games') }}">Game Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/games/create') ? 'active' : '' }}"><a href="{{ url('admin/games/create') }}">Add New Game</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="parent {{ Request::is('admin/bonuses*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-ticket-star"></i><span>Bonuses</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/bonuses') ? 'active' : '' }}"><a href="{{ url('admin/bonuses') }}">Bonus Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/bonuses/create') ? 'active' : '' }}"><a href="{{ url('admin/bonuses/create') }}">Add New Bonus Code</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="parent {{ Request::is('admin/transaction*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-view-list-alt"></i><span>Transactions</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/transaction') ? 'active' : '' }}"><a href="{{ url('admin/transaction') }}">All Transaction Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/transaction/deposit') ? 'active' : '' }}"><a href="{{ url('admin/transaction/deposit') }}">Deposit Transaction</a>
                                            </li>
                                            <li class="{{ Request::is('admin/transaction/withdrawal') ? 'active' : '' }}"><a href="{{ url('admin/transaction/withdrawal') }}">Withdrawal Transaction</a>
                                            </li>
                                            <li class="{{ Request::is('admin/transaction/transfer') ? 'active' : '' }}"><a href="{{ url('admin/transaction/transfer') }}">Transfer Transaction</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class=""><a href="{{ url('admin/reports') }}"><i class="icon mdi mdi-chart"></i><span>Reports</span></a>
                                    </li>
                                    
                                    <li class="divider">Admin Action</li>
                                    <li class="parent {{ Request::is('admin/users*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-accounts"></i><span>User Management</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{ url('admin/users') }}">User Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}"><a href="{{ url('admin/users/create') }}">Add New User</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}"><a href="{{ url('admin/settings') }}"><i class="icon mdi mdi-settings"></i><span>Settings</span></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="progress-widget">
                        <div class="progress-data text-center"><span class="name">Copyright {{ now()->format('Y') }} | Version 1.0.0</span></div>
                    </div>
                </div>
            </div>