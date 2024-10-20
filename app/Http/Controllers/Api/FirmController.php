<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\FirmResource;
use App\Models\Firm;
use App\Repositories\FirmRepository;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    private $firmRepository;

    public function __construct(FirmRepository $firmRepository)
    {
        $this->firmRepository = $firmRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $firms = $this->firmRepository->all();
        return FirmResource::collection($firms);
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
    public function show(Firm $firm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Firm $firm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Firm $firm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Firm $firm)
    {
        //
    }
}
