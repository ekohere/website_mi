<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!--<div class="form-group {{ $errors->has('like') ? 'has-error' : ''}}">
    {!! Form::label('like', 'Like', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('like', null, ['class' => 'form-control']) !!}
        {!! $errors->first('like', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->
<div class="form-group {{ $errors->has('name_guest') ? 'has-error' : ''}}">
    {!! Form::label('name_guest', 'Name Guest', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name_guest', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name_guest', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email_guest') ? 'has-error' : ''}}">
    {!! Form::label('email_guest', 'Email Guest', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email_guest', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email_guest', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('comment_id') ? 'has-error' : ''}}">
    {!! Form::label('comment_id', 'Comment Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('comment_id',  Auth::id(), ['class' => 'form-control']) !!}
        {!! $errors->first('comment_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user_id',  Auth::id(), ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>