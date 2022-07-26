@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/staff" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" value="" aria-describedby="Username" placeholder="Enter Student Username">
                                <span class="help-block" style="color:red"></span>

                            </div>


                            <div class="form-group ">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" value="" placeholder="Enter Staff Member Full Name">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Job</label>
                                <input type="text" name="job" class="form-control" value="" placeholder="Enter Staff Member Job">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="" placeholder="Enter Staff member Address">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Phone Number</label>
                                <input type="text" name="contact" class="form-control" value="" placeholder="Enter Staff Member Phone Number">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="" placeholder="Enter Staff Member Email">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/staff" class="btn btn-primary">Back</a>
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
