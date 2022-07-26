@extends('backend.app')
@section('content')
<div class="container" style="padding-top: 2%;  opacity: 0.9;">
    <div class="row row h-100 justify-content-center align-items-center">
        <div class="card shadow">
            <div class="card-body " style="width: 18rem; height: 20rem; margin: 2%;">
                <img src="/images/fees-icon.png" alt="student icon" class="card-img-top mx-auto d-block" style="width:50%; height:50%;">
                <div class="col-md-12 text-center">
                    <h5 class="text-center">Fees</h5>
                    <p class="card-text">Confirm that parent paid the fees to the school for current year </p>
                    <a href="/fee/create" class="btn btn-primary">Add Fees</a> <hr>
                </div>
            </div>

        </div>

    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table responsive">
                <tr>
                    <th>SN</th>
                    <th>Student ID</th>
                    <th>Fees Amount</th>
                    <th>Action</th>
                </tr>
                @foreach ($fee as $rs )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{$rs->school_id }}</td>
                <td>{{ $rs->amount }}</td>
                <td>

                    <form action="/fee/{{ $rs->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger">Delete</button>
                    </form>

                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
