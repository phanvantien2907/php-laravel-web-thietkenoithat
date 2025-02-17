@extends('admin.layouts.main')
@section('title', 'Quản lý liên hệ')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Quản lý liên hệ</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/admin/home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Quản lý liên hệ</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @php $h = 1; @endphp
                                    @foreach($contact as $item)
                                        <tr>
                                            <td>{{$h++}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->message}}</td>
                                            @if($item->is_active)
                                                <td><div class="badge badge-success">Đã xử lý</div></td>
                                            @else
                                                <td><div class="badge badge-danger">Chưa xử lý</div></td>
                                            @endif

                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{route('admin.contact.edit', $item->contact_id) }}" class="btn btn-warning btn-sm rounded-circle mx-1"><i class="fa-solid fa-pencil"></i></a>
                                                    <a href="{{route('admin.contact.show', $item->contact_id)}}" class="btn btn-info btn-sm rounded-circle mx-1"><i class="fa-solid fa-circle-info"></i></a>
                                                    <form action="{{route('admin.contact.destroy', $item->contact_id) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tin nhắn  này ?');">
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
                                    <li class="page-item {{ $contact->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $contact->previousPageUrl() }}" tabindex="-1">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                    @php
                                        $start = max(1, $contact->currentPage() - 1);
                                        $end = min($start + 2, $contact->lastPage());
                                    @endphp
                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $contact->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $contact->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="page-item {{ $contact->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $contact->nextPageUrl() }}">
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
