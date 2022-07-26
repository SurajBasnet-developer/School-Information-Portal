@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/student-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Students</h5>
                    <p class="card-text">Add students to your school</p>
                    <a href="/student/create" class="btn btn-primary">Add Student</a> <hr>
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
                    <th>School ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                @foreach ($student as $child )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $child->school_id }}</td>
                <td>{{ $child->username }}</td>
                <td>{{ $child->name }}</td>
                <td>{{ $child->grade }}</td>
                <td>{{ $child->date_of_birth }}</td>
                <td>{{ $child->address }}</td>
                <td>
                    <a href="/student/{{ $child->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/student/{{ $child->id }}" method="post">
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
