<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurposeOfVisitController extends Controller
{
    public function getAll(Request $request)
    {
        // Get query parameters
        //$parameter1 = $request->input('parameter1');
        //$parameter2 = $request->input('parameter2');

        // Perform any logic based on the parameters
        // For example, you can fetch data from the database

        // Create a sample response
        $response = [
            //'parameter1' => $parameter1,
            //'parameter2' => $parameter2,
            'message' => 'Data fetched successfully!',
        ];

        // Return a JSON response
        return response()->json($response);
    }
}
