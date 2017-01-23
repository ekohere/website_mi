@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>article {{ $article->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/article/' . $article->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit article"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/article', $article->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete article',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $article->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $article->title }} </td></tr><tr><th> Content </th><td> {{ $article->content }} </td></tr><tr><th> User Id </th><td> {{ $article->user_id }} </td></tr><tr><th> Category Id </th><td> {{ $article->category_id }} </td></tr><tr><th> Type Id </th><td> {{ $article->type_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection