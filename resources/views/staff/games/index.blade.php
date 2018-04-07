@include('staff.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Game List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="games-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Game</th>
			                            <th>Category</th>
			                            <th>Logo</th>
			                            <th>Transaction Count</th>
			                            <th>Transaction Worth (RM)</th>
			                            <th>Date Created</th>
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
            ajax: 'games/data',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'category', name: 'category' },
                { data: 'logo', name: 'logo' },
                { data: 'name', name: 'name' },
                { data: 'name', name: 'name' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
    });
</script>
</body></html>