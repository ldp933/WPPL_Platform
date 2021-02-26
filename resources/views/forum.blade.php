@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Forum</li>
    </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="h3 mb-6 text-gray-800">{{ __('Forum') }}</h1>
            </div>
            <div class="col-md-auto">
            <button type="button" class="btn btn-col font-weight-bold">Add Question</button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-8">
                <table class="table">
                    <thead class="thead-color font-thead">
                        <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Modul</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Choosing colors</th>
                        <td>UI/UX</td>
                        <td>Confuse to choose whats color that suitable for our product</td>
                        <td><a href="#" class="alert-link">See</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Pagination</th>
                        <td>Backend</td>
                        <td>Dont know how to add pagination using query params</td>
                        <td><a href="#" class="alert-link">See</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Server handling</th>
                        <td>Frontend</td>
                        <td>Dont know how to fix index for server handling</td>
                        <td><a href="#" class="alert-link">See</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Login validation</th>
                        <td>Android</td>
                        <td>Dont know how to add login validation</td>
                        <td><a href="#" class="alert-link">See</a></td>
                    </tr>
                    <tr>
                        <th scope="row">Failed request</th>
                        <td>Deployment</td>
                        <td>Cant fixing failed request on controller</td>
                        <td><a href="#" class="alert-link">See</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
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
