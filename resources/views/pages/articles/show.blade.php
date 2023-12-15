@extends('content')

@section('content')

<div class="card">
    <div class="car-body">

        
            <h1>
                {{$article->titre}}
            </h1>
    </div>
</div>
    
@endsection
@include('partials._export')