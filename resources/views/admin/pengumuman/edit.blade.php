@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Edit pengumuman {{ $pengumuman->id }}</h2>
                    </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($pengumuman, [
                            'method' => 'PATCH',
                            'url' => ['/admin/pengumuman', $pengumuman->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.pengumuman.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
        </div>
@endsection