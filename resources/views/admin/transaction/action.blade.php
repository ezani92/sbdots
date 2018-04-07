
@if(\Auth::user()->role == 1)

	<a href="{{ URL::to('admin/transaction/'.$transaction->id) }}" class="btn btn-xs btn-info">View</a>

@else

	<a href="{{ URL::to('staff/transaction/'.$transaction->id) }}" class="btn btn-xs btn-info">View</a>

@endif