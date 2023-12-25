<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRegisterRequest;
use App\Models\register_paymets;
use Illuminate\Http\Request;

class PaymentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = register_paymets::paginate(5);
        return view('generate_reports.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = new register_paymets();
        return view('generate_reports.create', compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRegisterRequest $request)
    {
        register_paymets::create($request->validated());
        return redirect()->route('payment_register.index')->with('status', 'Registro creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(register_paymets $register_paymets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register_paymets $register_paymets)
    {
        return view('generate_reports.edit', compact('register_paymets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRegisterRequest $request, register_paymets $register_paymets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register_paymets $register_paymets)
    {
        //
    }
}
