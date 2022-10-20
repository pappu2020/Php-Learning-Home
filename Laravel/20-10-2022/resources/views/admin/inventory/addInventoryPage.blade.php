@extends('layouts.userDashboard')


@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="{{ route('productInsert') }}">product Add</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productViewPage') }}">Product List</a></li>
                <li class="breadcrumb-item"><a href="{{ route('addSizePage') }}">Add Size</a></li>
                <li class="breadcrumb-item"><a href="{{ route('addColorPage') }}">Add Color</a></li> --}}
                {{-- <li class="breadcrumb-item"><a href="{{ route('addInventoryPage') }}">Add Inventory</a></li> --}}

            </ol>
        </div>



        <div class="row">
            <div class="col-lg-8">

                <h5 class="fs-3 mb-5">Inventory -> <span><button type="button" class="btn btn-primary btn-sm">
                            {{ $productInfo->product_name }}<span class="badge badge-sm bg-secondary"></span>
                        </button></span></h5>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($inventoryInfo as $key => $AllinventoryInfo)
                            
                       
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$AllinventoryInfo->rel_to_Products->product_name}}</td>
                            <td>{{$AllinventoryInfo->rel_to_size->SizeName}}</td>
                            <td>{{$AllinventoryInfo->rel_to_color->ColorName}}</td>
                            <td>{{$AllinventoryInfo->Quantity}}</td>
                           
                        </tr>
                       @endforeach
                    </tbody>
                </table>

            </div>


            <div class="col-lg-4">
                @if (session('insertInventorySuccess'))
                    <div class="alert alert-success">{{ session('insertInventorySuccess') }}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Inventory</h5>

                        <form action="{{ route('inventoryInsert') }}" method="POSt">
                            @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="hidden" name="product_id" value="{{ $productInfo->id }}" class="form-control">
                                <input type="text" readonly name="product_name" class="form-control border border-dark"
                                    value="{{ $productInfo->product_name }}">

                            </div>
                            <div class="mb-3">
                                <select class="form-select form-control border border-dark" name="selectSize">
                                    <option selected>--Select the size--</option>
                                    @foreach ($sizeInfo as $AllsizeInfo)
                                        <option value="{{ $AllsizeInfo->id }}">{{ $AllsizeInfo->SizeName }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-3">
                                <select class="form-select form-control border border-dark" name="selectcolor">
                                    <option selected>--Select the Color--</option>
                                    @foreach ($colorInfo as $AllcolorInfo)
                                        <option value="{{ $AllcolorInfo->id }}">
                                            {{ $AllcolorInfo->ColorName == null ? 'N/A' : $AllcolorInfo->ColorName }}
                                        </option>
                                    @endforeach

                                </select>

                            </div>


                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" name="quantity" class="form-control border border-dark">
                            </div>

                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>







    </div>
@endsection
