@extends('admin.layouts.main')
@section('title', 'Thêm mới thành viên')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Thêm mới thành viên</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Thêm mới thành viên</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Thêm mới thành viên</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{route('admin.team.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="first_name" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="text" name="image" id="image-input" class="form-control" required>
                                        <button type="button" id="choose-image-btn" class="btn btn-primary mt-2">Choose a picture</button>
                                    </div>


{{--                                    <div class="form-group">--}}
{{--                                        <label class="control-label">Ảnh</label>--}}
{{--                                        <div class="input-group mb-3">--}}
{{--                                            <div class="input group-preprend">--}}
{{--                                                <button type="button" class="btn btn-success btn-round" onclick="openElFinder()">Choose a picture</button>--}}
{{--                                            </div>--}}
{{--                                            <input type="text" class="form-control" id="image" aria-describedby="button-addon2">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group">
                                        <label>Is_active</label>
                                        <select name="is_active" class="form-control" required>
                                            <option value="1">Active</option>
                                            <option value="0">Hidden</option>
                                        </select>
                                    </div>

                                    <div class="d-flex">
                                        <input type="submit" value="Create" class="btn btn-primary rounded-pill btn-lg me-2 mx-1" />
                                        <a href="{{route('admin.team.index')}}" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
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
