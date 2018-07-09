@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Backup</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <form method="post" action="{{ url('admin/backup') }}">
			                	@csrf
					        	<div class="row">
					        		<div class="col-md-6">
					        			<div class="form-group">
											<label>From</label>
											<input data-toggle="datepicker" type="text" name="date_from" class="form-control" value="{{ old('date_from') }}" autocomplete="off" required>
										</div>
					        		</div>
					        		<div class="col-md-6">
					        			<div class="form-group">
											<label>To</label>
											<input data-toggle="datepicker" type="text" name="date_to" value="{{ old('date_to') }}" class="form-control" autocomplete="off" required>
										</div>
					        		</div>
					        		<div class="col-md-12">
					        			<div class="form-group">
											<label>Admin Password</label>
											<input type="password" name="password" class="form-control" autocomplete="off" required>
										</div>
					        		</div>
					        		<div class="col-md-12">
					        			<div class="form-group">
											<label>&nbsp;</label>
											<input type="checkbox" name="agree" required> I aware data might be lost forever if i mistaken reset the database
										</div>
					        		</div>
					        		<div class="col-md-12">
					        			<div class="form-group">
											<input type="submit" name="act" class="btn btn-info btn-block" value="Download">
										</div>
					        		</div>

					        		<div class="col-md-12">
					        			<div class="form-group">
											<input type="submit" name="act" class="btn btn-danger btn-block" value="Reset">
										</div>
					        		</div>
					        	</div>
					        	</form>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	dateFormat: 'dd-mm-yy'
	});
</script>
</body></html>