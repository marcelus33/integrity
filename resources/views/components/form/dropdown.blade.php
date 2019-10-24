<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{Form::select($name, $options, null, ['placeholder' => 'Elija una opción','class' => 'form-control'])}}
</div>
