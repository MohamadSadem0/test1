<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends \Illuminate\Routing\Controller
{
    // Function to create a new user
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',
            'gender' => 'nullable|string|in:male,female,other',
            'blood_type' => 'nullable|string|max:5',
            'phone_number' => 'nullable|string|max:20',
            'age' => 'nullable|integer|min:0',
            'location' => 'nullable|string|max:100',
            'type' => 'required|string|in:civilian,crises fighter',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'gender' => $request->gender,
            'blood_type' => $request->blood_type,
            'phone_number' => $request->phone_number,
            'age' => $request->age,
            'location' => $request->location,
            'type' => $request->type,
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }

    // Function to fetch a single user by ID
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    // Function to update a user
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id, 'user_id')],
            'gender' => 'nullable|string|in:male,female,other',
            'blood_type' => 'nullable|string|max:5',
            'phone_number' => 'nullable|string|max:20',
            'age' => 'nullable|integer|min:0',
            'location' => 'nullable|string|max:100',
            'type' => 'required|string|in:admin,civilian,crises fighter',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'gender' => $request->gender,
            'blood_type' => $request->blood_type,
            'phone_number' => $request->phone_number,
            'age' => $request->age,
            'location' => $request->location,
            'type' => $request->type,
        ]);

        return response()->json(['message' => 'User updated successfully', 'user' => $user], 200);
    }

    // Function to delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted successfully'], 200);
    }

    // Additional functions...

}
