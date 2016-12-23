@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Edit permission {{ $permission->id }}</h2>
                    </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($permission, [
                            'method' => 'PATCH',
                            'url' => ['/admin/permission', $permission->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.permission.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
        </div>
@endsection