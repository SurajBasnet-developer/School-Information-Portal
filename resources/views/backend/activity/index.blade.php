@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/activites-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Activity</h5>
                    <p class="card-text">Add Activities</p>
                    <a href="/activity/create" class="btn btn-primary">Add Activities</a> <hr>
                </div>
            </div>

        </div>

    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table responsive">
                <tr>
                    <th>SN</th>
                    <th>Activity</th>
                    <th>Description</th>
                    <th>Student Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($work as $task )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $task->activity }}</td>
                <td>{!!$task->description !!}</td>
                <td>{{ $task->studentname }}</td>
                <td>
                    <a href="/activity/{{ $task->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/activity/{{ $task->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger">Delete</button>
                    </form>

                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
