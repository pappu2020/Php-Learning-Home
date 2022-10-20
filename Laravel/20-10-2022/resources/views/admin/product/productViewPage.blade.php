@extends('layouts.userDashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('productInsert') }}">product Add</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productViewPage') }}">Product List</a></li>

            </ol>
        </div>


        <div class="row">
            <div class="col-lg-12">



                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Sub-category Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">After discount price</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($allProductsInfo as $key => $ProductsInfo)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $ProductsInfo->product_name }}</td>
                                        <td><img width="60px"
                                                src="{{ asset('uploads/products/preview') }}/{{ $ProductsInfo->product_preview_img }}"
                                                alt=""></td>
                                        <td>{{ $ProductsInfo->rel_to_category->catagory_name }}</td>
                                        <td>{{ $ProductsInfo->rel_to_Subcategory->subCategoryName }}</td>
                                        <td>{{ $ProductsInfo->product_Price }}</td>
                                        <td>{{ $ProductsInfo->product_Discount == null ? 'No Discount' : $ProductsInfo->product_Discount }}
                                        </td>
                                        <td>{{ $ProductsInfo->After_discount }}</td>
                                        
                                        <td>{{ $ProductsInfo->product_Brand == null ? 'Unknown' : $ProductsInfo->product_Brand }}
                                        </td>
                                        <td>{{ $ProductsInfo->rel_to_Users->name }}</td>
                                        <td>{{ $ProductsInfo->created_at->diffForHumans() }}</td>
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
                                                    <a class="dropdown-item btn btn-primary" href="">Delete</a>
                                                    <a class="dropdown-item" href="{{route('addInventoryPage',$ProductsInfo->id )}}">Add Inventory</a>
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
