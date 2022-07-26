@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/teacher-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Teacher</h5>
                    <p class="card-text">Add Teacher to your school</p>
                    <a href="/teacher/create" class="btn btn-primary">Add Teacher</a> <hr>
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
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Subject</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($teacher as $guru )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $guru->username }}</td>
                <td>{{ $guru->fullname }}</td>
                <td>{{ $guru->subject }}</td>
                <td>{{ $guru->address }}</td>
                <td>{{ $guru->contact }}</td>
                <td>{{ $guru->email }}</td>
                <td>
                    <a href="/teacher/{{ $guru->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/teacher/{{ $guru->id }}" method="post">
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
