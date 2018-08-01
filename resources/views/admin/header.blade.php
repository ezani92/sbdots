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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.4/datepicker.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <style type="text/css">
            .datepicker-container { z-index: 10000 !important; }
        </style>
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
                        {{-- <ul class="nav navbar-nav navbar-right be-icons-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                                <ul class="dropdown-menu be-notifications">
                                    <li>
                                        <div class="title">Notifications<span class="badge">{{ \Auth::user()->unreadNotifications->count() }}</span></div>
                                        <div class="list">
                                            <div class="be-scroller">
                                                <div class="content">
                                                    <ul>
                                                        @foreach(Auth::user()->unreadNotifications as $notification)
                                                        <li class="notification notification-unread">
                                                            @if($notification->type == 'App\Notifications\NewDeposit')
                                                            <a href="{{ url('/admin/transaction/'.$notification->data['transaction_id']) }}">
                                                                <div class="image"><img src="{{ secure_asset('assets/img/avatar2.png') }}" alt="Avatar"></div>
                                                                <div class="notification-info">
                                                                    <div class="text"><span class="user-name">{{ $notification->data['title'] }}</span> {{ $notification->data['message'] }}</div>
                                                                    <span class="date">{{ $notification->created_at->diffForHumans() }}</span>
                                                                </div>
                                                            </a>
                                                            @else

                                                            @endif
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer"> <a href="{{ url('admin/') }}">View all notifications</a></div>
                                    </li>
                                </ul>
                            </li>
                        </ul> --}}
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

                                    <li class="parent {{ Request::is('admin/banks*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-city"></i><span>Banks</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/banks') ? 'active' : '' }}"><a href="{{ url('admin/banks') }}">Bank Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/banks/create') ? 'active' : '' }}"><a href="{{ url('admin/banks/create') }}">Add New Bank</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('admin/accounts') ? 'active' : '' }}"><a href="{{ url('admin/accounts') }}"><i class="icon mdi mdi-home"></i><span>Accounting</span></a>
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
                                            <li class="{{ Request::is('admin/transaction/deposit') ? 'active' : '' }}"><a href="{{ url('admin/transaction/deposit') }}">Deposit Transaction</a>
                                            </li>
                                            <li class="{{ Request::is('admin/transaction/withdrawal') ? 'active' : '' }}"><a href="{{ url('admin/transaction/withdrawal') }}">Withdrawal Transaction</a>
                                            </li>
                                            <li class="{{ Request::is('admin/transaction/transfer') ? 'active' : '' }}"><a href="{{ url('admin/transaction/transfer') }}">Transfer Transaction</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="{{ Request::is('admin/reports*') ? 'active' : '' }}"><a href="{{ url('admin/reports') }}"><i class="icon mdi mdi-chart"></i><span>Reports</span></a>
                                    </li>
                                    
                                    <li class="divider">Admin Action</li>
                                    <li class="parent {{ Request::is('admin/users*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-account"></i><span>User Accounts</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{ url('admin/users') }}">User Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/users/create') ? 'active' : '' }}"><a href="{{ url('admin/users/create') }}">Add New User</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="parent {{ Request::is('admin/groups*') ? 'active' : '' }}">
                                        <a href="#"><i class="icon mdi mdi-accounts"></i><span>User Group</span></a>
                                        <ul class="sub-menu">
                                            <li class="{{ Request::is('admin/groups') ? 'active' : '' }}"><a href="{{ url('admin/groups') }}">Group Lists</a>
                                            </li>
                                            <li class="{{ Request::is('admin/groups/create') ? 'active' : '' }}"><a href="{{ url('admin/groups/create') }}">Add New Group</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('admin/annoucement*') ? 'active' : '' }}"><a href="{{ url('admin/annoucement') }}"><i class="icon mdi mdi-notifications-active"></i><span>Annoucement</span></a>
                                    </li>
                                    <li class="{{ Request::is('admin/backup*') ? 'active' : '' }}"><a href="{{ url('admin/backup') }}"><i class="icon mdi mdi-cloud-download"></i><span>Backup</span></a>
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