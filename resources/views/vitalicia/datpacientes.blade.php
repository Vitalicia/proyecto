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
            <br>{!! $errors->first('actividad1','<span class=error>:message</span>')!!}
                <input type="text" name="actividad1" value="{{old('actividad1')}}">

            Hora de la Actividad 1
            <br>{!! $errors->first('hora1','<span class=error>:message</span>')!!}
                <input type="text" name="hora1" value="{{old('hora1')}}">

            Actividad 2
            <br>{!! $errors->first('actividad2','<span class=error>:message</span>')!!}
                <input type="text" name="actividad2" value="{{old('actividad2')}}">

            Hora de la Actividad 2
            <br>{!! $errors->first('hora2','<span class=error>:message</span>')!!}
                <input type="text" name="hora2" value="{{old('hora2')}}">

            Actividad 3
            <br>{!! $errors->first('actividad3','<span class=error>:message</span>')!!}
                <input type="text" name="actividad3" value="{{old('actividad3')}}">

            Hora de la Actividad 3
            <br>{!! $errors->first('hora3hora3','<span class=error>:message</span>')!!}
                <input type="text" name="hora3" value="{{old('hora3')}}">

            Comida (Men&uacute;) 
            <br>{!! $errors->first('menu','<span class=error>:message</span>')!!}
                <input type="text" name="menu" value="{{old('menu')}}">
                

            
            <input type="text" name='idnp' value="" readonly= 'readonly' style='visibility:hidden'>
@stop
@section('form2')               
            Consumo
            <br>{!! $errors->first('consumo','<span class=error>:message</span>')!!}
                <input type="text" name="consumo" value="{{old('consumo')}}">
                
            Observaciones 
            <br>{!! $errors->first('observaciones','<span class=error>:message</span>')!!}
                <input type="text" name="observaciones" value="{{old('observaciones')}}">

            Hora de Comida
            <br>{!! $errors->first('horacomida','<span class=error>:message</span>')!!}
                <input type="text" name="horacomida" value="{{old('horacomida')}}">
            
            Tipo de Comida 
            <br>{!! $errors->first('tipocomida','<span class=error>:message</span>')!!}
                <input type="text" name="tipocomida" value="{{old('tipocomida')}}">
                 
            Geri&aacute;trico 1 
            <br>{!! $errors->first('tgeriatrico1','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico1" value="{{old('tgeriatrico1')}}">
                
            Geri&aacute;trico 2 
            <br>{!! $errors->first('tgeriatrico2','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico2" value="{{old('tgeriatrico2')}}">
                
            Geri&aacute;trico 3 
            <br>{!! $errors->first('tgeriatrico3','<span class=error>:message</span>')!!}
                <input type="text" name="tgeriatrico3" value="{{old('tgeriatrico3')}}">
                
            ta
            <br>{!! $errors->first('ta','<span class=error>:message</span>')!!}
                <input type="text" name="ta" value="{{old('ta')}}">
@stop
@section('form3')                
            tf
            <br>{!! $errors->first('tf','<span class=error>:message</span>')!!}
                <input type="text" name="tf" value="{{old('tf')}}">
                
            fr
            <br>{!! $errors->first('fr','<span class=error>:message</span>')!!}
                <input type="text" name="fr" value="{{old('fr')}}">
                
            Temp 
            <br>{!! $errors->first('temp','<span class=error>:message</span>')!!}
                <input type="text" name="temp" value="{{old('temp')}}">
                
            Spo2 
            <br>{!! $errors->first('spo2','<span class=error>:message</span>')!!}
                <input type="text" name="spo2" value="{{old('spo2')}}">
            
            Glucosa
            <br>{!! $errors->first('glucosa','<span class=error>:message</span>')!!}
                <input type="text" name="glucosa" value="{{old('glucosa')}}">

            Pr&oacute;tesis
            <br>{!! $errors->first('protesis','<span class=error>:message</span>')!!}
                <input type="text" name="protesis" value="{{old('protesis')}}">
                
            Nombre del Cuidador
            <br>{!! $errors->first('consumo','<span class=error>:message</span>')!!}
                <input type="text" name="consumo" value="{{old('consumo')}}">
                
            Horario 
            <br>{!! $errors->first('observaciones','<span class=error>:message</span>')!!}
                <input type="text" name="observaciones" value="{{old('observaciones')}}">

        <input type="submit" class="button" value="Guardar">
        </form>
@stop