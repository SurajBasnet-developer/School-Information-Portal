@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/parent-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Parents</h5>
                    <p class="card-text">Add parents to your school</p>
                    <a href="/parents/create" class="btn btn-primary">Add Parent</a> <hr>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
                @foreach ($guardian as $family )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $family->username }}</td>
                <td>{{ $family->name }}</td>
                <td>{{ $family->email }}</td>
                <td>{{ $family->address }}</td>
                <td>{{ $family->contact }}</td>
                <td>
                    <a href="/parents/{{ $family->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/parents/{{ $family->id }}" method="post">
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
