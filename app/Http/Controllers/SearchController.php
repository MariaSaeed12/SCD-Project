<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor; // Assuming this is the model for doctors

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query from the AJAX request
        $query = $request->input('query');

        // Perform the search for doctors based on name or specialization
        $results = Doctor::where('name', 'LIKE', "%{$query}%")
            ->orWhere('specialization', 'LIKE', "%{$query}%") // Adjust field as necessary
            ->get();

        // Return a JSON response with the results
        return response()->json($results);
    }
}
