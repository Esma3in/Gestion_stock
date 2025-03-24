<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categorie;
use App\Models\Customers;
use App\Models\Order;
use App\Models\Products;
use App\Models\Stock;
use App\Models\Store;
use App\Models\Suppliers;
use App\Models\Transaction;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $totalCustomers = Customers::count();
        
        $totalSuppliers = Suppliers::count();

        $clients = Customers::all();

        $fournisseur = Suppliers::all();



        return view('dashboard',compact(
            'totalCustomers',
            'totalSuppliers',
            'clients',
            'fournisseur',
            
        ));

    }
    public function prod(){
        $produits = Products::all();
        $totalProducts = Products::count();


        return view('products',compact(
            'totalProducts',
            'produits'
        ));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
