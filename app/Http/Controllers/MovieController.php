<?php

namespace App\Http\Controllers;

use App\Repository\MovieRepositoryInterface;

class MovieController extends Controller
{

    private $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function index(string $slug)
    {
        $movie = $this->movieRepository->find($slug);
        dd($movie);
        return view('pages.details', compact('movie'));
    }
}
