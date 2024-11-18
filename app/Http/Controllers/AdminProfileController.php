<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('admin.profile.profile',[
            'user' => $user,
        ]);
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
        // $user = User::find($request->id);

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
        return back()->with('success', 'Password changed successfully.');
    }
}
