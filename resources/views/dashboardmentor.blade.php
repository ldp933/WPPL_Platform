@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
    </nav>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <h1 class="h3 mb-6 text-gray-800">{{ __('Dashboard') }}</h1>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="table-thead">
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Description</th>
                                            <th>Owner</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Hotelin</td>
                                            <td>Platform untuk Booking Hotel</td>
                                            <td>andhikadar@gmail.com</td>
                                            <td style="text-align: center"><button class="btn btn-icon"><a href="#"><i class="fas fa-eye fa-color"></i></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Benjol</td>
                                            <td>Platform untuk Servis Motor Online</td>
                                            <td>ayudiva@gmail.com</td>
                                            <td style="text-align: center"><button class="btn btn-icon"><a href="#"><i class="fas fa-eye fa-color"></i></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shopipi</td>
                                            <td>Platform untuk Belanjan Online</td>
                                            <td>cinnamon@gmail.com</td>
                                            <td style="text-align: center"><button class="btn btn-icon"><a href="#"><i class="fas fa-eye fa-color"></i></a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>

        <div class="col-lg-12 mb-4">

            <!-- Materi -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6 class="m-0 font-weight-bold text-primary">Latest Materi</h6>
                        </div>
                        <div class="col-lg-6">
                            <a class="see-all-link" href="/materi">See All>></a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/laravel.png" class="card-img-top img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Laravel</a></h5>
                                    <p class="card-subject">Backend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/react.png" class="card-img-top img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">React JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/android.png" class="card-img-top img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Android</a></h5>
                                    <p class="card-subject">Mobile</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card text-center card-list">
                                <img src="img/vue.jpg" class="card-img-top img-fluid">
                                <div class="card-text">
                                    <h5 class="card-title font-weight-bold"><a href="#">Vue JS</a></h5>
                                    <p class="card-subject">Frontend</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
