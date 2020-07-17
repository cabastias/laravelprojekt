@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notes</div>
                <p> you are now logged in</p>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>down below you can write your note <br>
                    <textarea name="Message" id="" cols="30" rows="10"></textarea><br>
                    <button>Add Note</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
