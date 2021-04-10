<?php

namespace App\Repository\Eloquent;

use App\Models\Movie;
use App\Repository\MovieRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use stdClass;

class MovieRepository extends BaseRepository implements MovieRepositoryInterface
{
    /**      
     * @var Movie      
     */
    protected $model;

    /**      
     * MovieRepository constructor.      
     *      
     * @param Movie $model      
     */
    public function __construct(Movie $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Movie
     */
    public function create(array $attributes): Movie
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $sid
     * @return Movie
     */
    public function find($sid): ?Movie
    {
        return $this
            ->model
            ->with('episodes')
            ->where('id', $sid)
            ->orWhere('slug', $sid)
            ->firstOrFail();
    }

    /**
     * @return Collection
     */
    public function topMovies(): Collection
    {
        return $this->model->with('episodes')->take(12)->get();
    }

    /**
     * @return Collection
     */
    public function getSliderMovies(): Collection
    {
        return $this->model->take(5)->get();
    }

    /**
     * @param Array $importedObject
     * @return Movie
     */
    public function createMovieFromImportedData(array $importedObject): ?Movie
    {
        $movie = new Movie([
            'name' => (string) $importedObject['title'],
            'slug' => Str::slug($importedObject['title'], '-'),
            'type' => $importedObject['type'],
            'other_names' => $importedObject['synonyms'],
            'sources' => $importedObject['sources'],
            'relations' => $importedObject['relations'],
            'year' => $importedObject['animeSeason']['year'],
            'status' => strtolower($importedObject['status']),
        ]);
        $movie->save();
        $movie->syncTags($importedObject['tags']);
        return $movie;
    }
}
