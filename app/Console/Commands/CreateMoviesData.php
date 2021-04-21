<?php

namespace App\Console\Commands;

use App\Repository\MovieRepositoryInterface;
use Illuminate\Console\Command;

class CreateMoviesData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'movies:import-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $movieRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        parent::__construct();
        $this->movieRepository = $movieRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('max_execution_time', '1000');
        set_time_limit(1000);
        $movies_json = resource_path('animedata/anime-offline-database.json');
        $movies_json_content = file_get_contents($movies_json);
        $movies_array_of_objects = json_decode($movies_json_content, true);
        foreach ($movies_array_of_objects['data'] as $key => $movie) {
            $this->movieRepository->createMovieFromImportedData($movie);
        }
    }
}
