<div class="form-group">
    {!! Form::label('nombre', 'nombre') !!}
    {!! Form::text('nombre', null ,['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-Mail') !!}
    {!! Form::text('email', null ,['class' => 'form-control', 'placeholder' => 'correo electronico']) !!}
</div>

<div class="form-group">
    {!! Form::label('celular', 'numero celular') !!}
    {!! Form::text('celular', null ,['class' => 'form-control', 'placeholder' => 'numero de celular']) !!}
</div>

<div class="form-group">
    {!! Form::label('ciudad', 'ciudad municipio') !!}
    {!! Form::text('ciudad', null ,['class' => 'form-control', 'placeholder' => 'ciudad municipio']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'password') !!}
    {!! Form::password('password', ['class' => 'form-control',  'placeholder' => '*********']) !!}
</div>

<div class="form-group">
    {!! Form::label('type', 'tipo de usuario') !!}
    {!! Form::select('type', ['user' => 'apicultor' , 'adimin' => 'administrador'], null ,['class' => 'form-control']) !!}
</div>
