@extends('vitalicia.principal')
@section('encabezado')
<h3>NUEVO MEDICAMENTO PARA PACIENTES</h3>
@stop
@section('contenido')
        <form action="#" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!--Clave--> 
                <input type="text" name='idamedicamento' value="" readonly= 'readonly' style='visibility:hidden'>
            Nombre de Medicamento

            @if($errors->first('nmedica')) 
               <br>{!! $errors->first('nmedica','<span class=error>:message</span>')!!}
          @endif  
                <input type="text" name="nmedica" value="{{old('nmedica')}}">       

            Tipo de indicación 
            @if($errors->first('mindicacion')) 
            <br>{!! $errors->first('indicacion','<span class=error>:message</span>')!!}
            @endif  
                <input type="text" name="mindicacion" value="{{old('mindicacion')}}">
            
            
            Presentación
            @if($errors->first('mpresen')) 
            <br>{!! $errors->first('mpresen','<span class=error>:message</span>')!!}
            @endif
                <input type="text" name="mpresen" value="{{old('mpresen')}}">
                
            <input type="submit" class="button" value="Guardar">
            </form>
@stop
