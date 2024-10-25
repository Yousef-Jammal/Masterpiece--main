<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use App\Http\Requests\StorestoresRequest;
use App\Http\Requests\UpdatestoresRequest;
use Illuminate\Http\Request;

use function Livewire\store;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores = Store::paginate(6);
        $users = User::all(); // Get all users


        return view('admin.apps-ecommerce-sellers', [
            'stores' => $stores,
            'users' => $users,
        ]);
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

        $validatedData = $request->validate([
            'companyName' => 'required|string|max:255',
            'companyDescription' => 'required|string',
            'userID' => 'required|exists:users,id',
        ]);


        $store = new Store();
        $store->name = $validatedData['companyName'];
        $store->discrption = $validatedData['companyDescription'];
        $store->user_id = $validatedData['userID'];
        $store->save();

        // Redirect or return a response
        return redirect()->route('stores')->with('success', 'Company created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Store $stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $stores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestoresRequest $request, Store $stores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $stores)
    {
        //
    }
}
