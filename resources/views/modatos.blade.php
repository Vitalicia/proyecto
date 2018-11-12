@extends('vitalicia.principal')
@section('encabezado')
<h3>Modifcar Datos</h3>
@stop
@section('form1')
        <form action="{{route('guardamodificadat')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave 
                <input type="text" name='idd' value="{{$datos->idd}}" readonly= 'readonly' >
            
            Nombre
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="nombre" value="{{$datos->idd}}">
                
            Apellido Paterno 
            <br>{!! $errors->first('ap','<span class=error>:message</span>')!!}
                <input type="text" name="ap" value="{{$datos->idd}}">
                
            Apellido Materno
            <br>{!! $errors->first('am','<span class=error>:message</span>')!!}
                <input type="text" name="am" value="{{$datos->idd}}">
                
            Edad 
            <br>{!! $errors->first('edad','<span class=error>:message</span>')!!}
                <input type="text" name="edad" value="{{$datos->idd}}">

            Tel&eacute;fono
            <br>{!! $errors->first('telefono','<span class=error>:message</span>')!!}
                <input type="text" name="telefono" value="{{$datos->idd}}">
@stop
@section('form2')               
            Sexo 
            <br>
                <input type="radio" name="sexo" value="H" checked>Hombre
                <input type="radio" name="sexo" value="M">Mujer
            <br>
            <br>
            Calle 
            <br>{!! $errors->first('calle','<span class=error>:message</span>')!!}
                <input type="text" name="calle" value="{{$datos->idd}}">
                 
            N&uacute;mero 
            <br>{!! $errors->first('numero','<span class=error>:message</span>')!!}
                <input type="text" name="numero" value="{{$datos->idd}}">
                
            Entre calle 
            <br>{!! $errors->first('calle1','<span class=error>:message</span>')!!}
                <input type="text" name="calle1" value="{{$datos->idd}}">
                
            y calle 
            <br>{!! $errors->first('calle2','<span class=error>:message</span>')!!}
                <input type="text" name="calle2" value="{{$datos->idd}}">
                
            Colonia
            <br>{!! $errors->first('colonia','<span class=error>:message</span>')!!}
                <input type="text" name="colonia" value="{{$datos->idd}}">
@stop
@section('form3')                
            Municipio
            <br>{!! $errors->first('municipio','<span class=error>:message</span>')!!}
                <input type="text" name="municipio" value="{{$datos->idd}}">
                
            Ciudad
            <br>{!! $errors->first('ciudad','<span class=error>:message</span>')!!}
                <input type="text" name="ciudad" value="{{$datos->idd}}">
                
            C&oacute;digo Postal 
            <br>{!! $errors->first('cp','<span class=error>:message</span>')!!}
                <input type="text" name="cp" value="{{$datos->idd}}">
                
            Referencia 
            <br>{!! $errors->first('referencia','<span class=error>:message</span>')!!}
                <input type="text" name="referencia" value="{{$datos->idd}}">
                
           
        </form>
@stop