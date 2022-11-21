@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Student
                        <a href="{{ url ('students') }}" class="btn btn-primary float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('students/'.$student->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <h4>Students</h4>
                        <div class="mb-3">
                            <label>Full name</label>
                            <input type="text" name="fullname" value="{{ $student->fullname }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ $student->email }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
                        </div>


                        <h4>Students Details</h4>
                        <div class="mb-3">
                            <label>Alternative Phone Number</label>
                            <input type="text" name="alter_phone" value="{{ $student->studentDetail->alter_phone }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>course</label>
                            <input type="text" name="course" value="{{ $student->studentDetail->course }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Roll No</label>
                            <input type="text" value="{{ $student->studentDetail->roll_no }}" name="roll_no" class="form-control">
                        </div>
                        <div class="mb-3">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
