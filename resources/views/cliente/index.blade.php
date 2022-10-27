Mostrar la lista de alumnos

<table class="table table-light">

   <thead class="thead-light">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Mail</th>
        <th>Fecha de nacimiento</th>
        <th>sexo</th>
        <th>Telefono</th>
        <th>Acciones</th>
    </tr>
    </thead>
<tbody>
@foreach($Clientes as $emp) 
<tr>
    <th>{{$emp->id}}</th>
    <th>{{$emp->nombre}}</th>
    <th>{{$emp->Mail}}</th>
    <th>{{$emp->fechaNacimiento}}</th>
    <th>{{$emp->sexo}}</th>
    <th>{{$emp->Telefono}}</th>
    <th>Editar
        <form action="{{url('/cliente/'.$emp->id)}}" method="post">
        @csrf
        {{ method_field('DELETE')}}  
        <input type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar">
        </form>  
    </th>
</tr>  
@endforeach  
</tbody>
</table>