@extends('layout')
@section('content')

 <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
            <h2 class="fw-bold text-center">Update Employee Data</h2>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="/employee/{{ $employee->id }}" method="POST">
                        
                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ $employee->full_name }}" placeholder="Enter employee's fullname">
                            
                                @error('full_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $employee->email }}" placeholder="Enter employee's email">
                            
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Phone Number</label>
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $employee->phone_number }}" placeholder="Enter employee's phone number">
                            
                                @error('phone_number')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Address</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $employee->address }}" placeholder="Enter employee's address">
                                    
                                        @error('address')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Position</label>
                                        <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ $employee->position }}" placeholder="Enter employee's position">
                                    
                                        @error('position')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Hire Date</label>
                                        <input type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date" value="{{ $employee->hire_date }}" placeholder="Enter employee's hire date">
                                    
                                        @error('hire_date')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold">Salary Amount</label>
                                            <input type="number" class="form-control @error('salary_amount') is-invalid @enderror" name="salary_amount" value="{{ $employee->salary_amount }}" placeholder="Enter employee's salary amount">
                                        
                                            @error('salary_amount')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>

                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection