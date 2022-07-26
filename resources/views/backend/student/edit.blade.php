@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/student/{{ $student->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>School ID</label>
                                <input type="text" name="school_id" class="form-control"  aria-describedby="school_id" placeholder="Enter School ID" value="{{ $student->school_id }}">
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"  aria-describedby="Username" placeholder="Enter Student Username" value="{{ $student->username }}">
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control"  placeholder="Enter Student Full Name" value="{{ $student->name }}">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Grade</label>
                                <input type="text" name="grade" class="form-control"  placeholder="Enter Student Grade" value="{{ $student->grade }}">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Date Of Birth</label>
                                <input type="text" name="date_of_birth" class="form-control"  placeholder="Enter Student Date Of Birth" value="{{ $student->date_of_birth }}">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"  placeholder="Enter School Address" value="{{ $student->address }}">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/student" class="btn btn-primary">Back</a>
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
