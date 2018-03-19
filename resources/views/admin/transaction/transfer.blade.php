@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Transfer Transaction List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="transfer-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction ID</th>
			                            <th>Name</th>
			                            <th>Transaction Type</th>
			                            <th>Status</th>
			                            <th>Date Created</th>
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
        $('#transfer-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'transfer-data',
            columns: [
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'user_id', name: 'user_id' },
                { data: 'transaction_type', name: 'transaction_type' },
                { data: 'status', name: 'status' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
</body></html>