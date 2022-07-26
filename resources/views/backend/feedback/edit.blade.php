@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/feedback/{{ $feedback->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{ $feedback->subject }}" aria-describedby="classname" placeholder="Enter student activity" required>
                                <span class="help-block" style="color:red"></span>

                                <div class="form-group ">
                                    <label>Teacher Name</label>
                                    <input type="text" name="teachername" class="form-control" value="{{ $feedback->teachername }}" aria-describedby="classname" placeholder="Enter Teacher Name" required>
                                    <span class="help-block" style="color:red"></span>



                            </div>

                            <div class="form-group">
                                <label for="Feedback">Feedback</label>
                                <textarea id="description" class="form-control" name="feedback" placeholder="Enter Teacher name" rows="3">{{ $feedback->feedback }}</textarea>
                            </div>

                            <div class="form-group ">
                                <label>Student Name</label>
                                <input type="text" name="studentname" id="description" class="form-control" value="{{ $feedback->studentname }}" placeholder="Student name" required>
                                <span class="help-block" style="color:red"></span>
                            </div>





                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/feedback" class="btn btn-primary">Back</a>
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
