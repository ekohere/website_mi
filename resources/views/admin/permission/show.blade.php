@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>permission {{ $permission->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/permission/' . $permission->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit permission"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/permission', $permission->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete permission',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $permission->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $permission->name }} </td></tr><tr><th> Display Name </th><td> {{ $permission->display_name }} </td></tr><tr><th> Description </th><td> {{ $permission->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection