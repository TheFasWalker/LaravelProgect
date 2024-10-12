<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Firm\StoreRequest;
use App\Repositories\FirmRepository;
use Illuminate\Http\Request;

class FirmController extends Controller
{
    private $firmRepository;

    public function __construct(FirmRepository $firmRepository){
        $this->firmRepository = $firmRepository;

    }


    public function index(){
        return view('Pages.Admin.firms.index');
    }
    public function create(){
        return view('Pages.Admin.firms.create');
    }

    public function store(StoreRequest $request){
        $data=$request->validated();
        $this->firmRepository->store($data);
        return redirect()->route('admin.firms');

    }
}
