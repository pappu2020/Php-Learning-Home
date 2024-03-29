@extends('layouts.userHeader')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome,<span class="fst-italic text-primary"> {{Auth::user()->name }}</span></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
