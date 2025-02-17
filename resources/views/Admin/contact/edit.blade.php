@extends('admin.layouts.main')
@section('title', 'Sửa liên hệ')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 class="text-primary">Sửa liên hệ</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Sửa liên hệ</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.contact.update', $contact->contact_id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$contact->name}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" name="email" class="form-control" value="{{$contact->email}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" rows="5" readonly>{!! $contact->message !!}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Is_active</label>
                                        <select name="is_active" class="form-control" required>
                                            <option value="1" {{$contact->is_active == 1 ? 'selected' : ''}}>Đã xử lý</option>
                                            <option value="0" {{$contact->is_active == 0 ? 'selected' : ''}}>Chưa xử lý</option>
                                        </select>
                                    </div>

                                    <div class="d-flex">
                                        <input type="submit" value="Edit" class="btn btn-primary rounded-pill btn-lg me-2 mx-1" />
                                        <a href="{{route('admin.contact.index')}}" class="btn btn-secondary rounded-pill btn-lg mx-3">Cancel</a>
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
