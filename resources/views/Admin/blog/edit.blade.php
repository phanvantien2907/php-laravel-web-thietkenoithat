@extends('admin.layouts.main')
@section('title', 'Chỉnh sửa bài viết')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Chỉnh sửa bài viết</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Chỉnh sửa bài viết</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chỉnh sửa bài viết</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.blog.update', $blog->blog_id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$blog->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$blog->slug}}" required readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" value="{{$blog->description}}" required>
                                    </div>

                                    <select name="user_id" class="form-control" required>
                                        <option selected>Select author</option>
                                        @foreach($user as $item)
                                            <option value="{{$item->user_id}}" {{$item->user_id == $blog->user_id ? 'selected' : ''}}>
                                                {{$item->last_name}}
                                            </option>
                                        @endforeach
                                    </select>


                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="text" name="image" id="image-input" class="form-control" value="{{$blog->image}}">
                                        <button type="button" id="choose-image-btn" class="btn btn-primary mt-2">Choose a picture</button>
                                    </div>

                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea name="detail" class="summernote" id="" cols="30" rows="10" required>{{$blog->detail}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active</label>
                                        <select name="is_active" class="form-control" required>
                                            <option value="1" {{$blog->is_active == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$blog->is_active == 0 ? 'selected' : ''}}>Hidden</option>
                                        </select>
                                    </div>

                                    <div class="d-flex">
                                        <input type="submit" value="Edit" class="btn btn-primary rounded-pill btn-lg me-2 mx-1" />
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
