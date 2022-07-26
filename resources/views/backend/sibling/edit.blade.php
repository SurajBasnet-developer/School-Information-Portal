@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/sibling/{{ $peers->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $peers->name }}" placeholder="Enter Sibiling Full Name">
                                <span class="help-block" style="color:red"></span>
                              </div>

                              <div class="form-group ">
                                <label>Student Name</label>
                                <input type="text" name="studentname" class="form-control" value="{{ $peers->studentname }}" placeholder="Enter Student Name" required>
                                <span class="help-block" style="color:red"></span>
                              </div>


                              <div class="form-group ">
                                <label>Date Of Birth</label>
                                <input type="text" name="dob" class="form-control" value="{{ $peers->dob }}" placeholder="Enter Date Of Birth">
                                <span class="help-block" style="color:red"></span>
                              </div>




                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/sibling" class="btn btn-primary">Back</a>
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
