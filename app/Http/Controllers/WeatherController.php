<?php

namespace App\Http\Controllers;

use App\Helpers\ConvertHelper;
use App\Http\Requests\WeatherRequest;
use App\Repositories\WeatherRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
    public function index(WeatherRequest $request): View
    {
        $response = ConvertHelper::jsonToView($this->aboutRepository->index($request));

        return view('weather', [
            'data' => $response,
        ]);
    }
}
