<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Http\Requests\Storeorder_itemsRequest;
use App\Http\Requests\Updateorder_itemsRequest;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeorder_itemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItem $order_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItem $order_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateorder_itemsRequest $request, OrderItem $order_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItem $order_items)
    {
        //
    }
}
