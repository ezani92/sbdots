@if(\Auth::user()->role == 1)

	<a href="{{ URL::to('admin/users/'.$user->id) }}" class="btn btn-xs btn-info">View</a>

@else

	<a href="{{ URL::to('staff/users/'.$user->id) }}" class="btn btn-xs btn-info">View</a>

@endif