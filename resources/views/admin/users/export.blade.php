@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
						<h3>Export User</h3>
						<br />
			            <div class="row">
			            	<div class="col-md-12">
			            		<form action="{{ url('admin/users/export') }}" method="post">
			            			@csrf
			            			<div class="form-group">
			            				<label><strong>Type Of User</strong></label>
			            				<select name="filter" class="form-control">
			            					<option value="">All</option>
			            					<option value="1">With Deposit</option>
			            					<option value="2">Non Deposit</option>
			            				</select>
			            			</div>
			            			<button type="submit" class="btn btn-xl btn-info btn-block">Export In Excel</button>
			            		</form>
			            	</div>
			            </div>
			            </div>
			        </div>
				</div>
        	</div>

            
                    
        </div>
    </div>
@include('admin.footer')
</body></html>