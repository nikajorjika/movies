<?php

namespace App\Repository;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Collection;

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
   * @return Collection
   */
  public function topMovies(): Collection;
}
