@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories List</h3>
            <div class="card-tools">
                <a href="{{url('admin/add-categories')}}" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">#</th>
                        <th style="width: 40%">Category Name</th>
                        <th style="width: 40%">Status</th>
                        <th style="width: 10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat)
                    <tr>
                        <td>#</td>
                        <td>{{$cat->category_name}}</td>
                        <td>{{$cat->status == 1 ? "Active" : "Inactive"}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('admin/edit-categories/'.$cat->id)}}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
