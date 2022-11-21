@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))
                    <h4 class="alert alert-success">{{ session('message') }}</h4>
                @endif


                <div class="card">
                    <div class="card-header">
                        <h4>students list
                            <a href="" class="btn btn-primary float-end">Students Lists </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">FullName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $row)
                                    <tr>
                                        <td colspan="1">{{ $row->id }}</td>
                                        <td colspan="1">{{ $row->fullname }}</td>
                                        <td colspan="1">{{ $row->email }}</td>

                                        <td>
                                            <a href="{{ url('students/'.$row->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ url('students/create') }}" class="btn btn-info btn-sm">Add/view</a>
                                            <form action="{{ url('students/'.$row->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
