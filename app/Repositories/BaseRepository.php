<?php

namespace App\Repositories;

use App\Contracts\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
  protected $model;

  public function __construct()
  {
    $this->setModel();
  }

  abstract public function getModel();

  public function setModel()
  {
    $this->model = app()->make(
        $this->getModel()
    );
  }
}
