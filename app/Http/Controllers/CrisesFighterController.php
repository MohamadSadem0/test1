<?php
namespace App\Http\Controllers;

use App\Models\CrisesFighter;
use Illuminate\Http\Request;

class CrisesFighterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.jwt');
    }

    public function index()
    {
        return CrisesFighter::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'category_id' => 'required|exists:categories,category_id'
        ]);

        $crisesFighter = CrisesFighter::create($request->all());
        return response()->json($crisesFighter, 201);
    }

    public function show($id)
    {
        $crisesFighter = CrisesFighter::findOrFail($id);
        return response()->json($crisesFighter);
    }

    public function update(Request $request, $id)
    {
        $crisesFighter = CrisesFighter::findOrFail($id);

        $request->validate([
            'user_id' => 'exists:users,user_id',
            'category_id' => 'exists:categories,category_id'
        ]);

        $crisesFighter->update($request->all());
        return response()->json($crisesFighter);
    }

    public function destroy($id)
    {
        $crisesFighter = CrisesFighter::findOrFail($id);
        $crisesFighter->delete();
        return response()->json(null, 204);
    }
}
