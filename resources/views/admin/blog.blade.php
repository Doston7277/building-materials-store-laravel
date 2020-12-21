@extends('admin.main')
@section('section')
    <div class="container mt-5">
        <form action="/insert" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>Text</label>
              <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection