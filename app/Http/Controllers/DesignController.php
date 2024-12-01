<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index()
{
    // Fetch all designs from the database
    $designs = Design::all();

    // Pass the designs to the view
    return view('designs.index', compact('designs'));
}

public function edit($id)
{
    // Find the design by its ID
    $design = Design::findOrFail($id);

    // Return the edit view with the design data
    return view('designs.edit', compact('design'));
}

    public function create()
    {
        return view('designs.create'); // Ensure you have a create.blade.php view
    }

    public function update(Request $request, $id)
    {
        $design = Design::findOrFail($id); // Find the design by ID
        $design->update($request->all()); // Update the design with the incoming data
        return redirect()->route('designs.index'); // Redirect to the design list after update
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'required|url',
        ]);

        // Create a new design record
        Design::create($validated);

        // Redirect or return response after creating the design
        return redirect()->route('designs.index');
    }

    public function destroy($id)
    {
        // Find the design by its ID
        $design = Design::findOrFail($id);

        // Delete the design
        $design->delete();

        // Redirect back to the list with a success message
        return redirect()->route('designs.index')->with('success', 'Design deleted successfully');
    }
}
