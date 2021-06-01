<?php

namespace App\Repositories;

use App\Contracts\Repositories\RepositoryInterface;

class CategoryRepository extends BaseRepository implements RepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Category::class;
    }

    public function getCategories($params = null)
    {
        $query = $this->model;

        // Search
        if(isset($params['keyword'])) {
            $query = $query->filter(['alias' => $params['keyword']]);
        }

        // Sort & direction
        if(!isset($params['direction'])) {
            $params['direction'] = 'asc';
        }

        if(!isset($params['sort'])) {
            $params['sort'] = 'id';
        }

        $query = $query->orderBy($params['sort'], $params['direction']);

        // Pagination
        if(!isset($params['per_page'])) {
            $params['per_page'] = 20;
        }

        $query = $query->paginate($params['per_page']);

        return $query;
    }
}
