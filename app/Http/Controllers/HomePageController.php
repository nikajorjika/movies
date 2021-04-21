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
        $sliderMovies = $this->movieRepository->getSliderMovies();
        $topMovieList = $this->movieRepository->topMovies();

        return view('pages.index', compact('sliderMovies', 'topMovieList'));
    }
}
