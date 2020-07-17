@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Notes</h2>
                    @foreach($notes as $note)
                        <a href="{{ url('notes/view', $note['slug']) }}">{{ $note['title'] }}</a><br>
                    @endforeach
                    <hr>
                    <a href="{{ url('notes/create') }}" class="btn btn-success">Create new note</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
