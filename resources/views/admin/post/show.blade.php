@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h2 class="panel-title">post {{ $post->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/post/' . $post->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/post', $post->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete post',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $post->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $post->title }} </td></tr><tr><th> Content </th><td> {{ $post->content }} </td></tr><tr><th> User Id </th><td> {{ $post->user_id }} </td></tr><tr><th> Category Id </th><td> {{ $post->category_id }} </td></tr><tr><th> Types Id </th><td> {{ $post->types_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection