@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Categories</h1>
@stop

@section('content')
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Categories</h3>
            </div>
            <form action="{{url('admin/edit-categories/'.$category->id)}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="2" {{$category->status == 2 ? 'selected' : ''}}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
