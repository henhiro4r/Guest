<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                @if(count($guests) > 0)
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Guest Name</th>
                            <th>Guest Email</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($guests as $guest)
                            <tr class="text-center">
                                <td>{{$guest->id}}</td>
                                <td>{{$guest->guest->name}}</a></td>
                                <td>{{$guest->guest->email}}</td>
                                <td>@if($guest->is_approved == 0) <p class="text-warning">Pending</p>
                                    @elseif($guest->is_approved == 1) <p class="text-success">Approved</p>
                                    @else <p class="text-danger">Rejected</p> @endif </td>
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
