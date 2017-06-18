@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tickets</div>

                <div class="panel-body">
                    @foreach ($tickets as $ticket)
                        <article>
                            <h2>{{ $ticket->title }}</h2>
                            <p>{{ $ticket->content }}</p>
                        </article>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
