@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/emergency/{{ $peoples->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="{{ $peoples->fullname }}" placeholder="Enter Person Full Name">
                                <span class="help-block" style="color:red"></span>
                              </div>



                              <div class="form-group ">
                                <label>Relation</label>
                                <input type="text" name="relation" class="form-control" value="{{ $peoples->relation }}" placeholder="Enter Person Relation">
                                <span class="help-block" style="color:red"></span>
                              </div>


                              <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $peoples->address }}" placeholder="Enter Parent Address">
                                <span class="help-block" style="color:red"></span>
                              </div>

                              <div class="form-group ">
                                <label>Phone Number</label>
                                <input type="text" name="contact" class="form-control" value="{{ $peoples->contact }}" placeholder="Enter Parent Phone Number">
                                <span class="help-block" style="color:red"></span>
                              </div>

                              <div class="form-group ">
                                <label>Student Name</label>
                                <input type="text" name="studentname" class="form-control" value="{{ $peoples->studentname }}" placeholder="Enter Student Name" required>
                                <span class="help-block" style="color:red"></span>
                              </div>

                              <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $peoples->email }}" placeholder="Enter Parent Email">
                                <span class="help-block" style="color:red"></span>
                              </div>






                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/emergency" class="btn btn-primary">Back</a>
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
