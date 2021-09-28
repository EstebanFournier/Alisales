@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{$customer->name}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <x-form.form route="{{route('customer.update',['customer'=>$customer])}}" method="PUT">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">{{$customer->name}}</h3>

                        <x-form.input label="Name" value="{{$customer->name}}"></x-form.input>
                        <x-form.input label="Address" value="{{$customer->address}}"></x-form.input>
                        <x-form.input label="Postal code" value="{{$customer->postalCode}}"></x-form.input>
                        <x-form.input label="City" value="{{$customer->city}}"></x-form.input>
                        <x-form.input label="Email" value="{{$customer->email}}"></x-form.input>
                        <x-form.input label="Website" value="{{$customer->url}}"></x-form.input>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <x-form.submit></x-form.submit>
                    </div>
                </div>
            </x-form.form>
            <!-- /.card -->
        </div>
    </div>
@stop
