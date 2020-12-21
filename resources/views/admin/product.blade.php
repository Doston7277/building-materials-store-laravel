@extends('admin.main')
@section('section')
    <div class="container mt-5">
        <form action="/product_insert" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Cost</label>
                <input type="text" name="cost" class="form-control">
            </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>    
    </div>
@endsection