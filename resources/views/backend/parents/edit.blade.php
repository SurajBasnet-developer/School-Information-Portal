@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/parents/{{ $guardian->id }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group ">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"  aria-describedby="school_id" placeholder="Enter Username" value="{{ $guardian->username }}">
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="{{ $guardian->name }}" aria-describedby="Username" placeholder="Enter Student name">
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{ $guardian->email }}" placeholder="Enter Your Email">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $guardian->address }}" placeholder="Enter Address">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" value="{{ $guardian->contact }}" placeholder="Enter Mobile number">
                                <span class="help-block" style="color:red"></span>
                            </div>





                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/parents" class="btn btn-primary">Back</a>
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
