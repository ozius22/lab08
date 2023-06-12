<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{

    public function getUsers($id = null)
    {
        if ($id) {
            $user = User::findOrFail($id);
    
            return response()->json($user, 200, [], JSON_PRETTY_PRINT);
        }
    
        $users = User::paginate(10);
    
        $currentPage = $users->currentPage();
        $currentUrl = URL::current() . '?page=' . $currentPage;
    
        $responseData = [
            'current_page' => $currentPage,
            'current_page_url' => $currentUrl,
            'data' => $users->items(),
        ];
    
        return response()->json($responseData, 200, [], JSON_PRETTY_PRINT);
    }

}