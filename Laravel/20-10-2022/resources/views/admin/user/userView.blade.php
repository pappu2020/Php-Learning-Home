@extends('layouts.userDashboard')

<style>
    .Usertable {
        height: 600px;
        overflow: scroll;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('userViewPage') }}">Users</a></li>
                <li class="breadcrumb-item"><a href="{{ route('userViewPage') }}">Users List</a></li>

            </ol>
        </div>
        <div class="row">
            <div class="Usertable col-lg-12 m-auto">
                <h1 class="fw-bold fst-italic">User List</h1>

                <table class="table table-striped table-hover" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>

                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($userData as $key => $user)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if (Auth::user()->image == null)
                                        <img width="50px" height="50px"
                                            src="{{ Avatar::create($user->name)->toBase64() }}" />
                                    @else
                                        <img src="images/profile/17.jpg" width="20" alt="" />
                                    @endif
                                </td>

                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td><a href="{{ route('userDeletePage', $user->id) }}" class="btn btn-danger"><span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg></span></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
