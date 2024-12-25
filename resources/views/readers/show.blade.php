@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center text-primary p-3">Thông Tin Người Đọc</h1>
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h2>{{ $readers->name }}</h2>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Ngày sinh:</strong> {{ $readers->birthday }}</li>
                    <li class="list-group-item"><strong>Địa chỉ:</strong> {{ $readers->address }}</li>
                    <li class="list-group-item"><strong>Số điện thoại:</strong> {{ $readers->phone }}</li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('readers.index') }}" class="btn btn-outline-secondary px-4">Quay Lại</a>
        </div>
    </div>
@endsection
