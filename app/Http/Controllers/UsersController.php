<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
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


        return view('admin.users',  ['users' => $users, 'number_of_users' => $number_of_users]);

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
        $user_id = auth()->user()->id;
        $orders = Order::where('user_id', '=', $user_id)->get();
        $user = User::find($user_id);
        return view('pages.pages-account-settings' , [
            'user'=> $user,
            'orders'=> $orders,
        ]);
    }

    public function updateUserInfo(Request $request)
    {
        $user = User::find($request->this_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->route("amdin_users");
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->this_id);
        $user->delete();
        return redirect()->route("amdin_users");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $users)
    {
        //
    }



    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' => 'يرجى إدخال كلمة المرور الحالية.',
            'new_password.required' => 'يرجى إدخال كلمة المرور الجديدة.',
            'new_password.min' => 'يجب أن تكون كلمة المرور الجديدة 8 أحرف على الأقل.',
            'new_password.confirmed' => 'تأكيد كلمة المرور الجديدة لا يتطابق.',
        ]);

        $user = Auth::user();

        // التحقق من كلمة المرور الحالية
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // تحديث كلمة المرور
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            // 'password',
        ]);

        // return view('pages.pages-account-settings' , [
        //     'user'=> $user,
        // ]);
        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users)
    {
        //
    }
}
