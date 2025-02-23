@extends('admin.layouts.main')
@section('title', 'Chi tiết thành viên')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Chi tiết thành viên</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Thêm mới menu</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chi tiết thành viên</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>First Name: </label>
                                        <label>{{$team->first_name}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Last Name: </label>
                                        <label>{{$team->last_name}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug: </label>
                                        <label>{{$team->slug}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Title: </label>
                                        <label>{{$team->title}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Image: </label>
                                        <img src="{{asset($team->image)}}" width="85" height="85" alt="ảnh của {{$team->first_name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active:</label>
                                        <label>
                                            @if($team->is_active)
                                                <span class="text-success font-weight-bold">Hiển thị <i class="fas fa-check-circle"></i></span>
                                            @else
                                                <span class="text-danger font-weight-bold">Ẩn <i class="fas fa-times"></i></span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="d-flex">
                                        <a href="{{route('admin.team.edit', $team->member_id)}}" class="btn btn-primary rounded-pill btn-lg me-2 mx-1">Edit</a>
                                        <a href="/admin/team" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
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
