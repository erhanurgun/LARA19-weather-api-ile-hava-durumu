<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeatherRequest;
use App\Repositories\WeatherRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    /**
     * @var WeatherRepository
     */
    private $aboutRepository;

    /**
     * WeatherController constructor.
     * @param WeatherRepository $aboutRepository
     */
    public function __construct(WeatherRepository $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(WeatherRequest $request): JsonResponse
    {
        return $this->aboutRepository->index($request);
    }
}
