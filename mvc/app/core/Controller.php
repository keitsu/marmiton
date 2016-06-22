<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 15/06/16
 * Time: 10:37
 */
class Controller
{
    public function model($model)
    {
        require_once '../app/models/'. $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}