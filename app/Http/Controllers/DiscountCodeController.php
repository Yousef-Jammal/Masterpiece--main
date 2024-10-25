<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MOdels\DiscountCode;

class DiscountCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function checkCode(Request $request)
    {
        $code = $request->input('code');

        $discount = DiscountCode::where('code', $code)->first();

        if ($discount && $discount->isValid()) {
            return response()->json([
                'valid' => true,
                'discount_amount' => $discount->discount_amount,
                'discount_percentage' => $discount->discount_percentage,
                'minimum_order_amount' => $discount->minimum_order_amount,
            ]);
        }

        return response()->json(['valid' => false]);
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
    public function store(Request $request)
    {
        //
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
