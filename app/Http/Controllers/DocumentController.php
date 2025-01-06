<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return response()->json(Document::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'file_path' => 'required|string',
        ]);

        $document = Document::create($request->all());
        return response()->json(['success' => true, 'data' => $document], 201);
    }

    public function show($id)
    {
        $document = Document::findOrFail($id);
        return response()->json(['success' => true, 'data' => $document]);
    }

    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);
        $document->update($request->all());
        return response()->json(['success' => true, 'data' => $document]);
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();
        return response()->json(['success' => true, 'message' => 'Document deleted successfully'], 204);
    }
}
