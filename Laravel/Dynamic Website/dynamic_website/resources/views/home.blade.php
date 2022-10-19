@extends('layouts.dashboard')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">
           <h5 class="card-title">Dashboard</h5>
           <div class="welComeDiv">
            <h1 class="fs-1 fst-italic">Welcome, {{Auth::user()->name}}</h1>
           </div>
        </div>
    </div>
    
</div>
@endsection
