@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/staff-member-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Staff</h5>
                    <p class="card-text">Add staff members</p>
                    <a href="/staff/create" class="btn btn-primary">Add Staff member</a> <hr>
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
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>Job</th>
                    <th>Address</th>
                    <th>contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($staff as $staffs )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $staffs->username }}</td>
                <td>{{$staffs->fullname }}</td>
                <td>{{ $staffs->job }}</td>
                <td>{{ $staffs->address }}</td>
                <td>{{ $staffs->contact }}</td>
                <td>{{ $staffs->email }}</td>
                <td>
                    <a href="/staff/{{ $staffs->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/staff/{{ $staffs->id }}" method="post">
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
