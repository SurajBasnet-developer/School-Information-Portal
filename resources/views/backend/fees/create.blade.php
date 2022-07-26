@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/fee" method="post">
                            @csrf
                           <div class="form-group">
                            <label for="studentname">Student Name</label>
                            <select id="studentname" class="form-control" name="school_id">
                                @foreach ($student as $child)
                                    <option value="{{ $child->id }}">{{ $child->name }}</option>
                                @endforeach
                            </select>
                           </div>


                              <div class="form-group ">
                                <label>Fees amount</label>
                                <input type="text" name="amount" class="form-control" value="0" placeholder="Enter Amount">
                                <span class="help-block" style="color:red"></span>
                              </div>





                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/fee" class="btn btn-primary">Back</a>
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
