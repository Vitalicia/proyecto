@extends('vitalicia.principal')
@section('encabezado')
<h3>Nuevo Medicamento</h3>
@stop
@section('contenido')
        <form action="{{route('gume')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!--Clave--> 
                <input type="text" name='idmedicamento' value="{{$iddm}}" readonly= 'readonly' style='visibility:hidden'>
          

            Medicamento<select name = 'idamed'>
            @foreach($amedicamentos as $amed)
            <option value = '{{$amed->idamedicamento}}'>{{$amed->nmedica}}</option>
            @endforeach
                  </select>
                

            Indicación 
            @if($errors->first('indicacion')) 
            <br>{!! $errors->first('indicacion','<span class=error>:message</span>')!!}
            @endif  
                <input type="text" name="indicacion" value="{{old('indicacion')}}">
                
            Presentación
            @if($errors->first('presen')) 
            <br>{!! $errors->first('presen','<span class=error>:message</span>')!!}
            @endif
                <input type="text" name="presen" value="{{old('presen')}}">
                
            Terminotx
            @if($errors->first('terminotx')) 
            <br>{!! $errors->first('terminotx','<span class=error>:message</span>')!!}
            @endif
                <input type="text" name="terminotx" value="{{old('terminotx')}}">

            Horario<select name = 'idh'>
            @foreach($horarios as $hr)
            <option value = '{{$hr->idh}}'>{{$hr->tipohorario}}</option>
            @endforeach
                  </select>
<br>

            
            <input type="submit" class="button" value="Guardar">
            </form>
@stop
