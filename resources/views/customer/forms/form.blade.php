<div class="form-body">
    <div class="form-group">
        <label for="name" class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Nombre:</label>
        <div class="col-sm-7">
            {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresar tu nombre completo', 'autocomplete'=>"off", 'id'=>'name'])!!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail1" class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Dirección:</label>
        <div class="col-sm-7">
            {!!Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Ingresar correo electrónico', 'autocomplete'=>"off", 'id'=>'address'])!!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail1" class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Teléfono:</label>
        <div class="col-sm-7">
            {!!Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Ingresar correo electrónico', 'autocomplete'=>"off", 'onkeypress'=>'validateInput(event, 2)', 'id'=>'phone'])!!}
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail1" class="col-md-4 control-label"><span class="required" aria-required="true"> * </span> Correo electrónico:</label>
        <div class="col-sm-7">
            {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Ingresar correo electrónico', 'autocomplete'=>"off", 'id'=>'email'])!!}
        </div>
    </div>

</div>

<div class="form-actions col-sm-offset-5">
    <button type="submit" class="btn green-meadow" id="send">Guardar</button>
    <a class="btn red" href="{{URL::route('users.index')}}">Cancelar</a>
</div>
