@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <span style="float: right"><a href="" class="btn btn-secondary btn-sm">Create Task</a></span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($tasks))
                       <table class="table table-striped">
                            <tr>
                                <th>Tasks</th>
                                <th>Description</th>
                            </tr>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                </tr>
                            @endforeach
                       </table>
                    @else
                       <p>You don't have any tasks yet!!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
