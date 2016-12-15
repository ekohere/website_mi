@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>configuration {{ $configuration->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/configuration/' . $configuration->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit configuration"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/configuration', $configuration->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete configuration',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $configuration->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $configuration->title }} </td></tr><tr><th> Content </th><td> {{ $configuration->content }} </td></tr><tr><th> Photo </th><td> {{ $configuration->photo }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection