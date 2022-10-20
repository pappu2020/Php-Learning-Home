@extends('layouts.userDashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('productInsert') }}">product Add</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productViewPage') }}">Product List</a></li>
                <li class="breadcrumb-item"><a href="{{ route('addColorPage') }}">Add Size</a></li>

            </ol>
        </div>


        <div class="row">
            <div class="col-lg-7">

                <h5>Color List</h5>

                <table class="table  table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Color Name</th>
                            <th scope="col">Color Code</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colorAllInfo as $key => $colorInfo)
                            
                       
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$colorInfo->ColorName}}</td>
                            
                            <td><div style="width:50px;height:40px;background:{{$colorInfo->ColorCode}}">{{($colorInfo->ColorCode==null?'N/A':'')}}</div></td>
                            <td>{{$colorInfo->rel_to_Users->name}}</td>
                            <td>{{$colorInfo->created_at->diffForHumans()}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>



            <div class="col-lg-5">
                @if (session('insertColorSuccess'))
                    <div class="alert alert-success">

                        {{ session('insertColorSuccess') }}

                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Color</h5>

                        <form action="{{ route('colorInsert') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="addSize">Color Name</label>
                                <input type="text" class="form-control" name="addColor" placeholder="Enter the Color name">
                            </div>
                            
                            <div class="mb-3">
                                <label for="addSize">Color Code</label>
                                <input type="text" class="form-control" name="colorCode" placeholder="Enter the Color Code">
                            </div>

                           

                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>
@endsection
