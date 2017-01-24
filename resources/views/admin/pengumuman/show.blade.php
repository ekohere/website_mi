@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>pengumuman {{ $pengumuman->id }}</h2></div>
                    <div class="panel-body">

                        <a href="{{ url('admin/pengumuman/' . $pengumuman->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit pengumuman"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/pengumuman', $pengumuman->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete pengumuman',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pengumuman->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $pengumuman->title }} </td></tr><tr><th> Content </th><td> {{ $pengumuman->content }} </td></tr><tr><th> User Id </th><td> {{ $pengumuman->user_id }} </td></tr><tr><th> Category Id </th><td> {{ $pengumuman->category_id }} </td></tr><tr><th> Type Id </th><td> {{ $pengumuman->type_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
        </div>
@endsection