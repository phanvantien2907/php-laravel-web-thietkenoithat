@extends('admin.layouts.main')
@section('title', 'Thêm mới menu')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Thêm mới menu</h1>
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
                                <h4>Thêm mới menu</h4>
                            </div>

                            <div class="card-body">
                                <form action="{{route('admin.menu.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Levels</label>
                                        <input type="text" name="levels" class="form-control" required>
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
                                        <a href="/admin/menu" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
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
