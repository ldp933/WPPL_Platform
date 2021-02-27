@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Profile') }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
    <div class="col-lg-4 order-lg-1">

<<<<<<< HEAD
    <div class="col-lg-4 order-lg-1">

=======
>>>>>>> master
            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar-card font-weight-bold" style="font-size: 60px; height: 180px; width: 180px;" data-initial="{{ Auth::user()->name[0] }}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  Auth::user()->fullName }}</h5>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8 order-lg-2">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">
<<<<<<< HEAD

=======
                        <h6 class="heading-small text-muted mb-4">User information</h6>
>>>>>>> master
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="username">Username<span class="small text-danger">*</span></label>
                                        <input type="text" id="username" class="form-control" name="username" placeholder="Username">
<<<<<<< HEAD
=======

>>>>>>> master
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="first_name">First Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="first_name" class="form-control" name="first_name" placeholder="First Name" value="{{ old('name', Auth::user()->name) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="last_name">Last Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last Name"value="{{ old('last_name', Auth::user()->last_name) }}">
<<<<<<< HEAD
=======
                                
>>>>>>> master
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="address">Address<span class="small text-danger">*</span></label>
                                        <input type="text" id="adress" class="form-control" name="address" placeholder="Example Street no. 01">
<<<<<<< HEAD
=======

                                        <label class="form-control-label" for="email">Address<span class="small text-danger">*</span></label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Example Street no. 01">
>>>>>>> master
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="about_me">About Me</label>
                                        <textarea id="about_me" class="form-control" name="about_me" placeholder="About Me"></textarea>
<<<<<<< HEAD
=======
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="current_password">Password</label>
                                        <input type="password" id="current_password" class="form-control" name="current_password" placeholder="About Me">
>>>>>>> master
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

<<<<<<< HEAD
        

=======
        <div class="col-lg-4 order-lg-2">

            <div class="card shadow mb-4">
                <div class="card-profile-image mt-4">
                    <figure class="rounded-circle avatar avatar font-weight-bold" style="font-size: 60px; height: 180px; width: 180px;" data-initial="{{ Auth::user()->name[0] }}"></figure>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <h5 class="font-weight-bold">{{  Auth::user()->fullName }}</h5>
                                <p>Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
>>>>>>> master
    </div>

@endsection