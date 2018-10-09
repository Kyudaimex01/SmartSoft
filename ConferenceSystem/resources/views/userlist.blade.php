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
                            @auth('web')
                                <div class="account2">
                                    <div class="image img-cir img-120">
                                        <img src="images/icon/avatar-big-01.jpg" alt="{{ Auth::user()->name }}" />
                                    </div>
                                    <h4 class="name">{{ Auth::user()->name }}</h4>
                                    <a href="#">Sign out</a>
                                </div>
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">

                                        <li class="active">
                                            <a href="home">
                                                <i class="fas fa-shopping-basket"></i>Conferences</a>
                                        </li>


                                    </ul>
                                </nav>
                            @else
                                <div class="account2">
                                    <div class="image img-cir img-120">
                                        <img src="images/icon/avatar-big-01.jpg" alt="{{ Auth::guard('admin')->user()->name }}" />
                                    </div>
                                    <h4 class="name">{{ Auth::guard('admin')->user()->name }}</h4>
                                    <a href="#">Sign out</a>
                                </div>
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">

                                        <li class="active">
                                            <a href="home">
                                                <i class="fas fa-shopping-basket"></i>Conferences</a>
                                        </li>

                                        <li >
                                            <a href="#">
                                                <i class="fas"></i>Users</a>
                                        </li>

                                    </ul>
                                </nav>
                            @endguest
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">

                                <div class="row">
                                    <table class="table" id="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Email</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($size!=0)
                                            @foreach($users as $item)
                                            <tr class="item{{$item->id}}">
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td><button type="button" class="edit-modal btn btn-info"
                                                    data-info="{{$item->id}},{{$item->name}},{{$item->email}}" data-toggle="modal" data-target="#updateModal">
                                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                                </button>

                                                <button class="delete-modal btn btn-danger"
                                                        data-info="{{$item->id}},{{$item->name}},{{$item->email}}">
                                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <script>

                                        </script>

                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <!--update modal -->
                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true"
                            data-backdrop="static">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticModalLabel">Actualizacion de Datos</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal static -->
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

