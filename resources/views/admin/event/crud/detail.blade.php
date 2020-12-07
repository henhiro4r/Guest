@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Event {{$event->title}}
                    Detail</h1>
            </div>
            <div class="card-body">
                <fieldset>
                    <legend><b>Event Information</b></legend>
                    @include('admin.event.crud.details.event_information')
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#editEvent-{{$event->id}}" @if($event->status == 1) disabled
                                    title="Can't edit while event is opened" @endif>Edit Event Detail
                            </button>
                            @include('admin.event.crud.edit')
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><b>Guest List</b></legend>
                    <div class="row">
                        @include('admin.event.crud.details.guest_list')
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
@endsection
