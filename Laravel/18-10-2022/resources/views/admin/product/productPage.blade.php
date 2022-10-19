@extends('layouts.userDashboard');


@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">

                 @if (session("productInsertSuccess"))
                     <div class="alert alert-success">{{session("productInsertSuccess")}}</div>
                 @endif
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>
                        <div class="productForm">
                            <form action="{{route("productInsert")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="categoryName">Category Name</label>
                                        <select
                                            class="form-select ms-3 form-control border border-dark category_name bg-primary text-light"
                                            name="category_name">
                                            <option selected>--Select the Category--</option>

                                            @foreach ($categoryAllData as $categoryData)
                                                <option class="fw-bold" value="{{ $categoryData->id }}">
                                                    {{ $categoryData->catagory_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="categoryName">Sub-Category Name</label>
                                        <select
                                            class="form-select ms-3 form-control border border-dark bg-primary text-light"
                                            name="Subcategory_name" id="subCategoryId">
                                            <option value="">--Select the Sub-Category--</option>


                                        </select>
                                    </div>


                                    <div class="col-lg-6 mt-3">
                                        <label for="product_name" class="form-label">Product Name</label>
                                        <input type="text" name="product_name" class="form-control border border-dark">
                                    </div>


                                    <div class="col-lg-6 mt-3">
                                        <label for="product_Price" class="form-label">Product Price</label>
                                        <input type="number" name="product_Price" class="form-control border border-dark">
                                    </div>

                                    <div class="col-lg-6 mt-3">
                                        <label for="product_Discount" class="form-label">Product Discount (%)</label>
                                        <input type="number" name="product_Discount"
                                            class="form-control border border-dark">
                                    </div>

                                    <div class="col-lg-6 mt-3">
                                        <label for="product_Brand" class="form-label">Product Brand</label>
                                        <input type="text" name="product_Brand" class="form-control border border-dark">
                                    </div>



                                    <div class="input-group col-lg-12 mt-3">
                                        <span class="input-group-text">Short Description</span>
                                        <textarea class="form-control border border-dark" name="product_Short_desp" aria-label="With textarea"></textarea>
                                    </div>  
                                    
                                    <div class="input-group col-lg-12 mt-3">
                                        <span class="input-group-text">Long Description</span>
                                        <textarea class="form-control border border-dark" name="product_Long_desp" aria-label="With textarea"></textarea>
                                    </div>


                                     <div class="col-lg-6 mt-3">
                                        <label for="product_preview_img" class="form-label">Preview Image</label>
                                        <img src="" alt="" width="200px" height="100px" class="mt-2 ml-3" id="productImageView">
                                        <input type="file" name="product_preview_img" class="form-control border border-dark mt-3" onchange="document.getElementById('productImageView').src = window.URL.createObjectURL(this.files[0])">
                                    </div> 
                                    
                                    
                                     <div class="col-lg-6 mt-3">
                                        <label for="product_Thumbnails_img" class="form-label">Thumbnails Image</label>
                                        <img src="" alt="" width="200px" height="100px" class="mt-2 ml-3" id="productthumbImageView">
                                        <input type="file" multiple name="product_Thumbnails_img[]" class="form-control border border-dark mt-3" onchange="document.getElementById('productthumbImageView').src = window.URL.createObjectURL(this.files[0])">
                                    </div>

                                    <button type="submit" class="btn btn-success mt-3 mx-auto">Submit</button>








                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('javascriptSection')
    <script>
        $('.category_name').change(function() {

            var category_id = $(this).val();


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                type: 'POST',
                url: '/ProductPageCatESubInfo',
                data: {
                    'category_id': category_id
                },
                success: (function(data) {
                    $('#subCategoryId').html(data);
                })
            })













        });
    </script>
@endsection
