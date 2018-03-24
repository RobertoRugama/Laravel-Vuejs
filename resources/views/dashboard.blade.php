@extends('app')

@section('content')

<div id="crud" class="row">
		<div class="col-xs-12">
			<h3 class="page-header">Crud Laravel y VueJS</h3>
		</div>
	<div class ="col-sm-7">
		<a href="#" class="btn btn-primary pull-right"> Nueva Tarea</a>
			<table class="table table-hover table-sprit">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tarea</th>
						<th width="15px">Fecha de Creacion</th>
						<th width="15px">Fecha de Modificacion</th>
						<th colspan="2">&nbsp;</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="10px">1</td>
						<td>Tarea 1</td>
						<td width="15px">2018-03-24 09:20:00</td>
						<td width="15px">2018-03-24 09:20:00</td>
						<td width="10px"><a href="#" class="btn btn-warning btn-sm">Editar</a></td>
						<td width="10px"><a href="#" class="btn btn-danger btn-sm">Eliminar</a></td>
					</tr>
				</tbody>
			</table>
	</div>
	<div class="col-sm-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>
</div>

@endsection