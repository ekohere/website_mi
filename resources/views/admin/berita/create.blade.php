@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Create New berita</h2>
                    </div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/berita', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.berita.form')

                        {!! Form::close() !!}

                    </div>
                </div>
        </div>
@endsection