@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Content Row -->
        @include('inc.alert')
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h1 class="h4 mb-0 font-weight-bold text-primary">Add New User</h1>
            </div>
            <div class="card body">
                <div class="col-md-12" style="margin-top: 1em;">
                    <form action="{{ route('admin.users.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="Full Name..">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required placeholder="Email..">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required placeholder="Password..">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required placeholder="Retype Password..">
                        </div>
                        <div class="form-group">
                            <label>User Role</label>
                            <select name="role_id" class="custom-select select2" required>
                                <option value="" selected="" disabled>Select user role</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}" title="{{$role->description}}">{{$role->name . ": ". $role->description}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Create New User</button>
                            <button class="btn btn-danger" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
