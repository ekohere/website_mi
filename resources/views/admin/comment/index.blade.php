@extends('admin.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comment</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/comment/create') }}" class="btn btn-primary btn-xs" title="Add New comment"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Content </th><th> Like </th><th> Name Guest </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($comment as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->content }}</td><td>{{ $item->like }}</td><td>{{ $item->name_guest }}</td>
                                        <td>
                                            <a href="{{ url('/admin/comment/' . $item->id) }}" class="btn btn-success btn-xs" title="View comment"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/comment/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit comment"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/comment', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete comment" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete comment',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $comment->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection