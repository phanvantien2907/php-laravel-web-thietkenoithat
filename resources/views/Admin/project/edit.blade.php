@extends('admin.layouts.main')
@section('title', 'Chỉnh sửa ảnh dự án')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Chỉnh sửa ảnh dự án</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Chỉnh sửa ảnh dự án</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chỉnh sửa ảnh dự án</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.project.update', $project->project_id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{$project->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$project->slug}}" required readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" value="{{$project->description}}" required>
                                    </div>

                                    <select name="category_id" class="form-control" required>
                                        <option selected>Select category</option>
                                        @foreach($category as $item)
                                            <option value="{{$item->category_id}}" {{$item->category_id == $project->category_id ? 'selected' : ''}}>
                                                {{$item->title}}
                                            </option>
                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" value="{{$project->meta_title}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <input type="text" name="meta_description" class="form-control" value="{{$project->meta_description}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea name="detail" class="summernote" id="" cols="30" rows="10" required>{{$project->detail}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active</label>
                                        <select name="is_active" class="form-control" required>
                                            <option value="1" {{$project->is_active == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$project->is_active == 0 ? 'selected' : ''}}>Hidden</option>
                                        </select>
                                    </div>

                                    <div class="d-flex">
                                        <input type="submit" value="Edit" class="btn btn-primary rounded-pill btn-lg me-2 mx-1" />
                                        <a href="{{route('admin.project.index')}}" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
