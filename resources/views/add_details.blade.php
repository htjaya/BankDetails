@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>Add Bank Details</h1><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Bank Name</label>
                                <input class="form-control" name="bank_name" type="text" value="{{old('bank_name')}}">
                            </div>

                            @error('bank_name')
                            <span class="text-danger" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Branch</label>
                                <input class="form-control" name="branch" type="text" value="{{old('branch')}}">
                            </div>

                            @error('branch')
                            <span class="text-danger" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Branch code</label>
                                <input class="form-control" name="branch_code" type="text" value="{{old('branch_code')}}">
                            </div>

                            @error('branch_code')
                            <span class="text-danger" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Account Number</label>
                                <input class="form-control" name="account_number" type="text" value="{{old('account_number')}}">
                            </div>

                            @error('account_number')
                            <span class="text-danger" >
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Add Details</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
