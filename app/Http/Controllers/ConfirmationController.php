<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confirmation;

class ConfirmationController extends \Illuminate\Routing\Controller
{
    // Create a new confirmation
    public function create(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'confirmation_token' => 'required|string|max:100|unique:confirmations,confirmation_token',
            'confirmed' => 'required|boolean',
        ]);

        $confirmation = Confirmation::create([
            'user_id' => $request->user_id,
            'confirmation_token' => $request->confirmation_token,
            'confirmed' => $request->confirmed,
        ]);

        return response()->json(['message' => 'Confirmation created successfully', 'confirmation' => $confirmation], 201);
    }

    // Fetch all confirmations
    public function index()
    {
        $confirmations = Confirmation::all();
        return response()->json(['confirmations' => $confirmations], 200);
    }

    // Fetch a single confirmation by ID
    public function show($id)
    {
        $confirmation = Confirmation::findOrFail($id);
        return response()->json(['confirmation' => $confirmation], 200);
    }

    // Update an existing confirmation
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'confirmation_token' => 'required|string|max:100|unique:confirmations,confirmation_token,'.$id,
            'confirmed' => 'required|boolean',
        ]);

        $confirmation = Confirmation::findOrFail($id);
        $confirmation->update([
            'user_id' => $request->user_id,
            'confirmation_token' => $request->confirmation_token,
            'confirmed' => $request->confirmed,
        ]);

        return response()->json(['message' => 'Confirmation updated successfully', 'confirmation' => $confirmation], 200);
    }

    // Delete a confirmation
    public function destroy($id)
    {
        $confirmation = Confirmation::findOrFail($id);
        $confirmation->delete();
        return response()->json(['message' => 'Confirmation deleted successfully'], 200);
    }
}
