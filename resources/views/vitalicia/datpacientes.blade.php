@extends('vitalicia.principal')
@section('encabezado')
<h2 class="subheader">Seguimiento de Pacientes</h2>
<br>
@stop
@section('form1')
        <form action="{{route('gusu')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            
            Usuario
            <br>
                <select name = 'idu'>
                @foreach($usuarios as $usup)
                <option value ='{{$usup->idu}}'>{{$usup->usuario}}</option>
                @endforeach
                </select>
            
            Medicamento <select name = 'medicam'>
                            @foreach($amedicamentos as $amed)
                            <option value = '{{$amed->idamedicamento}}'>{{$amed->nmedica}}</option>
                            @endforeach
                        </select>
            
            Actividad 1
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="actividad1" value="{{old('actividad1')}}">

            Hora de la Actividad 1
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="hora1" value="{{old('hora1')}}">

            Actividad 2
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="actividad2" value="{{old('actividad2')}}">

            Hora de la Actividad 2
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="hora2" value="{{old('hora2')}}">

            Actividad 3
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="actividad3" value="{{old('actividad3')}}">

            Hora de la Actividad 3
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="hora3" value="{{old('hora3')}}">

            Comida (Men&uacute;) 
            <br>{!! $errors->first('ap','<span class=error>:message</span>')!!}
                <input type="text" name="menu" value="{{old('menu')}}">
                

            
            <input type="text" name='idnp' value="" readonly= 'readonly' style='visibility:hidden'>
@stop
@section('form2')               
            Consumo
            <br>{!! $errors->first('am','<span class=error>:message</span>')!!}
                <input type="text" name="consumo" value="{{old('consumo')}}">
                
            Observaciones 
            <br>{!! $errors->first('edad','<span class=error>:message</span>')!!}
                <input type="text" name="observaciones" value="{{old('observaciones')}}">

            Hora de Comida
            <br>{!! $errors->first('telefono','<span class=error>:message</span>')!!}
                <input type="text" name="horacomida" value="{{old('horacomida')}}">
            
            Tipo de Comida 
            <br>{!! $errors->first('calle','<span class=error>:message</span>')!!}
                <input type="text" name="tipocomida" value="{{old('tipocomida')}}">
                 
            Geri&aacute;trico 1 
            <br>{!! $errors->first('numero','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico1" value="{{old('tgeriatrico1')}}">
                
            Geri&aacute;trico 2 
            <br>{!! $errors->first('calle1','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico2" value="{{old('tgeriatrico2')}}">
                
            Geri&aacute;trico 3 
            <br>{!! $errors->first('calle2','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico3" value="{{old('tgeriatrico3')}}">
                
            ta
            <br>{!! $errors->first('colonia','<span class=error>:message</span>')!!}
                <input type="text" name="ta" value="{{old('ta')}}">
@stop
@section('form3')                
            tf
            <br>{!! $errors->first('municipio','<span class=error>:message</span>')!!}
                <input type="text" name="tf" value="{{old('tf')}}">
                
            fr
            <br>{!! $errors->first('ciudad','<span class=error>:message</span>')!!}
                <input type="text" name="fr" value="{{old('fr')}}">
                
            Temp 
            <br>{!! $errors->first('cp','<span class=error>:message</span>')!!}
                <input type="text" name="temp" value="{{old('temp')}}">
                
            Spo2 
            <br>{!! $errors->first('referencia','<span class=error>:message</span>')!!}
                <input type="text" name="spo2" value="{{old('spo2')}}">
            
            Glucosa
            <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
                <input type="text" name="glucosa" value="{{old('glucosa')}}">

            Pr&oacute;tesis
            <br>{!! $errors->first('ap','<span class=error>:message</span>')!!}
                <input type="text" name="protesis" value="{{old('protesis')}}">
                
            Nombre del Cuidador
            <br>{!! $errors->first('am','<span class=error>:message</span>')!!}
                <input type="text" name="consumo" value="{{old('consumo')}}">
                
            Horario 
            <br>{!! $errors->first('edad','<span class=error>:message</span>')!!}
                <input type="text" name="observaciones" value="{{old('observaciones')}}">

        </form>
@stop