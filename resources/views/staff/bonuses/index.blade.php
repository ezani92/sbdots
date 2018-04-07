@include('staff.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Bonus List's</h3>
			        <div class="tab-container">
				        <ul role="tablist" class="nav nav-tabs">
				            <li class="nav-item active"><a href="#list" data-toggle="tab" role="tab" class="nav-link active">Active list</a></li>
				            <li class="nav-item"><a href="#trashed" data-toggle="tab" role="tab" class="nav-link">Deactived List</a></li>
				        </ul>
				        <div class="tab-content">
				            <div id="list" role="tabpanel" class="tab-pane active">
				                <table id="bonus-table-active" class="table table-striped table-hover table-fw-widget" style="width: 100%">
				                    <thead>
				                        <tr>
				                            <th>Bonus Code</th>
				                            <th>Name</th>
				                            <th>Description</th>
				                            <th>Created At</th>
				                            <th>Action</th>
				                        </tr>
				                    </thead>
				                </table>
				            </div>
				            <div id="trashed" role="tabpanel" class="tab-pane">
				                <table id="bonus-table-deactive" class="table table-striped table-hover table-fw-widget" style="width: 100%">
				                    <thead>
				                        <tr>
				                            <th>Bonus Code</th>
				                            <th>Name</th>
				                            <th>Description</th>
				                            <th>Deleted At</th>
				                            <th>Action</th>
				                        </tr>
				                    </thead>
				                </table>
				            </div>
				        </div>
				    </div>
			    </div>
			</div>
		</div>
    </div>
@include('staff.footer')
<script>
    $(function() {
        $('#bonus-table-active').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'bonuses/data-active',
            columns: [
                { data: 'bonus_code', name: 'bonus_code' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
<script>
    $(function() {
        $('#bonus-table-deactive').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'bonuses/data-deactive',
            columns: [
                { data: 'bonus_code', name: 'bonus_code' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'deleted_at', name: 'deleted_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
</body></html>