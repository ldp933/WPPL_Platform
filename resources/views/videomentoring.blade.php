@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Video</li>
    </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="h3 mb-6 text-gray-800">{{ __('List Video') }}</h1>
            </div>
            <div class="col-md-auto">
            <a class="btn btn-col text-btn-col font-weight-bold" href="/uploadvideomentoring" role="button">Add Video</a>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow h-100 py-2 text center">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col col-lg-12">
                                <table class="table">
                                        <thead class="thead-color font-thead">
                                            <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Modul</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">UX Strategy: Lean Canvas & User Persona</th>
                                            <td>UI/UX</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">UX Strategy: Comparison Matrix</th>
                                            <td>UI/UX</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Basic Laravel</th>
                                            <td>Backend</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Routing and Fetch API</th>
                                            <td>Backend</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Instalasi Node JS</th>
                                            <td>Frontend</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">React JS</th>
                                            <td>Frontend</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Android Chart in Android Studio</th>
                                            <td>Android</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tutorial WPF</th>
                                            <td>Desktop</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Dokumentasi Velacro Documentation</th>
                                            <td>Desktop</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">DigitalOcean Automation</th>
                                            <td>Deployment</td>
                                            <td><button class="btn"><a href="/detailvideomentoring"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn"><i class="fas fa-download"></i></button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
        </a>
        </li>
    </ul>
    </nav>
    <!-- Main Content goes here -->


    <!-- End of Main Content -->
@endsection

@push('notif')
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
@endpush
