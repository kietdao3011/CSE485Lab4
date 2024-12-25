@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 70%">
        <h1 class="text-center text-primary mb-4">Chỉnh sửa thông tin người đọc</h1>
        <form action="{{ route('readers.update', $readers->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-body-secondary p-4">
                <div class="form-group">
                    <h6 class="mb-2">Tên người đọc </h6>
                    <input type="text" class="form-control" id="name" name="name" value="{{$readers->name}}" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Ngày sinh</h6>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="{{$readers->birthday}}" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Địa chỉ </h6>
                    <input type="text" class="form-control" id="address" name="address" value="{{$readers->address}}" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Số điện thoại </h6>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$readers->phone}}" required>
                </div>
                <button type="submit" class="btn btn-outline-warning mt-4 px-4">Lưu thông tin </button>
            </div>
        </form>
    </div>
@endsection
