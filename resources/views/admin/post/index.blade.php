@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Post</h2>
                    </div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/post/create') }}" class="mb-xs mt-xs mr-xs btn btn-success" title="Add New post"><i class="fa fa-plus"></i> Tambah</a>

                        <form id="form_filter" >
                                    <div class="row form-inline form-horizontal">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="col-md-2">
                                                {!! Form::select('pagination', ['10'=>'10','25'=>'25','50'=>'50','100'=>'100','semua'=>'semua'], isset($_GET['pagination'])?$_GET['pagination']:25, ["onchange"=>"this.form.submit();",'class' => 'form-control mb-md']) !!}
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label"> data per halaman</label>
                                            </div>

                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="datatable-default_filter" class="dataTables_filter">
                                                <label><input class="form-control" value="{{isset($_GET['search'])?$_GET['search']:''}}" name="search" placeholder="Search" aria-controls="datatable-default">
                                                </label></div>
                                        </div>
                                    </div>
                                    </form>

                        <div class="table-responsive">
                            <table class="table table-no-more table-bordered table-striped mb-none">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Title </th><th> Content </th><th> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($post as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->content }}</td>
                                        <td>
                                            <a href="{{ url('/admin/post/' . $item->id) }}" class="btn btn-success btn-xs" title="View post"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/page/' . $item->slug) }}" class="btn btn-warning btn-xs" title="View Page" target="_blank"><span class="glyphicon glyphicon-globe" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/post/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit post"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/post', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete post" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete post',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $post->render() !!} </div>
                        </div>

                    </div>
                </div>
        </div>
@endsection