@extends('app')

@section('title', 'Welcome')

@section('content')
    <h1 class="display-1">Welcome to DB-project</h1>
    <h1 class="display-4 text-muted">A <i>work for tasks</i> place</h5>

    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <button type="button" class="btn btn-primary">Get a task</button>
        <button type="button" class="btn btn-primary">Create a campaign</button>
    </div>

    @isset($campaigns)
        <div class="row campaigns">
            @foreach ($campaigns as $campaign)
                <div class="card-container col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $campaign->title }}</h5>
                            <p class="card-text">{{ $campaign->description }}</p>
                            <a href="#" class="btn btn-outline-primary">See more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset
@endsection