@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/time-table-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Timetable</h5>
                    <p class="card-text">Add Subjects to your school</p>
                    <a href="/timetable/create" class="btn btn-primary">Add Timetable</a> <hr>
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
                    <th>Grade</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
                    <th>Subject 3</th>
                    <th>Subject 4</th>
                    <th>Subject 5</th>
                    <th>Subject 6</th>
                    <th>Subject 7</th>
                    <th>Subject 8</th>
                    <th>Action</th>
                </tr>
                @foreach ($list as $lists )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $lists->grade }}</td>
                <td>{{ $lists->subjectone }}</td>
                <td>{{ $lists->subjecttwo }}</td>
                <td>{{ $lists->subjectthree }}</td>
                <td>{{ $lists->subjectfour }}</td>
                <td>{{ $lists->subjectfive }}</td>
                <td>{{ $lists->subjectsix }}</td>
                <td>{{ $lists->subjectseven }}</td>
                <td>{{ $lists->subjecteight }}</td>

                <td>
                    <a href="/timetable/{{ $lists->id }}/edit" class="badge badge-info">Edit</a>
                    <form action="/timetable/{{ $lists->id }}" method="post">
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
