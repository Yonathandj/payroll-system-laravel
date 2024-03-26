@extends('layout')
@section('content')

 <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="fw-bold">Payroll Management System</h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <h3 class="fw-bolder text-center">Employee list</h3>
                            <a href="/employee" class="btn btn-primary btn-sm align-self-start px-4 py-2 fw-bold" title="Add New Employee">Add New Employee</a>
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Position</th>
                                        <th>Hire Date</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $employee->full_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone_number }}</td>
                                        <td>{{ $employee->address }}</td>
                                        <td>{{ $employee->position }}</td>
                                        <td>{{ $employee->hire_date }}</td>
                                        <td>
                                            <div class="h-10 d-flex gap-4">
                                                <a href="/employee/{{ $employee->id }}" class="text-decoration-none text-white d-block btn px-2 py-4 btn-primary">Update</a>

                                                <form action="/employee/{{ $employee->id }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input class="btn btn-danger" type="submit" value="Delete" />
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger text-center">
                                        <p>Employee(s) data is not yet available.</p>
                                    </div>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection