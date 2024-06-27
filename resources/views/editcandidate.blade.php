<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>RECTEM ELECTION | Dashboard</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('dashcss/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashcss/bootstrap-grid.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('dashcss/style.css') }}">
    <!-- responsive css --> 
    <link rel="stylesheet" href="{{ asset('dashcss/responsive.css') }}" />
    <!-- color css --> 
    <link rel="stylesheet" href="{{ asset('dashcss/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('dashcss/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('dashcss/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('dashcss/custom.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('components.sidenav')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="white" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z" />
                                </svg></button>
                            <div class="logo_section">
                                <a href="index.php"><img class=""
                                        src="https://rectem.edu.ng/rectem.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M21 19v1H3v-1l2-2v-6c0-3.1 2.03-5.83 5-6.71V4a2 2 0 0 1 2-2a2 2 0 0 1 2 2v.29c2.97.88 5 3.61 5 6.71v6zm-7 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2" />
                                                </svg><span class="badge">.</span></a></li>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10 19h3v3h-3zm2-17c5.35.22 7.68 5.62 4.5 9.67c-.83 1-2.17 1.66-2.83 2.5C13 15 13 16 13 17h-3c0-1.67 0-3.08.67-4.08c.66-1 2-1.59 2.83-2.25C15.92 8.43 15.32 5.26 12 5a3 3 0 0 0-3 3H6a6 6 0 0 1 6-6" />
                                                </svg></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li> -->
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                   src="https://rectem.edu.ng/rectem.png"
                                                    alt="#" /><span
                                                    class="name_user">{{ Auth::user()->name }} <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                        height="1.5em" viewBox="0 0 24 24">
                                                        <path fill="white"
                                                            d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175" />
                                                    </svg> </span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('profile.edit') }}">My Profile</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Welcome</h2>
                                </div>
                            </div>
                        </div>

                        <!-- end welcome -->
                         @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                        <div class="row column3">
                        </div>
                        <div class="row column4 graph">
                            <div class="col-md-6 margin_bottom_30">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z"/></g></svg>
                                                    |Edit Candidates</span><span class="plus_green_bt"></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Edit Candidate</p>
                                        </div>
                                        <div class="task_list_main">
                                            <form method="POST" action="{{ route('edituserdetails.update', ['id' => $candidates->id]) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Candidate Full Name*</label>
                                                  <input type="text" name="name" value="{{ $candidates->name }}" class="form-control" id="exampleFormControlInput1" placeholder="{{ $candidates->name }}">
                                                   <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                </div>
                                                <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Candidate Matric No*</label>
                                                  <input type="text" name="matricnumber" value="{{ $candidates->matricnumber }}" class="form-control" id="exampleFormControlInput1" placeholder="{{ $candidates->matricnumber }}">
                                                   <x-input-error :messages="$errors->get('matricnumber')" class="mt-2" />
                                                </div>
                                                <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Candidate Aspiring Position*</label>
                                                  <input type="text" name="position" value="{{ $candidates->position }}"  class="form-control" id="exampleFormControlInput1" placeholder="{{ $candidates->position }}">
                                                   <x-input-error :messages="$errors->get('position')" class="mt-2" />
                                                </div>
                                                <div class="mb-3 col-12">
                                                  <label for="exampleFormControlInput1" class="form-label">Candidate Level*</label>
                                                  <input type="text" name="level" class="form-control" value="{{ $candidates->level }}" id="exampleFormControlInput1" placeholder="{{ $candidates->level }}">
                                                   <x-input-error :messages="$errors->get('level')" class="mt-2" />
                                                </div>
                                                 <div class="mb-3 col-12">
                                                   <button class="btn btn-primary">Edit  Candidate</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd"/></svg>
                                                    Profile</span><span class="plus_green_bt"><a
                                                        href="#"></a></span></h3>
                                        </div>
                                        <div class="list_cont">
                                           
                                        </div>
                                        <div class="msg_list_main">
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Matric No</th>
                                                  <th scope="col">Position</th>
                                                </tr>
                                              </thead>
                                              <tbody><tr>
                                                  <th scope="row">{{ $candidates->id }}</th>
                                                  <td><img src="{{ asset('storage/' . $candidates->avatar) }}" style="height: 150px" class="img-thumbnail" alt="Profile Picture"></td>
                                                  <td>{{ $candidates->name }}</td>
                                                  <td>{{ $candidates->matricnumber }}</td>
                                                </tr> </tbody>
                                            </table>
 
                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Position</th>
                                                  <th scope="col">Level</th>
                                                </tr>
                                              </thead>
                                              <tbody><tr>
                                                  <td>{{ $candidates->position }}</td>
                                                  <td>{{ $candidates->level }}</td>
                                                </tr> </tbody>
                                            </table>

                                        </div>
                                        <!-- <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Read
                                                    More</a></div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2024 Developed by AfricTech | All rights reserved.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Reply</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="send_member_form" method="POST" action="../includes/send_message_mem_inc.php">
                            <div
                                style="position: relative; display: inline-block; background-color: darkblue; padding: 10px; border-radius: 5px; color: white; width: 10%;">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke-dasharray="66" stroke-dashoffset="66" stroke-width="2"
                                            d="M3 14V5H21V19H3V14">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s"
                                                values="66;0" />
                                        </path>
                                        <path stroke-dasharray="26" stroke-dashoffset="26"
                                            d="M3 16L7 13L10 15L16 10L21 14">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s"
                                                dur="0.4s" values="26;0" />
                                        </path>
                                    </g>
                                    <circle cx="7.5" cy="9.5" r="1.5" fill="white" fill-opacity="0">
                                        <animate fill="freeze" attributeName="fill-opacity" begin="1s"
                                            dur="0.4s" values="0;1" />
                                    </circle>
                                </svg>
                                <input type="file" name="image" style="width: 100%;">
                            </div>

                            <button
                                style="background: darkblue; color: white; border: none; height: 10vh; width: 100%">Reply</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- jQuery -->
    <script src="{{ asset('dashjs/jquery.min.js') }}"></script>
    <script src="{{ asset('dashjs/popper.min.js') }}"></script>
    <script src="{{ asset('dashjs/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('dashjs/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('dashjs/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('dashjs/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('dashjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dashjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashjs/utils.js') }}"></script>
    <script src="{{ asset('dashjs/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('dashjs/perfect-scrollbar.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('dashjs/custom.js') }}"></script>
    <script src="{{ asset('dashjs/chart_custom_style1.js') }}"></script>

</body>

</html>
