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
                        <div>
                            <a href="/employee" class="btn btn-primary btn-sm" title="Add New Employee">
                            Add New Employee
                            </a>
                        </div>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <h3 class="fw-bolder text-center">Employee list</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
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
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->full_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone_number }}</td>
                                        <td>{{ $employee->address }}</td>
                                        <td>{{ $employee->position }}</td>
                                        <td>{{ $employee->hire_date }}</td>
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