<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;

use Illuminate\Http\Request;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::all();
        $users = User::where('role_id', 2)->paginate(6);


        $number_of_users = User::distinct('id')->count('id');
        // $number_of_products = Product::distinct('code')->count('id');


        return view('admin.apps-users-list',  ['users' => $users, 'number_of_users' => $number_of_users]);

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
        // التحقق من صحة البيانات المُرسلة
        $validatedData = $request->validate([
            'password' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'phone' => 'nullable|string|max:20', // جعل الهاتف اختياريًا
        ]);

        // إنشاء مستخدم جديد وحفظه في قاعدة البيانات
        $user = new User();
        $user->role_id = 2; // تعيين الدور الافتراضي
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'] ?? null; // حفظ الهاتف إذا وُجد
        $user->password = bcrypt($validatedData['password']); // تعيين كلمة المرور من الإدخال
        $user->save();

        // إعادة الاستجابة الناجحة\
        return redirect()->route('amdin_users');
        // return response()->json(['message' => 'User added successfully!'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsersRequest $request, User $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
