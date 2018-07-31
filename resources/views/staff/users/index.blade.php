@include('staff.header')
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
			                            <th>Win / Lose</th>
			                            <th>Group</th>
			                            <th>Is Verified?</th>
			                            <th>Last Login</th>
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
@include('staff.footer')
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
                { data: 'win_lose', name: 'win_lose',searchable: false },
                { data: 'group_id', name: 'group_id' },
                { data: 'phone_verification', name: 'phone_verification' },
                { data: 'last_login', name: 'last_login' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
</body></html>