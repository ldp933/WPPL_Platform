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
                    <div class="card-header">Benjol</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Clara</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header ">Hotelin</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Benjol</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Clara</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header ">Hotelin</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Benjol</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Clara</div>
                    <div class="card-body text-dark">
                    <i class="fas fa-user fa-5x"></i><br><br>
                    <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center font-weight-bold border-col border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header ">Hotelin</div>
                    <div class="card-body text-dark">
                        <i class="fas fa-user fa-5x"></i><br><br>
                        <a class="btn btn-col text-btn-col font-weight-bold" href="/listsprint" role="button">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
