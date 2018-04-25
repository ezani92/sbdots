@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All User List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="games-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Fullname</th>
			                            <th>Email</th>
			                            <th>Phone</th>
			                            <th>Role</th>
			                            <th>Group</th>
			                            <th>Referred By</th>
			                            <th>Is Verified?</th>
			                            <th>Registered At</th>
			                            <th>Action</th>
			                        </tr>
			                    </thead>
			                </table>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
<script>
    $(function() {
        $('#games-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'users/data',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'role', name: 'role' },
                { data: 'group_id', name: 'group_id' },
                { data: 'referred_by', name: 'referred_by' },
                { data: 'phone_verification', name: 'phone_verification' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
</body></html>