<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuotationRequest;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $quotation = Quotation::all();

        return response()->json([
            'status' => true,
            'quotation' => $quotation,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotationRequest $request)
    {
        $quotation = Quotation::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Quotation Created Successfully!',
            'quotation' => $quotation,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
        return response()->json([
            'status' => true,
            'message' => 'Quotation Displayed successfully!',
            'quotation' => $quotation,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(StoreQuotationRequest $request, Quotation $quotation)
    {
        
        $quotation->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Quotation Updated successfully!',
            'quotation' => $quotation,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        
        $quotation->delete();

        return response()->json([
            'status' => true,
            'message' => 'Quotation Deleted successfully!',
        ], 200);
    }
}
