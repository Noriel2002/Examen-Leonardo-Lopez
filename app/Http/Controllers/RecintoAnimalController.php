<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RecintoAnimalController as RecintoAnimalControllerRequest;

class RecintoAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param RecintoAnimalControllerRequest\RecintoAnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(RecintoAnimalControllerRequest\RecintoAnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param RecintoAnimalControllerRequest\RecintoAnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(RecintoAnimalControllerRequest\RecintoAnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param RecintoAnimalControllerRequest\RecintoAnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(RecintoAnimalControllerRequest\RecintoAnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param RecintoAnimalControllerRequest\RecintoAnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(RecintoAnimalControllerRequest\RecintoAnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param RecintoAnimalControllerRequest\RecintoAnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(RecintoAnimalControllerRequest\RecintoAnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
