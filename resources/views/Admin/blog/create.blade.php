@extends('admin.layouts.main')
@section('title', 'Thêm mới bài viết')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Thêm mới bài viết</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Thêm mới bài viết</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Thêm mới bài viết</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{route('admin.blog.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Author</label>
                                        <select name="user_id" class="form-control" required>
                                            <option selected>Select author</option>
                                            @foreach($user as $item)
                                                <option value="{{$item->user_id}}">{{$item->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" required readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="text" name="image" id="image-input" class="form-control" required>
                                        <button type="button" id="choose-image-btn" class="btn btn-primary mt-2">Choose a picture</button>
                                    </div>

                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea name="detail" class="summernote" id="" cols="30" rows="10" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active</label>
                                        <select name="is_active" class="form-control" required>
                                            <option value="1">Active</option>
                                            <option value="0">Hidden</option>
                                        </select>
                                    </div>

                                    <div class="d-flex">
                                        <input type="submit" value="Create" class="btn btn-primary rounded-pill btn-lg me-2 mx-1" />
                                        <a href="{{route('admin.blog.index')}}" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('choose-image-btn').addEventListener('click', function() {
            var win = window.open('/admin/file-manager/popup/', 'elFinder', 'width=900,height=500');
            win.onload = function() {
                win.processSelectedFile = function(fileUrl) {
                    document.getElementById('image-input').value = fileUrl;
                    win.close();
                };
            };
        });
    </script>
@endsection
