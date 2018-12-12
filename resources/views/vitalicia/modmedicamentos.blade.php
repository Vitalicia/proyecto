@extends('vitalicia.principal')
@section('encabezado')
<h3>Modifcar Medicamentos</h3>
@stop
@section('form2')
        <form action="{{route('guardamodime')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave 
                <input type="text" name='idamedicamento' value="{{$amedi->idamedicamento}}" readonly= 'readonly' >
            
            Nmedica
            <br>{!! $errors->first('usuario','<span class=error>:message</span>')!!}
                <input type="text" name="nmedica" value="{{$amedi->nmedica}}">
                
           Mindicacion
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="mindicacion" value="{{$amedi->mindicacion}}">
                
            Mpresentacion
            <br>{!! $errors->first('correo','<span class=error>:message</span>')!!}
                <input type="text" name="mpresen" value="{{$amedi->mpresen}}">
                

           
       
<br>

                
                <input type="submit" class="button" value="Guardar">
           
@stop
