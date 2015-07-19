
<h1>Usuarios</h1>
 <ul> 

 	@foreach($alimentos as $alimento) 
 	<!-- Equivalente en Blade a <?php  foreach ($usuarios as $usuario) ?> --> 
 	<li> {{ $alimento->CTAL.' '.$alimento->CALIM }} </li> 
 		<!-- Equivalente en Blade a <?php echo $usuario->nombre.' '.$usuario->apellido ?> --> 
	 @endforeach 
</ul>