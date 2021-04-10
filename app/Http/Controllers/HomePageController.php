<?php

namespace App\Http\Controllers;

use App\Repository\MovieRepositoryInterface;

class HomePageController extends Controller
{
    private $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    /**
     * Homepage view with slider and top movies
     * 
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        ini_set('max_execution_time', '1000');
        set_time_limit(1000);
        $sliderMovies = $this->movieRepository->getSliderMovies();
        $topMovieList = $this->movieRepository->topMovies();
        $movies_json = resource_path('animedata/anime-offline-database.json');
        $movies_json_content = file_get_contents($movies_json);
        $movies_array_of_objects = json_decode($movies_json_content, true);
        foreach ($movies_array_of_objects['data'] as $key => $movie) {
            $this->movieRepository->createMovieFromImportedData($movie);
        }

        return view('pages.index', compact('sliderMovies', 'topMovieList'));
    }
}
