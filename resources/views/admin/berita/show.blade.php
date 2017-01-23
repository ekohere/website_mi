@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>berita {{ $berita->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/berita/' . $beritum->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit beritum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/berita', $berita->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete berita',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $berita->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $berita->title }} </td></tr><tr><th> Content </th><td> {{ $berita->content }} </td></tr><tr><th> User Id </th><td> {{ $berita->user_id }} </td></tr><tr><th> Category Id </th><td> {{ $berita->category_id }} </td></tr><tr><th> Type Id </th><td> {{ $berita->type_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection