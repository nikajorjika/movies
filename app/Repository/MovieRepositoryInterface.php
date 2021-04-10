<?php

namespace App\Repository;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface MovieRepositoryInterface
{
  /**
   * @param array $attributes
   * @return Movie
   */
  public function create(array $attributes): Movie;

  /**
   * @param $id
   * @return Movie
   */
  public function find($id): ?Movie;

  /**
   * @return Collection
   */
  public function getSliderMovies(): Collection;

  /**
   * @param Array $importedObject
   * @return Movie
   */
  public function createMovieFromImportedData(Array $importedObject): ?Movie;

  /**
   * @return Collection
   */
  public function topMovies(): Collection;
}
