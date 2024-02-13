<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('product.lists');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'price' => 'required|float',
                'quantity' => 'required|integer',
                'description' => 'required|min:6',
                'content' => 'required',
            ],
            [
                'required' => ':attribute không được để trống',
                'max' => ':attribute không được lớn hơn :max ký tự',
                'float' => ':attribute phải là số nguyên',
                'integer' => ':attribute phải là số nguyên',
                'min' => ':attribute không được nhỏ hơn :min ký tự',
            ],
            [
                'title' => 'Tiêu đề',
                'price' => 'Giá',
                'quantity' => 'Số lượng',
                'description' => 'Mô tả ngắn',
                'content' => 'Nội dung',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
