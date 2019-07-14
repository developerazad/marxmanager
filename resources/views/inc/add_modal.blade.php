<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Bookmark</h4>
            </div>

            <form action="{{ url('store') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Bookmark Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Bookmark Name" >
                    </div>
                    <div class="form-group">
                        <label for="url">Bookmark URL</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="Bookmark URL" >
                    </div>
                    <div class="form-group">
                        <label for="description">Bookmark Description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Bookmark Description">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>