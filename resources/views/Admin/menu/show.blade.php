@extends('admin.layouts.main')
@section('title', 'Chi tiết menu')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Chi tiết menu</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Chi tiết menu</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Chi tiết menu</h4>
                            </div>

                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Title:</label>
                                        <label>{{$menu->title}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug:</label>
                                        <label>{{$menu->slug}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Levels:</label>
                                        <label>{{$menu->levels}}</label>
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active:</label>
                                        <label>
                                            @if($menu->is_active)
                                                <span class="text-success font-weight-bold">Hiển thị <i class="fas fa-check-circle"></i></span>
                                            @else
                                                <span class="text-danger font-weight-bold">Ẩn <i class="fas fa-times"></i></span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="d-flex">
                                        <a href="{{route('admin.menu.edit', $menu->menu_id)}}" class="btn btn-primary rounded-pill btn-lg me-2 mx-1">Edit</a>
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
