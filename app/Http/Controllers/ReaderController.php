<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class ReaderController extends Controller
{
    protected $fillable = ['field1', 'field2', 'field3']; // Thay thế các field bằng tên cột trong cơ sở dữ liệu của bạn

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy danh sách readers và phân trang
        $readers = Reader::orderBy('updated<i class="bi bi-brush"></i>_at', 'desc')->paginate(10);
        return view("readers.index", compact('readers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $readers = Reader::create($request->all());
        return redirect()->route('readers.index') ->with('success', 'Thêm thành công người đọc mới !');
    }

    public function update(Request $request, string $id)
    {
        $reader = Reader::findOrFail($id);
        $reader->update($request->all());
        return redirect()->route('readers.index') ->with('success','Sửa thành công thông tin người đọc này !');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $readers = Reader::findOrFail($id);
        return view('readers.show', compact('readers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $readers = Reader::findOrFail($id);
        return view('readers.edit', compact('readers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $readers = Reader::findOrFail($id);
        $readers->delete();
        return redirect()->route('readers.index') ->with('success','Xóa thành công người đọc này !');
    }
}
