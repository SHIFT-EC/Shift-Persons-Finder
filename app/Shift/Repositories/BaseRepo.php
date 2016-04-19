<?php

namespace Spf\Shift\Repositories;

abstract class BaseRepo
{
    protected $model;

    /**
     * BaseRepo constructor.
     */
    public function __construct()
    {
        $this->model = $this->getModel();
    }

    /**
     * @return mixed
     */
    abstract public function getModel();

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
}