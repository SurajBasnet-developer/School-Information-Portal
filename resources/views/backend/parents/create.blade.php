@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/parents" method="post">
                            @csrf
                            <div class="form-group ">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control"  aria-describedby="school_id" placeholder="Enter Username">
                                <span class="help-block" style="color:red"></span>

                            <div class="form-group ">
                                <label>name</label>
                                <input type="text" name="name" class="form-control" value="" aria-describedby="Username" placeholder="Enter Parent name">
                                <span class="help-block" style="color:red"></span>

                            </div>
                            <div class="form-group ">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="" placeholder="Enter Your Email">
                                <span class="help-block" style="color:red"></span>
                            </div>



                            <div class="form-group ">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="" placeholder="Enter Address">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group ">
                                <label>Contact</label>
                                <input type="text" name="contact" class="form-control" value="" placeholder="Enter Mobile number">
                                <span class="help-block" style="color:red"></span>
                            </div>

                            <div class="form-group">
                                <label for="school_id">Student School ID</label>
                                <select id="school_id" class="form-control" name="school_id">
                                    @foreach ($student as $child)
                                        <option value="{{ $child->id }}">{{ $child->school_id }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
