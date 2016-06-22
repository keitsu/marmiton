<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 15/06/16
 * Time: 10:45
 */
class  Home extends Controller
{
    public function index($name = '')
    {
        $user = $this->model('User');
        $user->name = $name;
        
        $this->view('home/index', ['name' => $user->name]);
    }
}