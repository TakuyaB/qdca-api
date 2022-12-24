<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuotationRequest;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{

    protected $quotation;

    /**
     * constructor
     */
    public function __construct(Quotation $quotation)
    {
        $this->quotation = $quotation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => true,
            'quotation' => $this->quotation->all(),
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
        return response()->json([
            'status' => true,
            'message' => 'Quotation Created Successfully!',
            'quotation' => $this->quotation->create($request->all()),
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'status' => true,
            'message' => 'Quotation Displayed successfully!',
            'quotation' => $this->quotation->find($id),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(StoreQuotationRequest $request)
    {
        return response()->json([
            'status' => true,
            'message' => 'Quotation Updated successfully!',
            'quotation' => $this->quotation->update($request->all()),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quotation  $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->quotation->find($id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Quotation Deleted successfully!',
        ], 200);
    }
}
