@extends('app')

@section('content')

<div class="row">
<div class="xs-12">
	<h3 class="page-header">
	Crud Laravel y VueJS
	</h3>
</div>

<div class ="col-sm-7">
	<a href="#" class="btn btn-primary pull-right"> Nueva Tarea</a>

</div>

	<table class="table table-bordered"">
			<thead>
				<tr class="active" >
					<th>id</th>
					<th>usuario</th>
					<th>email</th>
					<th>contraseña</th>
					<th>fecha Creacion</th>
					<th>fecha Modificacion</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="active">...</td>
				    <td class="success">...</td>
				    <td class="warning">...</td>
				    <td class="danger">...</td>
				    <td class="success">...</td>
				    <td class="warning">...</td>
				</tr>
			</tbody>
	</table>


</div>

@endsection