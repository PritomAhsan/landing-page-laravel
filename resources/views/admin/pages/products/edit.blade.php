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
            <form action="{{url('admin/edit-product/'.$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id">
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{$cat->id}}" {{$product->category_id == $cat->id ? 'selected' : ''}}>{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Category</label>
                        <select class="form-control" name="sub_category_id">
                            <option value="">Select Sub Category</option>
                            @foreach ($sub_categories as $scat)
                                <option value="{{$scat->id}}" {{$product->sub_category_id == $scat->id ? 'selected' : ''}}>{{$scat->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" placeholder="Enter Product Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleInputEmail1">
                        <img src="{{asset('assets/img/products/'.$product->image)}}" width="100">
                    </div>

                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Active</option>
                            <option value="2" {{$product->status == 2 ? 'selected' : ''}}>Inactive</option>
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
