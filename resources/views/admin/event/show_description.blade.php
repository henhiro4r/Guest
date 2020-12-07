<!-- The Modal -->
<div class="modal fade" id="showModal-{{$event->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Event <b>{{$event->title}}</b> Detail's</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body" style="text-align: left;">
                <div class="form-group">
                    <label><b>Title</b></label>
                    <p>{{$event->title}}</p>
                </div>
                <div class="form-group">
                    <label><b>Description</b></label>
                    <p>{{$event->description}}</p>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
