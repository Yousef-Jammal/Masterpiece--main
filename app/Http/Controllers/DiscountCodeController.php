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
        $discountCodes = DiscountCode::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.tables.discountCodes', compact('discountCodes'));
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
        // return $request;
        $request->validate([
            'code' => 'required|unique:discount_codes',
            'discount_amount' => 'nullable|numeric|min:0',
            'discount_percentage' => 'nullable|numeric|between:0,100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'max_uses' => 'nullable|integer|min:0',
            'minimum_order_amount' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        DiscountCode::create([
            'code' => $request->code,
            'discount_amount' => $request->discount_amount,
            'discount_percentage' => $request->discount_percentage,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'max_uses' => $request->max_uses,
            'minimum_order_amount' => $request->minimum_order_amount,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('discount_codes.index')->with('success', 'Discount code created successfully.');
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
    public function update(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:discount_codes,code,' . $request->this_id,
            'discount_amount' => 'nullable|numeric|min:0',
            'discount_percentage' => 'nullable|numeric|between:0,100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'max_uses' => 'nullable|integer|min:0',
            'minimum_order_amount' => 'nullable|numeric|min:0',
            'is_active' => 'boolean',
        ]);


        $discountCode = DiscountCode::find($request->this_id);      

        $discountCode->update($request->all());

        return redirect()->route('discount_codes.index')->with('success', 'Discount code updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $discountCode = DiscountCode::find($request->this_id);
        $discountCode->delete();

        return redirect()->route('discount_codes.index')->with('success', 'Discount code deleted successfully.');
    }
}
