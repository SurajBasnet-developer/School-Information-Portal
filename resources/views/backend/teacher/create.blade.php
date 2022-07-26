@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/teacher" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control"  aria-describedby="username" placeholder="Enter username">
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="" aria-describedby="Full Name" placeholder="Enter Full Name">
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" value="" placeholder="Enter subject">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="" placeholder="Enter Address">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Phone Number</label>
                                <input type="text" name="contact" class="form-control" value="" placeholder="Enter Phone number">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="" placeholder="Enter Email">
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
