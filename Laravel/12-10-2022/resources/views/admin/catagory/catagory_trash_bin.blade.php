@extends('layouts.userDashboard')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
                 @if (session('deleteCataSuccess'))

                        <div class="alert alert-success">{{session('deleteCataSuccess')}}</div>
                            
                        @endif
                <div class="card">
                    <div class="card-body">
                      
                        <h5 class="card-title">Trash Bin</h5>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>

                                    <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Added by</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                         @foreach ($trashed as $key => $trashedData)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>{{ $trashedData->catagory_name }}</td>
                                        <td><img width="100px" height="70px"
                                                src="{{ asset('uploads/category') }}/{{ $trashedData->catagory_img }}"></td>
                                        <td>{{ $trashedData->rel_to_uesr->name }}</td>
                                        <td>{{ $trashedData->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2" />
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2" />
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item btn btn-primary" href="{{route("category_restore",$trashedData->id)}}">Restore</a>
                                                    <a class="dropdown-item" href="{{route("category_Parmanant_delete",$trashedData->id)}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
    </div>
</div>
    
@endsection