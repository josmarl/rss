@extends('layouts.admin')

@section('content')
	{!!Form::model(Request::only(['codigo','nombre']),['Route'=>'buscador','method'=>'GET','class'=>'navbar-form navbar-left pull-right','role'=>'shearch'])!!}
	<div class="form-group">
		<label>Codigo:</label>
		{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo del alimento'])!!}
		<!-- <input type="text" name="codigo"  id='codigo' class='form-control' placeholder='Ingrese el codigo del alimento'>  -->
	</div>
	<div class="form-group">
		<label>Nombre:</label>
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del alimento'])!!}
		<!--<input type="text" name="nombre" id='nombre' class='form-control' placeholder='Ingrese el nombre del alimento'> -->
	</div>
	<button type="submit" class="btn-default">Buscar</button>
	{!!Form::close()!!}
<!--
	<table id="lista_alimentos">
	</table>
-->
<div class="panel-body">
	{!!$alimentos->render();!!}
	<table class="table">
		<tr>
			<th>CTAL</th>
			<th>CALIM</th>
			<th>NOMALIM</th>
			<th>ENERC</th>
			<th>ENERCKJ</th>
			<th>WATERg</th>
			<th>PROCNTg</th>
			<th>FATg</th>
			<th>CHOCDFg</th>
			<th>CHOAVLg</th>
			<th>FibraCg</th>
			<th>FIBTGg</th>
			<th>ASHg</th>
			<th>CalcCAmg</th>
			<th>FosfPmg</th>
			<th>ZincZNmg</th>
			<th>HierroFEmg</th>
			<th>CARTBQmg</th>
			<th>Retinolug</th>
			<th>VITAmg</th>
			<th>THIAmg</th>
			<th>RIBFmg</th>
			<th>NIAmg</th>
			<th>VITCmg</th>
			<th>AscTmg</th>
		</tr>
<!--
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="prueba()">&times;</button>

 Se ha Guardado Exitosamente!!
</div>
-->
		@foreach($alimentos as $alimento)
		<tr>
			<td>{{$alimento->CTAL}}</td>
			<td>{{$alimento->CALIM}}</td>
			<td>{{$alimento->NOMALIM}}</td>
			<td>{{$alimento->ENERC}}</td>
			<td>{{$alimento->ENERCKJ}}</td>
			<td>{{$alimento->WATERg}}</td>
			<td>{{$alimento->PROCNTg}}</td>
			<td>{{$alimento->FATg}}</td>
			<td>{{$alimento->CHOCDFg}}</td>
			<td>{{$alimento->CHOAVLg}}</td>
			<td>{{$alimento->FibraCg}}</td>
			<td>{{$alimento->FIBTGg}}</td>
			<td>{{$alimento->ASHg}}</td>
			<td>{{$alimento->CalcCAmg}}</td>
			<td>{{$alimento->FosfPmg}}</td>
			<td>{{$alimento->ZincZNmg}}</td>
			<td>{{$alimento->HierroFEmg}}</td>
			<td>{{$alimento->CARTBQmg}}</td>
			<td>{{$alimento->Retinolug}}</td>
			<td>{{$alimento->VITAmg}}</td>
			<td>{{$alimento->THIAmg}}</td>
			<td>{{$alimento->RIBFmg}}</td>
			<td>{{$alimento->NIAmg}}</td>
			<td>{{$alimento->VITCmg}}</td>
			<td>{{$alimento->AscTmg}}</td>
		</tr>
		@endforeach

	</table>
	{!!$alimentos->appends(Request::only(['codigo','nombre']))->render()!!}
</div>
@stop