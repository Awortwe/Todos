@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Task') }}
                    <span style="float: right">
                        <a href="{{ route('home') }}" class="btn btn-secondary btn-sm">Go Back</a>
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form action="{{ route('tasks.update', $task) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control"
                        value="{{ $task->description }}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success btn-sm">Update</button>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
