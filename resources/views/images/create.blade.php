@extends('layouts.main')
 
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Add Image</p>
            </div>
            <div class="panel-body">
                <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="title" class="control-label col-md-3">Title</label>
                        <div class="col-md-9">
                            <input type="text" name="title" class="form-control" placeholder="Write title for your image...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_id" class="control-label col-md-3">User Id</label>
                        <div class="col-md-9">
                            <input type="text" name="user_id" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="control-label col-md-3">Category_id</label>
                        <div class="col-md-9">
                            <input type="text" name="category_id" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="control-label col-md-3">Upload Photo</label>
                        <div class="col-md-9">
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('images.index') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop