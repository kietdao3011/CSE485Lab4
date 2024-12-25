@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
       <div class="d-flex justify-content-between align-items-center w-100">
           <h1>Danh sách người đọc</h1>
           <a href="{{ route('readers.create') }}" class="btn btn-primary">Thêm người người đọc </a>
       </div>
        <div class="table-responsive pt-3">
            <table class="table  table-striped text-center align-middle">
                <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Tên khách hàng </th>
                    <th>Ngày sinh</th>
                    <th>Địa chỉ nhà </th>
                    <th>Số điện thoại</th>
                    <th class="w-25">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @php( $idReal = 1)
                @foreach ($readers as $reader)
                    <tr>
                        <td style="position: sticky"><?= $idReal ?></td>
                        <td style="position: sticky">{{ $reader->name }}</td>
                        <td style="position: sticky">{{ $reader->birthday }}</td>
                        <td style="position: sticky">{{ $reader->address }}</td>
                        <td style="position: sticky">{{ $reader->phone }}</td>
                        <td>
                            <div class="d-flex justify-content-around ">
                                <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info btn-lg"><i class="bi bi-eye-fill m-1"></i>Xem chi tiết</a>
                                <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning btn-lg"><i class="bi bi-brush m1"></i>Sửa</a>
                                    <a href=""
                                       data-bs-toggle="modal"
                                       data-bs-target="#deleteModal"
                                       data-id="{{ $reader->id }}"
                                       data-name="{{ $reader->name }}"
                                       class="btn btn-danger btn-lg"
                                    >
                                        <i class="bi bi-file-excel m-1"></i>
                                        Xóa
                                    </a>
                                <div class="modal fade " id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa bản ghi</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Bạn có chắc chắc muốn xóa <span id="readerName"></span>? Việc này sẽ không thể thu hồi
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Updated form with dynamic action -->
                                                <form id="deleteForm" action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    @php($idReal = $idReal + 1)
                @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper">
                {{ $readers->links('pagination::bootstrap-5') }}
            </div>
            </div>
        </div>
    </div>
@endsection
