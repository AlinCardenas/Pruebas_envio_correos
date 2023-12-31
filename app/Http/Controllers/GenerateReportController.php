<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReportRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Report::paginate(5);
        return view('generate_reports.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments = new Report();
        return view('generate_reports.create', compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportRequest $request)
    {
        Report::create($request->validated());
        return to_route('generate_data_report.index')->with('status', 'Registro creado');
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
    public function edit(string $payment)
    {
        $payment= Report::find($payment);
        dd($payment);
        return view('generate_reports.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReportRequest $request, string $id)
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
