@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/teacher/{{ $teacher->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control" value="{{ $teacher->username }}" aria-describedby="username" placeholder="Enter username" required >
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="{{ $teacher->fullname }}" aria-describedby="Full Name" placeholder="Enter Full Name" required>
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{ $teacher->subject }}" placeholder="Enter subject" required>
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $teacher->address }}" placeholder="Enter Address" required>
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Phone Number</label>
                                <input type="text" name="contact" class="form-control" value="{{ $teacher->contact }}" placeholder="Enter Phone number" required>
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" placeholder="Enter Email" required>
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/teacher" class="btn btn-primary">Back</a>
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
