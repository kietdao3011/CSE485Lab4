@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="max-width: 70%">
        <h1 class="text-center text-primary mb-4">Reader New</h1>
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="bg-body-secondary p-4">
                <div class="form-group">
                    <h6 class="mb-2">Tên</h6>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Ngày sinh</h6>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Địa chỉ </h6>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="form-group mt-4">
                    <h6 class="mb-2">Số điện thoại </h6>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-4 px-4">Thêm</button>
            </div>
        </form>
    </div>
@endsection
