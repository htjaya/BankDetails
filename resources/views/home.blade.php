@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
        </div>
    </div>
</div>
@endsection
