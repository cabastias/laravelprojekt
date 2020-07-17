@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <h1>{{ $note['title'] }}</h1><hr>
                   <p>{{ $note['body'] }}</p>
                   <a href="{{ URL::previous() }}">Gå tillbaka</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
