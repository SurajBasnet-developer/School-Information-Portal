@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/emergency-people-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Emergency People</h5>
                    <p class="card-text">Add People</p>
                    <a href="/emergency/create" class="btn btn-primary">Add Emergency People</a> <hr>
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
                    <th>Full Name</th>
                    <th>Relation</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($peoples as $people )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $people->fullname }}</td>
                <td>{{$people->relation }}</td>
                <td>{{ $people->address }}</td>
                <td>{{ $people->contact }}</td>
                <td>{{ $people->studentname }}</td>
                <td>{{ $people->email }}</td>
                <td>
                    <a href="/emergency/{{ $people->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/emergency/{{ $people->id }}" method="post">
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
