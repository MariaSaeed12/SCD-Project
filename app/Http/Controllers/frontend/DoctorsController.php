<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor; // Import the Doctor model

class DoctorsController extends Controller
{
    /**
     * Show the doctors' page with optional search and category filters.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Retrieve the search term and category from the request
        $searchTerm = $request->input('searchTerm');
        $category = $request->input('category');

        // Query the doctors table
        $doctorsQuery = Doctor::query(); // Use the correct class name

        // Apply search term filter if provided
        if (!empty($searchTerm)) {
            $doctorsQuery->where('name', 'like', '%' . $searchTerm . '%')
             ->orWhere('specialization', 'like', '%' . $searchTerm . '%');

        }

        // Apply category filter if provided
        if (!empty($category)) {
            $doctorsQuery->where('category_id', $category);
        }

        $searchTerm = $request->input('searchTerm', null);


        // Get the filtered list of doctors
        $doctors = $doctorsQuery->get();

        // Pass data to the view
        return view('frontend.doctors', [
            'doctors' => $doctors,
            'searchTerm' => $searchTerm,
            'category' => $category
        ]);
    }
}
