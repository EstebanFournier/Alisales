@extends('adminlte::page')

@section('title', 'Alisales')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('New order')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{route('customer.orderStore', ['customer'=>$customer])}}">
            @csrf
            @method("POST")
            <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="form-group">
                            <label for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="date">{{__('Date')}}</label>
                            <input type="text" class="form-control" id="date" name="date" >
                        </div>
                        <div class="form-group">
                            <label for="amount">{{__('Amount')}}</label>
                            <input type="text" class="form-control" id="amount" name="amount" >
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
