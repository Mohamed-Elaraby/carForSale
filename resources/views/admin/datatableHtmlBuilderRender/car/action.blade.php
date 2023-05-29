<a href="{{ route('admin.cars.edit', $query->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> {{ __('trans.edit') }}</a>
{!! Form::open(['route' => ['admin.cars.destroy', $query->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
    <button id="remove_button" class="btn btn-sm btn-danger" > <i class="fa fa-remove"></i> {{ __('trans.delete') }}</button>
{!! Form::close() !!}
