@extends('admin.layouts.main')
@section('title', 'Quản lý ảnh dự án')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Quản lý ảnh dự án</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/admin/home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Quản lý ảnh của dự án</div>
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
                                <a href="{{route('admin.project.create')}}"  class="btn btn-primary">Thêm mới</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php $h = 1; @endphp
                                    @foreach($project as $item)
                                        <tr>
                                            <td>{{$h++}}</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->category->title}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>{{$item->description}}</td>
                                        @if($item->is_active)
                                                <td><div class="badge badge-success">Active</div></td>
                                            @else
                                                <td><div class="badge badge-danger">Hidden</div></td>
                                            @endif

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('admin.project.edit', $item->project_id) }}" class="btn btn-warning btn-sm rounded-circle mx-1"><i class="fa-solid fa-pencil"></i></a>
                                                    <a href="{{route('admin.project.show', $item->project_id)}}" class="btn btn-info btn-sm rounded-circle mx-1"><i class="fa-solid fa-circle-info"></i></a>
                                                    <form action="{{route('admin.project.destroy', $item->project_id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa ảnh của dự án này ?');">
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
                                    <li class="page-item {{ $project->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $project->previousPageUrl() }}" tabindex="-1">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    @php
                                        $start = max(1, $project->currentPage() - 1);
                                        $end = min($start + 2, $project->lastPage());
                                    @endphp
                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $project->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $project->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="page-item {{ $project->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $project->nextPageUrl() }}">
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
