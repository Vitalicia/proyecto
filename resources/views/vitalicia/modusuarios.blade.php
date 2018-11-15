@extends('vitalicia.principal')
@section('encabezado')
<h3>Modifcar Usuarios</h3>
@stop
@section('form1')
        <form action="{{route('guardamodificausua')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave 
                <input type="text" name='idu' value="{{$usua->idu}}" readonly= 'readonly' >
            
            Usuario
            <br>{!! $errors->first('usuario','<span class=error>:message</span>')!!}
                <input type="text" name="usuario" value="{{$usua->usuario}}">
                
            Contraseña
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="contrasena" value="{{$usua->contrasena}}">
                
            Correo
            <br>{!! $errors->first('correo','<span class=error>:message</span>')!!}
                <input type="text" name="correo" value="{{$usua->correo}}">
                

           
            seleccione turno <select name ='idt'>
            <option value ='{{$idt}}'>{{$turnos}}</option>
            <br>{!! $errors->first('edad','<span class=error>:message</span>')!!}
                <input type="text" name="edad" value="{{$usua->edad}}">

           
@stop
