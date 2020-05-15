@extends('layouts.app')

@section('content')

<div class="container">


seccion para crear usuarios
<form action = "{{url('/Usuarios')}}"method=  "post" enctype="multipart/form-data">
<!–- ecriptarcadena con crsf -–>
{{csrf_field()}}
@include('Usuarios.form',['Modo'=>'crear'])


</form>
</div>
@endsection