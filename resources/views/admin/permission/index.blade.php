@extends('admin.layout')

@section('content')
        <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">Permission</h2>
                    </div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/permission/create') }}" class="mb-xs mt-xs mr-xs btn btn-success" title="Add New permission"><i class="fa fa-plus"></i> Tambah</a>

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
                                        <th>ID</th><th> Name </th><th> Display Name </th><th> Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($permission as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->display_name }}</td><td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('/admin/permission/' . $item->id) }}" class="btn btn-success btn-xs" title="View permission"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/admin/permission/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit permission"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/permission', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete permission" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete permission',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $permission->render() !!} </div>
                        </div>

                    </div>
                </div>
        </div>
@endsection