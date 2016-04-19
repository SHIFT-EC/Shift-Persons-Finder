<?php

namespace Spf\Http\Controllers;

use Illuminate\Http\Request;

use Spf\Http\Requests;
use Spf\Http\Requests\MissingCreateRequest;
use Spf\Shift\Repositories\MissingRepository;

class MissingController extends Controller
{
    /**
     * @var MissingRepository
     */
    private $missingRepository;

    /**
     * MissingController constructor.
     * @param MissingRepository $missingRepository
     */
    public function __construct(MissingRepository $missingRepository)
    {
        $this->missingRepository = $missingRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request|MissingCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MissingCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
