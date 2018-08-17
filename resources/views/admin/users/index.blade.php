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
			                <div class="row">
	                            <div class="col-xs-8 form-inline" style="position: absolute; z-index: 2;">
	                                <div class="input-daterange input-group" id="datepicker">
	                                    <span class="input-group-addon">User Role</span>
	                                    <select id="status" class="form-control input-sm" style="border-radius: 0;">
	                                    	<option value="">ALL</option>
	                                    	<option value="User">User</option>
	                                    	<option value="Staff">Staff</option>
	                                    	<option value="Affiliate">Affiliate</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
			                <table id="games-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                        	<th>Registered At</th>
			                            <th>Fullname</th>
			                            <th>Email</th>
			                            <th>Phone</th>
			                            <th>Role</th>
			                            {{-- <th>Win / Lose</th> --}}
			                            <th>Group</th>
			                            <th>Referred By</th>
			                            <th>Is Verified?</th>
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
        	"order": [[ 0, "desc" ]],
            processing: true,
            serverSide: true,
            ajax: 'users/data',
            columns: [
            	{ data: 'created_at', name: 'created_at' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone', name: 'phone' },
                { data: 'role', name: 'role' },
                // { data: 'win_lose', name: 'win_lose',searchable: false },
                { data: 'group_id', name: 'group_id' },
                { data: 'referred_by', name: 'referred_by',searchable: false },
                { data: 'phone_verification', name: 'phone_verification' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });

    $("#status").on('change', function(){
		$('#games-table').DataTable().search(this.value).draw();
	});
</script>
</body></html>