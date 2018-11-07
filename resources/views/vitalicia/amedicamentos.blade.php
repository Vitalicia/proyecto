@extends('vitalicia.principal')
@section('encabezado')
<h3>Nuevo Medicamento</h3>
@stop
@section('contenido')
        <form action="#" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            Clave 
                <input type="text" name='idmedicamento' value="" readonly= 'readonly' >
          

            Medicamento

            @if($errors->first('nombre')) 
               <br>{!! $errors->first('nombre','<span class=error>:message</span>')!!}
          @endif  
                <input type="text" name="nombre" value="{{old('nombre')}}">
                
                   


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

                
<br>

            
            <input type="submit" class="button" value="Guardar">
            </form>
@stop
