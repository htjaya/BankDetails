@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}

            <div class="row">
                <div class="col-sm-4 col-5">
                    <h4 class="page-title">Bank Details</h4>
                </div>
                <div class="col-sm-8 col-7 text-right m-b-30">
                    <a href="/add_details" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Salary</a>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div >
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th >Bank Name</th>
                                    <th >Branch</th>
                                    <th >Branch code</th>
                                    <th >Account Number</th>
                                    <th ></th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bank_details as $bank)

                                <tr>
                                    <td>{{$bank->bank_name}}</td>
                                    <td>{{$bank->branch}}</td>
                                    <td>{{$bank->branch_code}}</td>
                                    <td>{{$bank->account_number}}</td>
                                    <td class="text-center"><a class="btn btn-dark" href="/bankEdit/{{$bank->id}}">Update</a></td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="/bankDelete/{{$bank->id}}">Delete</a></td>

                                </tr>

                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
