@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Edit User</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/users/'.$user->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
							    <div class="form-group">
							        <label>Full Name</label>
							        <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Email</label>
							        <input type="text" name="email" class="form-control" value="{{ $user->email }}" required>
							    </div>
							    <div class="form-group">
							        <label>Role</label>
							        {{ Form::select('role', ['1' => 'Administrator', '2' => 'Staff', '3' => 'Normal User','4' => 'Affiliate','5' => 'Master Affiliate'], $user->role, ['class' => 'form-control role']) }}
							    </div>
							    @if($user->role == 4)
							    	<div class="form-group" id="affiliate_rate">
								        <label>Commision Rate</label>
								        <input type="number" min="1" max="100" step="0.02" value="{{ $user->affiliate_rate }}" name="affiliate_rate" class="form-control" required>
								    </div>
								    <div class="form-group" id="affiliate_super">
								        <label>Master Affiliate </label>
								        {{ Form::select('affiliate_super',$supers , $user->referred_by, ['placeholder' => 'Not Assign','class' => 'form-control']) }}
								    </div>
							    @elseif($user->role == 5)
									<div class="form-group" id="affiliate_rate">
								        <label>Commision Rate</label>
								        <input type="number" min="1" max="100" step="0.02" value="{{ $user->affiliate_rate }}" name="affiliate_rate" class="form-control" required>
								    </div>
							    @endif
							    <div class="form-group">
							        <label>Group</label>
							        {{ Form::select('group', \App\Group::all()->pluck('name', 'id'), $user->group_id, ['class' => 'form-control']) }}
							    </div>
							    <div class="form-group">
							        <label>Phone No</label>
							        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" required>
							    </div>
							    <div class="form-group">
							        <label>Phone Verification</label>
							        {{ Form::select('phone_verification', ['1' => 'Verified', '0' => 'Not Verified'], $user->phone_verification, ['class' => 'form-control']) }}
							    </div>
							    <div class="form-group">
							        <label>Bank Name</label>
							        <input type="text" name="bank_name" class="form-control" value="{{ $user->bank_name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Bank Account No</label>
							        <input type="text" name="bank_account_no" class="form-control" value="{{ $user->bank_account_no }}" required>
							    </div>
							    <div class="form-group">
							        <label>Remarks</label>
							        <textarea name="remarks" class="form-control">{{ $user->remarks }}</textarea>
							    </div>
							    @if($user->role == 3)
								<div class="form-group">
							        <label>Refferal By</label>
							        {{ Form::select('referred_by', $affiliate, $user->referred_by, ['class' => 'form-control']) }}
							    </div>
							    @endif
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Update User</button>
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