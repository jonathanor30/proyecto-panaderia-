
{{$Modo=='crear'?'Agregar Usuario':'Modificar Usuario'}}

<label for="Cedula">{{'Cedula'}}</label>
<input type="text" name="Cedula" id="Cedula" 

value="{{isset($usuario->Cedula)?$usuario->Cedula:''}}">
<br>

<label for="NombreCompleto">{{'NombreCompleto'}}</label>
<input type="text" name="NombreCompleto" id="NombreCompleto" 

value="{{isset($usuario->NombreCompleto)?$usuario->NombreCompleto:''}}">
<br>

<label for="Telefono">{{'Telefono'}}</label>
<input type="text" name="Telefono" id="Telefono" 

value="{{isset($usuario->Telefono)?$usuario->Telefono:''}}">
<br>

<label for="Correo">{{'Correo'}}</label>
<input type="email" name="Correo" id="Correo" 

value="{{isset($usuario->Correo)?$usuario->Correo:''}}">
<br>

<input type="submit" value="{{$Modo=='crear'?'Agregar':'Modificar'}}">
<a href="{{url('Usuarios')}}">Regresar</a>