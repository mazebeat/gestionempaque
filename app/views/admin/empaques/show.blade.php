@extends('layouts.scaffold')

@section('main')

<h1>Show Empaque</h1>

<p>{{ link_to_route('empaques.index', 'Return to All empaques', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id_usuario</th>
				<th>Nombre</th>
				<th>Ape_paterno</th>
				<th>Ape_materno</th>
				<th>Id_region</th>
				<th>Id_provincia</th>
				<th>Id_comuna</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Email</th>
				<th>Sexo</th>
				<th>Fecha_nacimiento</th>
				<th>Id_casa_estudio</th>
				<th>Id_perfil</th>
				<th>Id_local</th>
				<th>Bloqueado</th>
				<th>Nombre_usuario</th>
				<th>Fecha_hora</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $empaque->id_usuario }}}</td>
					<td>{{{ $empaque->nombre }}}</td>
					<td>{{{ $empaque->ape_paterno }}}</td>
					<td>{{{ $empaque->ape_materno }}}</td>
					<td>{{{ $empaque->id_region }}}</td>
					<td>{{{ $empaque->id_provincia }}}</td>
					<td>{{{ $empaque->id_comuna }}}</td>
					<td>{{{ $empaque->direccion }}}</td>
					<td>{{{ $empaque->telefono }}}</td>
					<td>{{{ $empaque->email }}}</td>
					<td>{{{ $empaque->sexo }}}</td>
					<td>{{{ $empaque->fecha_nacimiento }}}</td>
					<td>{{{ $empaque->id_casa_estudio }}}</td>
					<td>{{{ $empaque->id_perfil }}}</td>
					<td>{{{ $empaque->id_local }}}</td>
					<td>{{{ $empaque->bloqueado }}}</td>
					<td>{{{ $empaque->nombre_usuario }}}</td>
					<td>{{{ $empaque->fecha_hora }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('empaques.destroy', $empaque->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('empaques.edit', 'Edit', array($empaque->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
