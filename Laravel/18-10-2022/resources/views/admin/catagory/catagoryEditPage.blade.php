@extends('layouts.userDashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('catagoryPage') }}">Category</a></li>
                <li class="breadcrumb-item"><a href="{{ route('catagoryEditPage', 'page') }}">Category Edit</a></li>

            </ol>
        </div>


        <div class="row">

            <div class="col-lg-8 m-auto">


                @if (session('categoryUpdateSuccess'))

                <div class="alert alert-success">{{session('categoryUpdateSuccess')}}</div>
                    
                @endif
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Edit Category</h5>

                        <form action="{{ route('catagotyUpdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-1">
                                <label for="cataName" class="form-label">Category Name</label>
                                <input type="text" class="form-control border border-dark" name="categoryName" value="{{$category_info->catagory_name}}">

                            </div>

                            <input type="hidden" name="category_id_hidden" value="{{$category_info->id}}">

                            @error('categoryName')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                             <label for="cataImg" class="form-label">Category Image</label>

                             <div class="mt-2">
                                <img id="categoryImageView" width="200px" height="150px" src="{{asset("uploads/category")}}/{{$category_info->catagory_img}}" alt="">

                            </div>

                            <div class="mt-2">
                                
                                <input type="file"  onchange="document.getElementById('categoryImageView').src = window.URL.createObjectURL(this.files[0])" class="form-control" name="categoryImg">

                            </div>

                            @error('categoryImg')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>














    </div>
@endsection
