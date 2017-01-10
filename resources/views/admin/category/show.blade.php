@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>category {{ $category->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/category/' . $category->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit category"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/category', $category->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete category',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $category->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $category->name }} </td></tr><tr><th> Information </th><td> {{ $category->information }} </td></tr><tr><th> Parent Category Id </th><td> {{ $category->parent_category_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection