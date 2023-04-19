<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductAttachments;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductAttachmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'product_id' => 'required|',
        ]);

        if(Products::find($request->input('product_id'))){
            $image_path = $request->file('image')->store('image', 'public');

            $image = ProductAttachments::create([
                'image' => $image_path,
                'product_id' => $request->input('product_id'),
            ]);

            return [
                "status" => 200,
                "data" => $image
            ];
        }else{
            return [
                "status" => 404,
                "message" => "Invalid Product ID"
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAttachments  $productAttachments
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAttachments $productAttachments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAttachments  $productAttachments
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAttachments $productAttachments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductAttachments  $productAttachments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductAttachments $productAttachments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAttachments  $productAttachments
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAttachments $productAttachments)
    {
        //
    }
}
