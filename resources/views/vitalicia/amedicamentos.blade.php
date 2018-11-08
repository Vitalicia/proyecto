@extends('vitalicia.principal')
@section('encabezado')
<h3>NUEVO MEDICAMENTO PARA PACIENTES</h3>
@stop
@section('contenido')
        <form action="#" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!--Clave--> 
                <input type="text" name='idmedicamento' value="" readonly= 'readonly' style='visibility:hidden'>
            Nombre de Medicamento

            @if($errors->first('nmedica')) 
               <br>{!! $errors->first('nmedica','<span class=error>:message</span>')!!}
          @endif  
                <input type="text" name="nmedica" value="{{old('nmedica')}}">       

            Tipo de indicación 
            @if($errors->first('indicacion')) 
            <br>{!! $errors->first('indicacion','<span class=error>:message</span>')!!}
            @endif  
                <input type="text" name="indicacion" value="{{old('indicacion')}}">
            
            
            Presentación
            @if($errors->first('presen')) 
            <br>{!! $errors->first('presen','<span class=error>:message</span>')!!}
            @endif
                <input type="text" name="presen" value="{{old('presen')}}">
                
            Termino TX (Tipo Enfermedad)
            @if($errors->first('terminotx')) 
            <br>{!! $errors->first('terminotx','<span class=error>:message</span>')!!}
            @endif
                <input type="text" name="terminotx" value="{{old('terminotx')}}">

            <input type="submit" class="button" value="Guardar">
            </form>
@stop
