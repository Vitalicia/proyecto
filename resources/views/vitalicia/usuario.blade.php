@extends('vitalicia.principal')
@section('encabezado')
<h3>Datos de inicio de sesi&oacute;n</h3>
@stop
@section('contenido2')
        <form action="{{route('gusua')}}" method = "POST" >
            {{csrf_field()}}
            Nombre de usuario
            <br>{!! $errors->first('usuario','<span class=error>:message</span>')!!}
                <input type="text" name="usuario" value="{{old('usuario')}}">
                
            Contrase&ntilde;a 
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="password" name="contrasena">
            
            Tipo de usuario <select name = 'idt'>
                                    @foreach($tipos as $tp)
                                    <option value ='{{$tp->idt}}'>{{$tp->tipo}}</option>
                                    @endforeach
                                    </select>

            <input type="submit" class="button" value="Guardar">
        </form>
@stop
@section('espacio')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@stop

