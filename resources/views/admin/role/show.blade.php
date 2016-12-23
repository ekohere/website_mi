@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>role {{ $role->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/role/' . $role->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/role', $role->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete role',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $role->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $role->name }} </td></tr><tr><th> Display Name </th><td> {{ $role->display_name }} </td></tr><tr><th> Description </th><td> {{ $role->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection