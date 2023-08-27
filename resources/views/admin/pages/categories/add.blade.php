@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Categories</h1>
@stop

@section('content')
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Categories</h3>
            </div>
            <form action="{{url('admin/add-categories')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
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
