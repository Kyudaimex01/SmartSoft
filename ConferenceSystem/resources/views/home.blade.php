@extends('layouts.syslayout')

@section('content')
<div class="page-wrapper">
        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <h2>PANEL DE USUARIO</h2>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <div class="account2">
                                    <div class="image img-cir img-120">
                                        <img src="images/icon/avatar-big-01.jpg" alt="John Doe" />
                                    </div>
                                    <h4 class="name">john doe</h4>
                                    <a href="#">Sign out</a>
                                </div>
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 4
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="index.html">Dashboard 1</a>
                                                </li>
                                                <li>
                                                    <a href="index2.html">Dashboard 2</a>
                                                </li>
                                                <li>
                                                    <a href="index3.html">Dashboard 3</a>
                                                </li>
                                                <li>
                                                    <a href="index4.html">Dashboard 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="inbox.html">
                                                <i class="fas fa-chart-bar"></i>Inbox</a>
                                            <span class="inbox-num">3</span>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-shopping-basket"></i>eCommerce</a>
                                        </li>
                                        <li class="has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-trophy"></i>Features
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="table.html">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="form.html">Forms</a>
                                                </li>
                                                <li>
                                                    <a href="#">Calendar</a>
                                                </li>
                                                <li>
                                                    <a href="map.html">Maps</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-copy"></i>Pages
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="register.html">Register</a>
                                                </li>
                                                <li>
                                                    <a href="forget-pass.html">Forget Password</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-sub">
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-desktop"></i>UI Elements
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="button.html">Button</a>
                                                </li>
                                                <li>
                                                    <a href="badge.html">Badges</a>
                                                </li>
                                                <li>
                                                    <a href="tab.html">Tabs</a>
                                                </li>
                                                <li>
                                                    <a href="card.html">Cards</a>
                                                </li>
                                                <li>
                                                    <a href="alert.html">Alerts</a>
                                                </li>
                                                <li>
                                                    <a href="progress-bar.html">Progress Bars</a>
                                                </li>
                                                <li>
                                                    <a href="modal.html">Modals</a>
                                                </li>
                                                <li>
                                                    <a href="switch.html">Switchs</a>
                                                </li>
                                                <li>
                                                    <a href="grid.html">Grids</a>
                                                </li>
                                                <li>
                                                    <a href="fontawesome.html">FontAwesome</a>
                                                </li>
                                                <li>
                                                    <a href="typo.html">Typography</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- RECENT REPORT-->
                                        <div class="recent-report3 m-b-40">
                                            <div class="title-wrap">
                                                <h3 class="title-3">recent reports</h3>
                                                <div class="chart-info-wrap">
                                                    <div class="chart-note">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Blue</span>
                                                    </div>
                                                    <div class="chart-note mr-0">
                                                        <span class="dot dot--green"></span>
                                                        <span>green</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filters m-b-55">
                                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Products Sales</option>
                                                        <option value="">Products</option>
                                                        <option value="">Services</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                                <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                    <select class="js-select2 au-select-dark" name="time">
                                                        <option selected="selected">All Time</option>
                                                        <option value="">By Month</option>
                                                        <option value="">By Day</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </div>
                                            <div class="chart-wrap">
                                                <canvas id="recent-rep3-chart"></canvas>
                                            </div>
                                        </div>
                                        <!-- END RECENT REPORT-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!-- CHART PERCENT-->
                                        <div class="chart-percent-3 m-b-40">
                                            <h3 class="title-3 m-b-25">chart by %</h3>
                                            <div class="chart-note m-b-5">
                                                <span class="dot dot--blue"></span>
                                                <span>products</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--red"></span>
                                                <span>services</span>
                                            </div>
                                            <div class="chart-wrap m-t-60">
                                                <canvas id="percent-chart2"></canvas>
                                            </div>
                                        </div>
                                        <!-- END CHART PERCENT-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- DATA TABLE-->
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>date</th>
                                                        <th>type</th>
                                                        <th>description</th>
                                                        <th>status</th>
                                                        <th>price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>Mobile</td>
                                                        <td>iPhone X 64Gb Grey</td>
                                                        <td class="process">Processed</td>
                                                        <td>$999.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-28 01:22</td>
                                                        <td>Mobile</td>
                                                        <td>Samsung S8 Black</td>
                                                        <td class="process">Processed</td>
                                                        <td>$756.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-27 02:12</td>
                                                        <td>Game</td>
                                                        <td>Game Console Controller</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$22.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-26 23:06</td>
                                                        <td>Mobile</td>
                                                        <td>iPhone X 256Gb Black</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$1199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-25 19:03</td>
                                                        <td>Accessories</td>
                                                        <td>USB 3.0 Cable</td>
                                                        <td class="process">Processed</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-29 05:57</td>
                                                        <td>Accesories</td>
                                                        <td>Smartwatch 4.0 LTE Wifi</td>
                                                        <td class="denied">Denied</td>
                                                        <td>$199.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-24 19:10</td>
                                                        <td>Camera</td>
                                                        <td>Camera C430W 4k</td>
                                                        <td class="process">Processed</td>
                                                        <td>$699.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2018-09-22 00:43</td>
                                                        <td>Computer</td>
                                                        <td>Macbook Pro Retina 2017</td>
                                                        <td class="process">Processed</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- END DATA TABLE                  -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-account-calendar"></i>22 May, 2018</h3>
                                                <button class="au-btn-plus">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </button>
                                            </div>
                                            <div class="au-task js-list-load au-task--border">
                                                <div class="au-task__title">
                                                    <p>Tasks for John Doe</p>
                                                </div>
                                                <div class="au-task-list js-scrollbar3">
                                                    <div class="au-task__item au-task__item--danger">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">10:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--warning">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">11:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--primary">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">02:00 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--success">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">03:30 PM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--danger js-load-item">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Meeting about plan for Admin Template 2018</a>
                                                            </h5>
                                                            <span class="time">10:00 AM</span>
                                                        </div>
                                                    </div>
                                                    <div class="au-task__item au-task__item--warning js-load-item">
                                                        <div class="au-task__item-inner">
                                                            <h5 class="task">
                                                                <a href="#">Create new task for Dashboard</a>
                                                            </h5>
                                                            <span class="time">11:00 AM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-task__footer">
                                                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                                            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-comment-text"></i>Chat</h3>
                                                <button class="au-btn-plus">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </button>
                                            </div>
                                            <div class="au-inbox-wrap">
                                                <div class="au-chat au-chat--border">
                                                    <div class="au-chat__title">
                                                        <div class="au-chat-info">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar avatar--small">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <span class="nick">
                                                                <a href="#">John Smith</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat__content au-chat__content2 js-scrollbar5">
                                                        <div class="recei-mess-wrap">
                                                            <span class="mess-time">12 Min ago</span>
                                                            <div class="recei-mess__inner">
                                                                <div class="avatar avatar--tiny">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                                <div class="recei-mess-list">
                                                                    <div class="recei-mess">Lorem ipsum dolor sit amet elit</div>
                                                                    <div class="recei-mess">Donec tempor viverra</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="send-mess-wrap">
                                                            <span class="mess-time">30 Sec ago</span>
                                                            <div class="send-mess__inner">
                                                                <div class="send-mess-list">
                                                                    <div class="send-mess">Lorem ipsum dolor sit amet elit</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat-textfield">
                                                        <form class="au-form-icon">
                                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                            <button class="au-input-icon">
                                                                <i class="zmdi zmdi-camera"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
@endsection

@section('saved')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<!--ALERT DIV-->
<div class="container">
                    <!-- ALERT-->
                    <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                        <i class="zmdi zmdi-check-circle"></i>
                        <span class="content">You successfully read this important alert message.</span>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                        </button>
                    </div>
                    <!-- END ALERT-->
</div>
@endsection
