<h3>Normas</h3>

@if ($normas->count())
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Local</th>
                <th>Nombre norma</th>
                {{--<th>Ruta norma</th>--}}
                <th>Nombre usuario</th>
                <th>Fecha_hora</th>
                <th>Activo</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($normas as $norma)
                <tr>
                    <td>1</td>
                    <td>{{{ $norma->nom_norma }}}</td>
                    {{--<td>{{{ $norma->ruta_norma }}}</td>--}}
                    <td>{{{ $norma->nombre_usuario }}}</td>
                    <td>{{{ $norma->fecha_hora }}}</td>
                    <td>
                        {{--{{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('admin.normas.destroy', $norma->id))) }}--}}
                        {{--{{ Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) }}--}}
                        <div class="checkbox">
                            <label>
                                {{ Form::checkbox('select', 1, true, ['class' => 'field']) }}
                            </label>
                        </div>
                        {{--{{ link_to_route('admin.normas.edit', 'Seleccionar', array($norma->id), array('class' => 'btn btn-xs btn-info')) }}--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    There are no normas
@endif