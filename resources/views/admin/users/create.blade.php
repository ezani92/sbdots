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
							        {{ Form::select('role', ['1' => 'Administrator', '2' => 'Staff', '3' => 'Normal User','4' => 'Affiliate'], 3, ['class' => 'form-control']) }}
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
</body></html>