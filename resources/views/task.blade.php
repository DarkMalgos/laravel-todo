@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <form action="/task" method="post">
                    @csrf
                    <input type="text" name="name">
                    <button type="submit">add</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Todos list</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <form method="POST" action="{{ route('delete', [$task->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit">Delete</button>
                            </form>
                            <h6 class="my-0">{{ $task->name }}</h6>
                            <span class="text-muted">il y a</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-4">
                {{ $tasks->render() }}
            </div>
        </div>
    </div>

@endsection