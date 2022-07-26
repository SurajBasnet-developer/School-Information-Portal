@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/class-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Class</h5>
                    <p class="card-text">Add Classes</p>
                    <a href="/class/create" class="btn btn-primary">Add Class</a> <hr>
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
                    <th>Name of Class</th>
                    <th>Subject</th>
                    <th>Time of Class</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($grade as $clss )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $clss->classname }}</td>
                <td>{{ $clss->subject }}</td>
                <td>{{ $clss->time }}</td>
                <td>{{ $clss->email }}</td>
                <td>
                    <a href="/class/{{ $clss->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/class/{{ $clss->id }}" method="post">
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
