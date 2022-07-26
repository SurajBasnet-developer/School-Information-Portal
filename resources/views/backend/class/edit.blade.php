@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/class/{{ $grade->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>Name of Class</label>
                                <input type="text" name="classname" class="form-control" value="{{ $grade->classname }}" aria-describedby="classname" placeholder="Enter Your class name" required>
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="{{ $grade->subject }}" aria-describedby="Username" placeholder="Enter Subject" required>
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Time of Class</label>
                                <input type="time" name="time" class="form-control" value="{{ $grade->time }}" placeholder="Time of Class" required>
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $grade->email }}" placeholder="Enter email address" required>
                                <span class="help-block" style="color:red"></span>
                            </div>







                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/class" class="btn btn-primary">Back</a>
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
