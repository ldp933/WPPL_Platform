@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item"><a href="/videomentoring">Video Mentoring</a></li>
        <li class="breadcrumb-item active" aria-current="page">Upload Video Mentoring</li>
    </ol>
    </nav>

    <!-- Main Content goes here -->
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="h3 mb-6 text-gray-800">{{ __('Upload Video') }}</h1>
            </div>
            <div class="col-md-auto">
                <div class="dropdown">
                    <button class="btn btn-secondary font-weight-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Modul
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">UI/UX</a>
                        <a class="dropdown-item" href="#">Backend</a>
                        <a class="dropdown-item" href="#">Frontend</a>
                        <a class="dropdown-item" href="#">Mobile</a>
                        <a class="dropdown-item" href="#">Desktop</a>
                        <a class="dropdown-item" href="#">Deployment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-8">
            <div class="text-lg font-weight-bold text-upload-video mb-1">Attachment</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow h-100 py-2 text center">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <form>
                            <div class="form-group">
                                <div class="text-sm font-weight-bold text-attachment mb-1">Upload materi you want to share</div>
                                <input type="file" class="form-control-file font-weight-bold" id="exampleFormControlFile1">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row justify-content-center">
            <div class="col col-lg-8">
            (* File type : .docx, .pptx, .xlsx, .pdf) 
            </div>
        </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="text-lg font-weight-bold text-upload-video mb-1">Description</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col col-lg-8">
            You will be able to edit this information later.
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-8">
            <button type="button" class="btn btn-col font-weight-bold">Upload</button>
            <a href="#" class="alert-link">Cancel</a>
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
