@extends('backend.app')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-10 col-sm-6 col-md-5 mx-auto">

            <div class="box">
                <div class="card bg-light mb-3">

                    <div class="card-body">

                        <form action="/medication/{{ $ill->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                                <label>Illness</label>
                                <input type="text" name="illness" class="form-control" value="{{ $ill->illness }}" placeholder="Enter Illness Name">
                                <span class="help-block" style="color:red"></span>
                              </div>

                             <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" class="form-control" name="description" rows="10" placeholder="Description">{{ $ill->description }}</textarea>
                             </div>

                              <div class="form-group ">
                                <label>Time Of Medication </label>
                                <input type="time" name="time" class="form-control" value="{{ $ill->time }}" placeholder="Enter a time for the medication">
                                <span class="help-block" style="color:red"></span>
                              </div>


                              <div class="form-group ">
                                <label>Student Name</label>
                                <input type="text" name="studentname" class="form-control" value="{{ $ill->studentname }}" placeholder="Enter Student Name" required>
                                <span class="help-block" style="color:red"></span>
                              </div>





                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="/medication" class="btn btn-primary">Back</a>
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
