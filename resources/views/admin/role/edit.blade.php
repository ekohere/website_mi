@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Edit role {{ $role->id }}</h2>
                    </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($role, [
                            'method' => 'PATCH',
                            'url' => ['/admin/role', $role->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.role.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
        </div>
@endsection