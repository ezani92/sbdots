@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Create New User</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/users/')}}" enctype="multipart/form-data">
			                	@csrf
							    <div class="form-group">
							        <label>Full Name</label>
							        <input type="text" name="name" class="form-control"  required>
							    </div>
							    <div class="form-group">
							        <label>Email</label>
							        <input type="text" name="email" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Role</label>
							        {{ Form::select('role', ['1' => 'Administrator', '2' => 'Staff', '3' => 'Normal User','4' => 'Affiliate','5' => 'Master Affiliate'], 3, ['class' => 'form-control role']) }}
							    </div>
							    <div class="form-group" id="affiliate_rate" style="display: none;">
							        <label>Affiliate Commision Rate</label>
							        <input type="number" min="1" max="100" step="0.02" name="affiliate_rate" class="form-control">
							    </div>
							    <div class="form-group" id="affiliate_super" style="display: none;">
							        <label>Master Affiliate </label>
							        <select name="affiliate_super" class="form-control">
							        	<option value="0">Not Assign</option>
							        	@foreach($supers as $super)
											<option value="{{ $super->id }}">{{ $super->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							    <div class="form-group">
							        <label>Phone No</label>
							        <input type="text" name="phone" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Phone Verification</label>
							        {{ Form::select('phone_verification', ['1' => 'Verified', '0' => 'Not Verified'], null, ['class' => 'form-control']) }}
							    </div>
							    <div class="form-group">
							        <label>Password</label>
							        <input type="password" name="password" class="form-control" required>
							    </div>

							    <div class="form-group">
							        <label>Confirm Password</label>
							        <input type="password" name="password_2" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Remarks</label>
							        <textarea name="remarks" class="form-control"></textarea>
							    </div>
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Create New User</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
<script type="text/javascript">
	
	$(".role").change(function(){

		if(this.value == 4)
		{
			$('#affiliate_rate').show();
			$('#affiliate_super').show();
		}
		else
		{
			$('#affiliate_rate').hide();
			$('#affiliate_super').hide();
		}

	});

</script>
</body></html>