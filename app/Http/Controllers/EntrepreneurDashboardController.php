<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepreneurDashboardController extends Controller
{
    // Middleware is handled in routes/web.php

    /**
     * Show the entrepreneur dashboard
     */
    public function index()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();
        
        // For now, we'll return basic dashboard data
        // Later we'll add products and orders statistics
        $data = [
            'entrepreneur' => $entrepreneur,
            'totalProducts' => 0, // Will be updated when we create products table
            'totalOrders' => 0,   // Will be updated when we create orders table
            'pendingOrders' => 0, // Will be updated when we create orders table
        ];
        
        return view('entrepreneur.dashboard', $data);
    }

    /**
     * Show product management page
     */
    public function products()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();
        
        return view('entrepreneur.products', compact('entrepreneur'));
    }

    /**
     * Show order consultation page
     */
    public function orders()
    {
        $entrepreneur = Auth::guard('entrepreneur')->user();
        
        return view('entrepreneur.orders', compact('entrepreneur'));
    }
}
