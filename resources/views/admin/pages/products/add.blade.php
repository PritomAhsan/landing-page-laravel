@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Product</h1>
@stop

@section('content')
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <form action="{{url('admin/add-product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id" id="category">
                            <option value="">Select Category</option>
                            @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Sub Category</label>
                        <select class="form-control" name="sub_category_id" id="subcategory">

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleInputEmail1" placeholder="Enter Product Name">
                    </div>

                    <div class="form-group">
                        <label>Select</label>
                        <select class="form-control" name="status">
                            <option value="">Select Status</option>
                            <option value="1" selected>Active</option>
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
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {

        $('#category').on('change',function(e) {

         var category_id = e.target.value;
         $.ajax({

               url:"{{ url('admin/subcat') }}",
               type:"POST",
               data: {
                    category_id: category_id
                },

               success:function (data) {
                $('#subcategory').empty();
                $.each(data.subcategories[0].subcategories,function(index,subcategory){

                    $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                })
               }
           })
        });
    });
</script>
@stop
