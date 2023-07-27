@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User List</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 10%">#</th>
                        <th style="width: 80%">User Name</th>
                        <th style="width: 10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>#</td>
                        <td>{{$user->name}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('admin/user-edit/'.$user->id)}}">
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
