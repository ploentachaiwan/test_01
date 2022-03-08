@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><strong> My Porfile </strong></h2> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Name :</strong> {{ Auth::user()->name }}</p>
                    <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                    <p><strong>Phone :</strong> {{ Auth::user()->phone }}</p>
                    <p><strong>Address :</strong> {{ Auth::user()->address }}</p>
                    <a href="{{route('productform')}}" class="btn btn-primary">Product Management</a>
                    <a href="{{url('http://127.0.0.1:8000/')}}" class="btn btn-success">Home</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
