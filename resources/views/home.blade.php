@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>

                    <div class="card-body">

                        {{--@can('isAdmin')--}}
                            {{--<div class="btn btn-success btn-lg">--}}
                                {{--You have Admin Access--}}
                            {{--</div>--}}
                        {{--@elsecan('isCustomer')--}}

                            {{--<div class="btn btn-primary btn-lg">--}}
                                {{--You have Customer Access--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<div class="btn btn-info btn-lg">--}}
                                {{--You have Tourist Access--}}
                            {{--</div>--}}
                        {{--@endcan--}}
                        {{--@can('isAdmin')--}}
                            {{--@include('home_dashboard.admin')--}}
                        {{--@endcan--}}
                        {{--@can('isCustomer')--}}
                            {{--@include('home_dashboard.customer')--}}
                        {{--@endcan--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection