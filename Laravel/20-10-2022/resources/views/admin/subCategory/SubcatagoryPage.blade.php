@extends('layouts.userDashboard');
@section('content')

    <div class="row">
        <div class="col-lg-8">

            
                <div class="card">
                    <div class="card-body">
                        {{-- @if (session('deleteCataSuccess'))

                        <div class="alert alert-success">{{session('deleteCataSuccess')}}</div>
                            
                        @endif --}}
                        <h5 class="card-title">Sub-Category List</h5>
                        <table class="table table-striped table-hover" id="table_id">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>

                                    <th scope="col">Sub-Category Name</th>
                                     <th scope="col">Category Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Added by</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($subCategoryData as $key => $AllsubCategoryData)
                                    <tr>
                                        <th>{{ $key + 1 }}</th>
                                        <td>{{ $AllsubCategoryData->subCategoryName }}</td>
                                        <td>{{ $AllsubCategoryData->rel_to_category->catagory_name}}</td>
                                        <td><img width="100px" height="70px"
                                                src="{{ asset('uploads/subCategory') }}/{{ $AllsubCategoryData->subCategoryImg }}"></td>
                                        <td>{{ $AllsubCategoryData->rel_to_users->name}}</td>
                                        <td>{{ $AllsubCategoryData->created_at->diffForHumans() }}</td>
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
                                                    <a class="dropdown-item btn btn-primary" href="">Edit</a>
                                                    <a class="dropdown-item" href="">Delete</a>
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

        <div class="col-lg-4">

            @if (session("SubCategoryinsertSuccess"))

            <div class="alert alert-success">{{session("SubCategoryinsertSuccess")}}</div>
                
            @endif
            <div class="card">
                
                <div class="card-body">
                     <h5 class="card-title">Add Sub-category</h5>
                    <form action="{{route("SubcatagoryInsert")}}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <select class="form-select mt-2 form-control" name="subCateOption">

                            <option selected class="form-control">--Select the Category--</option>
                            @foreach ($categoryData as $categoryAllData)
                                <option value="{{ $categoryAllData->id }}" class="form-control bg-info text-light fw-bolder">{{ $categoryAllData->catagory_name }}
                                </option>
                            @endforeach

                        </select>

                        <div class="mt-2">
                            <label for="subCategoryName" class="form-label">Sub-category Name</label>
                            <input type="text" class="form-control border border-dark" name="subCategoryName" placeholder="Enter the name">
                       
                        </div>

                        @error('subCategoryName')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror



                        <label for="cataImg" class="form-label mt-2">Select the Image</label>
                             
                             <div class="mt-2">
                               <img id="SubcategoryImageView" width="200px" height="150px" alt="">

                            </div>


                            <div class="mt-2">
                                
                                <input type="file" class="form-control" name="subCategoryImg"  onchange="document.getElementById('SubcategoryImageView').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            

                            <button type="submit" class="btn btn-primary mt-2">Submit</button>




                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection

@section('javascriptSection')

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
    
@endsection
