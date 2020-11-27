@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row no-gutters">
                    <div class="col md-10">
                        <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">Event List</h1>
                    </div>
                    <div class="col md-2">
                        <button type="button" class="btn btn-dark btn-circle float-right" title="Create New Event" data-toggle="modal"
                                data-target="#addmodal"><i class="fas fa-plus-circle"></i></button>
                        @include('admin.event.crud.create')
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @if(count($events) > 0)
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Event Title</th>
                                <th>Event Description</th>
                                <th>Created By</th>
                                <th>Total Attendant</th>
                                <th>Event Date</th>
                                <th>Event Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr class="text-center">
                                    <td>{{$event->id}}</td>
                                    <td><a href="{{ route('admin.events.show', $event->id) }}">{{$event->title}}</a></td>
                                    <td><a type="button" class="text-primary" data-toggle="modal"
                                           data-target="#showModal-{{$event->id}}">Read</a></td>
                                    @include('admin.event.show_description')
                                    <td>{{ucwords($event->creator->name)}}</td>
                                    <td>{{$event->noa}}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d F Y') }}</td>
                                    <td>@if($event->status == 0) <p class="text-danger">Closed</p> @else <p class="text-success">Open</p> @endif </td>
                                    <td width="150px">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                @if($event->status == 1)
                                                    <form action="{{route('admin.event.close')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input name="id" type="hidden" value="{{$event->id}}">
                                                        <button class="btn btn-warning btn-circle" title="Close Event" type="submit"><i class="fas fa-door-closed"></i></button>
                                                    </form>
                                                @else
                                                    <form action="{{route('admin.event.open')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input name="id" type="hidden" value="{{$event->id}}">
                                                        <button class="btn btn-success btn-circle" title="Open Event" type="submit"><i class="fas fa-door-open"></i></button>
                                                    </form>
                                                @endif
                                            </div>
                                            <div class="col-md-6">
                                                <form action="{{route('admin.events.destroy', $event->id)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger btn-circle" title="Delete Event" type="submit"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
