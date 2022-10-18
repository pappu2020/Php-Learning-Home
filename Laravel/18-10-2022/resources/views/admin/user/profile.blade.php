@extends('layouts.userDashboard');

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('profilePage') }}">Profile</a></li>

        </ol>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4">
                <div class="card">

                    <div class="card-body">
                        @if (session('name_update_success'))
                            <div class="alert alert-success">
                                {{ session('name_update_success') }}
                            </div>
                        @endif
                        <h5 class="card-title">Name Change</h5>
                        <form method="POST" action="{{ route('profileNameUpdate') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control border border-dark" name="name"
                                    value="{{ Auth::User()->name }}">
                                @error('name')
                                    <strong class="text-danger fst-italic">{{ $message }}</strong>
                                @enderror

                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="card">

                    <div class="card-body">
                        @if (session('pass_update_success'))
                            <div class="alert alert-success">
                                {{ session('pass_update_success') }}
                            </div>
                        @endif
                        <h5 class="card-title">Password Change</h5>
                        <form method="POST" action="{{ route('profilePasswordUpdate') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="old_pass" class="form-label">Old Password</label>
                                <input type="password" class="form-control border border-dark" name="old_pass">

                                @error('old_pass')
                                    <strong class="text-danger fst-italic">{{ $message }}</strong>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="new_pass" class="form-label">New Password</label>
                                <input type="password" class="form-control border border-dark" name="password">
                                @error('password')
                                    <strong class="text-danger fst-italic">{{ $message }}</strong>
                                @enderror

                            </div>

                            <div class="mb-3">
                                <label for="confirm_pass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control border border-dark" name="password_confirmation">
                                @error('password_confirmation')
                                    <strong class="text-danger fst-italic">{{ $message }}</strong>
                                @enderror

                                @if (session('wrong_pass'))
                                    <strong class="text-danger fst-italic">{{ session('wrong_pass') }}</strong>
                                @endif

                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="card">
                     @if (Auth::user()->image == null)
                                        <img width="150px" height="150px" class="mx-auto d-block"
                                            src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                                    @else
                                        <img id="profileImageView" src="{{asset("uploads/user")."/".Auth::user()->image}}" width="150px" height="150px" alt=""  />
                                    @endif
                    <div class="card-body">

                         <form method="POST" action="{{ route('profilePicChange') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="userImg" class="form-label">Change Profile Picture</label>
                                <input type="file" class="form-control" name="profile_img" onchange="document.getElementById('profileImageView').src = window.URL.createObjectURL(this.files[0])"
                                   >
                                {{-- @error('profile_img')
                                    <strong class="text-danger fst-italic">{{ $message }}</strong>
                                @enderror --}}

                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      
                    </div>
                </div>
            </div>



        </div>

    </div>
@endsection
