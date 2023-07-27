@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Products List</h3>
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
                        <th>#</th>
                        <th>Category</th>
                        <th>Product name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>#</td>
                        <td>{{$product->category_id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->image}}</td>
                        <td>{{$product->status}}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('admin/product-edit/'.$product->id)}}">
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
