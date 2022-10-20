@extends('layouts.userDashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('productInsert') }}">product Add</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productViewPage') }}">Product List</a></li>
                <li class="breadcrumb-item"><a href="{{ route('addSizePage') }}">Add Size</a></li>

            </ol>
        </div>


        <div class="row">
            <div class="col-lg-7">

                <h5>Size List</h5>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Size Name</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sizeAllInfo as $key => $sizeInfo)
                            
                       
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$sizeInfo->SizeName}}</td>
                            <td>{{$sizeInfo->rel_to_Users->name}}</td>
                            <td>{{$sizeInfo->created_at->diffForHumans()}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>



            <div class="col-lg-5">
                @if (session('insertSizeSuccess'))
                    <div class="alert alert-success">

                        {{ session('insertSizeSuccess') }}

                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Size</h5>

                        <form action="{{ route('sizeInsert') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="addSize">Size Name</label>
                                <input type="text" class="form-control" name="addSize" placeholder="Enter the size">
                            </div>

                            @error('addSize')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>
@endsection
