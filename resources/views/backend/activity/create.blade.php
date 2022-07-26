@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/activity" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Activity</label>
                                <input type="text" name="activity" class="form-control"  aria-describedby="classname" placeholder="Enter student activity" required>
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" placeholder="Enter student activity description" rows="3"></textarea>
                            </div>

                            </div>
                            <div class="form-group ">
                                <label>Student Name</label>
                                <input type="text" name="studentname" id="description" class="form-control" value="" placeholder="student name" required>
                                <span class="help-block" style="color:red"></span>
                            </div>




                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/activity" class="btn btn-primary">Back</a>
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
