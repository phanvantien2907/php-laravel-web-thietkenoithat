@extends('admin.layouts.main')
@section('title', 'Quản lý danh mục')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Quản lý danh mục</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/admin/home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Quản lý danh mục</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check-circle"></i> {{ session()->get('success') }}
                        </div>
                    @endif

                    @if (session()->has('edit_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check-circle"></i> {{ session()->get('edit_success') }}
                        </div>
                    @endif

                    @if (session()->has('delete_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa-solid fa-check-circle"></i> {{ session()->get('delete_success') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <a href="{{route('admin.category.create')}}"  class="btn btn-primary">Thêm mới</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Keywords</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php $h = 1; @endphp
                                    @foreach($category as $item)
                                        <tr>
                                            <td>{{$h++}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->seo_keywords}}</td>
                                            @if($item->is_active)
                                                <td><div class="badge badge-success">Active</div></td>
                                            @else
                                                <td><div class="badge badge-danger">Hidden</div></td>
                                            @endif

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('admin.category.edit', $item->category_id) }}" class="btn btn-warning btn-sm rounded-circle mx-1"><i class="fa-solid fa-pencil"></i></a>
                                                    <a href="{{route('admin.category.show', $item->category_id)}}" class="btn btn-info btn-sm rounded-circle mx-1"><i class="fa-solid fa-circle-info"></i></a>
                                                    <form action="{{route('admin.category.destroy', $item->category_id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này ?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded-circle mx-1"><i class="fa-solid fa-delete-left"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    <li class="page-item {{ $category->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $category->previousPageUrl() }}" tabindex="-1">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    @php
                                        $start = max(1, $category->currentPage() - 1);
                                        $end = min($start + 2, $category->lastPage());
                                    @endphp
                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $category->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $category->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="page-item {{ $category->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $category->nextPageUrl() }}">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection
