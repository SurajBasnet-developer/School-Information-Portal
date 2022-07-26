@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/timetable/{{ $list->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Grade </label>
                                <input type="text" name="grade" class="form-control" value="{{ $list->grade }}" placeholder="Enter Grade" required>
                              </div>

                            <div class="form-group">
                                <label>Subject 1</label>
                                <input type="text" name="subjectone" class="form-control" value="{{ $list->subjectone }}" placeholder="Enter Subject 1">
                              </div>

                              <div class="form-group">
                                <label>Subject 2</label>
                                <input type="text" name="subjecttwo" class="form-control" value="{{ $list->subjecttwo }}" placeholder="Enter Subject 2">
                              </div>

                              <div class="form-group">
                                <label>Subject 3</label>
                                <input type="text" name="subjectthree" class="form-control" value="{{ $list->subjectthree }}" placeholder="Enter Subject 3">
                              </div>

                              <div class="form-group">
                                <label>Subject 4</label>
                                <input type="text" name="subjectfour" class="form-control" value="{{ $list->subjectfour }}" placeholder="Enter Subject 4">
                              </div>

                              <div class="form-group">
                                <label>Subject 5</label>
                                <input type="text" name="subjectfive" class="form-control" value="{{ $list->subjectfive }}" placeholder="Enter Subject 5">
                              </div>

                              <div class="form-group">
                                <label>Subject 6</label>
                                <input type="text" name="subjectsix" class="form-control" value="{{ $list->subjectsix }}" placeholder="Enter Subject 6">
                              </div>

                              <div class="form-group">
                                <label>Subject 7</label>
                                <input type="text" name="subjectseven" class="form-control" value="{{ $list->subjectseven }}" placeholder="Enter Subject 7">
                              </div>

                              <div class="form-group">
                                <label>Subject 8</label>
                                <input type="text" name="subjecteight" class="form-control" value="{{ $list->subjecteight }}" placeholder="Enter Subject 8">
                              </div>




                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/timetable" class="btn btn-primary">Back</a>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

@endsection
