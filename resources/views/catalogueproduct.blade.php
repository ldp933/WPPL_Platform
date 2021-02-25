@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Catalogue Product</li>
    </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800">{{ __('Catalogue Product') }}</h1>

    <!-- Main Content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Android</div>
                    <div class="card-body text-dark">
                        <i class="fas fa-mobile"></i>
                        <h6 class="card-title">Android software development is the process by which applications are created for devices
                        unning the Android operating system. Google states that "Android apps can be written using Kotlin, Java, 
                        and C++ languages" using the Android software development kit, while using other languages is also possible.
                        </h6>
                        <button class="button-hover"  style="vertical-align:middle"><a href="/android"><span>See more </span></a></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Desktop</div>
                    <div class="card-body text-dark">
                        <i class="fas fa-desktop"></i>
                        <h6 class="card-title">Desktop software development is a computer program that runs locally on a computer device, 
                            such as desktop or laptop computer, in contrast to a web application, which is delivered to a local 
                            device over the Internet from a remote server.</h6>
                        <button class="button-hover"  style="vertical-align:middle"><a href="/desktop"><span>See more </span></a></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Web</div>
                    <div class="card-body text-dark">
                        <i class="fas fa-code"></i>
                        <h6 class="card-title">Web software development is the work involved in developing a Web site for the Internet or an intranet. 
                            Web development can range from developing a simple single static page of plain text to complex Web-based Internet applications, 
                            electronic businesses, and social network services.</h6>
                        <button class="button-hover" style="vertical-align:middle"><a href="/web"><span>See more </span></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

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
