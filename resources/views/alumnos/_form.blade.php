<h5 class="card-header">Nuevo Alumno</h5>
<div class="card-body">      
    <div class="row">
        <div class="col">
            {{ Form::bsText('nombre_alumno', null, array('required')) }}
        </div>
        <div class="col">
            {{ Form::bsText('cedula_numero') }}
        </div>
        <div class="col">
            {{ Form::bsText('celular') }}
        </div>        
    </div>
    <div class="row">
        <div class="col">
            {{ Form::bsText('lugar_de_nacimiento') }}
          </div>
          <div class="col">
            {{ Form::bsDate('fecha_nacimiento') }}
          </div>
          <div class="col">
            {{ Form::bsText('nacionalidad') }}
          </div>
          <div class="col">
            {{ Form::bsDropdown('sexo', array(0 => 'F', 1 => 'M')) }}
          </div>       
    </div>
    
    <div class="row">
      <div class="col">
          {!! Form::hidden('id_padres', 0, array('required')) !!}
          {{ Form::bsText('padre / tutor', null, array('required')) }}
      </div>
    </div>

    <div class="row">
      <div class="col">
          {{ Form::bsTextArea('observacion', null, array('rows'=>4)) }}
      </div>         
    </div>

    {{ Form::bsSubmit('Guardar', ['class'=>'btn btn-primary']) }}
</div>