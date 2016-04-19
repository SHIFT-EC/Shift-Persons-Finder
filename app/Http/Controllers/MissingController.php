<?php

namespace Spf\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Spf\Http\Requests;
use Spf\Http\Requests\MissingCreateRequest;
use Spf\Http\Requests\MissingUpdateRequest;
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
        $this->missingRepository->createMissing($request);

        return redirect()->back();
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
        $missing = $this->missingRepository->getMissing($id);

        return view('missing.edit', compact('missing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request|MissingUpdateRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MissingUpdateRequest $request, $id)
    {
        $this->missingRepository->updateMissing($request, $id);

        return redirect()->back();
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
