@extends('layouts.scaffold')

@section('main')

<h1>All Planillas</h1>

<p>{{ link_to_route('planillas.create', 'Add New Planilla', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($planillas->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id_planilla</th>
				<th>Id_local</th>
				<th>Nombre_usuario</th>
				<th>Fecha_hora</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($planillas as $planilla)
				<tr>
					<td>{{{ $planilla->id_planilla }}}</td>
					<td>{{{ $planilla->id_local }}}</td>
					<td>{{{ $planilla->nombre_usuario }}}</td>
					<td>{{{ $planilla->fecha_hora }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('planillas.destroy', $planilla->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('planillas.edit', 'Edit', array($planilla->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no planillas
@endif

@stop
