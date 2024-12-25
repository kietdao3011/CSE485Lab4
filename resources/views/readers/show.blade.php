@extends('layouts.app')

@section('content')
    <div class="container-fluid" >
        <h1 class="text-center text-primary p-3">Thong tin nguoi doc</h1>
        <table class="table mt-3">
            <thead class="text-center">
            <tr>
                <th class="border border-secondary">Tên</th>
                <th class="border border-secondary">Ngày sinh</th>
                <th class="border border-secondary">Địa chi</th>
                <th class="border border-secondary">Số điện thoại</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td class="m-4 border border-secondary">{{ $readers->name}}</td>
                <td class="m-4 border border-secondary">{{ $readers->birthday}}</td>
                <td class="m-4 border border-secondary">{{ $readers->address}}</td>
                <td class="m-4 border border-secondary">{{ $readers->phone}}</td>
            </tr>
        </table>
        <a href="{{ route('readers.index') }}" class="btn btn-outline-secondary mt-3 px-4">Back</a>
    </div>
@endsection
