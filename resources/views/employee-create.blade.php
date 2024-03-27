@extends('layout')
@section('content')

 <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
            <h1 class="fw-bold text-center">Create Employee Data</h1>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="/employee" method="POST" autocomplete="off">
                        
                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" placeholder="Enter employee's full name">
                            
                                @error('full_name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter employee's email">
                            
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Phone Number</label>
                                <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Enter employee's phone number">
                            
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
                                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Enter employee's address">
                                    
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
                                        <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" placeholder="Enter employee's position">
                                    
                                        @error('position')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Hire Date</label>
                                        <input type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date" value="{{ old('hire_date') }}" placeholder="Enter employee's hire date">
                                    
                                        @error('hire_date')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Salary Amount (Rp.)</label>
                                        <input type="number" class="form-control @error('salary_amount') is-invalid @enderror" name="salary_amount" value="{{ old('salary_amount') }}" placeholder="Enter employee's salary amount">
                                    
                                        @error('salary_amount')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Health Insurance Tax (Rp.)</label>
                                        <input type="number" class="form-control @error('health_insurace_tax') is-invalid @enderror" name="health_insurace_tax" value="{{ old('health_insurace_tax') }}" placeholder="Enter employee's health insurance tax">
                                    
                                        @error('health_insurace_tax')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">State Income Tax (Rp.)</label>
                                        <input type="number" class="form-control @error('state_income_tax') is-invalid @enderror" name="state_income_tax" value="{{ old('state_income_tax') }}" placeholder="Enter employee's state income tax">
                                    
                                        @error('state_income_tax')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                                <button type="submit" class="btn btn-md btn-primary px-4 py-2">SAVE</button>

                            </div>

                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection