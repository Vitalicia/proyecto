@extends('vitalicia.principal')
@section('encabezado')
<h3>Nuevo Medicamento</h3>
@stop
@section('contenido')
        <form action="{{route('gume')}}" method = "POST" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!--Clave--> 
                <input type="text" name='idmedicamento' value="{{$iddm}}" readonly= 'readonly' style='visibility:hidden'>
          

            Medicamento<select name = 'medica'>
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
                <select name="presen">
                  <option name="presen" value="Solida">Solida</option>
                  <option name="presen" value="Polvos">Polvos</option>
                  <option name="presen" value="Capsulas">Capsulas o Comprimidos</option>
                  <option name="presen" value="Tabletas">Tabletas</option>
                  <option name="presen" value="Pildoras">Pildoras</option>
                  <option name="presen" value="Grageas">Grageas</option>
                  <option name="presen" value="Supositorios">Supositorios</option>
                  <option name="presen" value="Óvulos">Óvulos</option>
                  <option name="presen" value="Pomada">Pomada</option>
                  <option name="presen" value="Crema">Crema</option>
                  <option name="presen" value="Líquida">Líquida</option>
                  <option name="presen" value="Soluciones">Soluciones</option>
                  <option name="presen" value="Jarabe">Jarabe</option>
                  <option name="presen" value="Enemas">Enemas</option>
                </select>
                
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
