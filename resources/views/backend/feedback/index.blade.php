@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/child-feedback-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Child Feedback</h5>
                    <p class="card-text">Add Feedback</p>
                    <a href="/feedback/create" class="btn btn-primary">Add Child Feedback</a> <hr>
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
                    <th>Subject</th>
                    <th>Teacher Name</th>
                    <th>Feedback </th>
                    <th>Studentname </th>
                    <th>Action</th>
                </tr>
                @foreach ($feedback as $feed )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $feed->subject }}</td>
                <td>{{$feed->teachername }}</td>
                <td>{!! $feed->feedback !!}</td>
                <td>{{ $feed->studentname }}</td>
                <td>
                    <a href="/feedback/{{ $feed->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/feedback/{{ $feed->id }}" method="post">
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
