@extends('vitalicia.principal')
@section('encabezado')
<h3>Modifcar Pacientes</h3>
@stop
@section('form1')
        <form action="{{route('guardamodificapac')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave
                <input type="text" name='idpaciente' value="{{$paci->idpaciente}}" readonly= 'readonly' >
            
            Fecha
            <br>{!! $errors->first('paci','<span class=error>:message</span>')!!}
                <input type="text" name="fechapaciente" value="{{$paci->fechapaciente}}">
                
            Nombre
            @foreach($datos as $dat)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="idd" value="{{$dat->idd}}">{{$dat->nombre}}
                @endforeach

            Medicamento
            @foreach($medi as $medica)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="idmedicamento" value="{{$medica->idmedicamento}}">{{$medica->nombre}}
                @endforeach

            Alimentacion
            @foreach($alim as $alime)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="idalimentacion" value="{{$alime->idalimentacion}}">{{$alim->menu}}
                @endforeach
                
            Signos
            @foreach($sign as $signo)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="ids" value="{{$signo->ids}}">{{$signo->glucosa}}
                @endforeach

            Geriatricos
            @foreach($geri as $geria)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="idgeriatricos" value="{{$geria->idgeriatricos}}">{{$geria->valorg}}
                @endforeach

            Actividades
            @foreach($acti as $activi)
            <br>{!! $errors->first('contrasena','<span class=error>:message</span>')!!}
                <input type="text" name="idactividades" value="{{$activi->idactividades}}">{{$activi->nombre}}
                @endforeach
                <input type="submit" class="button" value="Guardar">
           
@stop
