
@if(\Auth::user()->role == 1)

	<a href="{{ URL::to('admin/bonuses/'.$bonus->id) }}" class="btn btn-xs btn-info">View</a>

@else

	<a href="{{ URL::to('staff/bonuses/'.$bonus->id) }}" class="btn btn-xs btn-info">View</a>

@endif