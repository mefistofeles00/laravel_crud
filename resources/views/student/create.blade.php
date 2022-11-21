@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>students list
                        <a href="{{ url ('students') }}" class="btn btn-primary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('students') }}" method="post">
                        @csrf
                        <h4>Students</h4>
                        <div class="mb-3">
                            <label>Full name</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>


                        <h4>Students Details</h4>
                        <div class="mb-3">
                            <label>Alternative Phone Number</label>
                            <input type="text" name="alter_phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>course</label>
                            <input type="text" name="course" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Roll No</label>
                            <input type="text" name="roll_no" class="form-control">
                        </div>
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
