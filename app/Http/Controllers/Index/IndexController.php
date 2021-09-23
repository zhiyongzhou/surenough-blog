<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $viewPrefix  = 'index.index';
    protected $routePrefix = 'index.index';

    /**
     * Blog Homepage Show
     * @author dave
     * */
    public function Index()
    {
        //init
        $viewLocation = "{$this->viewPrefix}.index";



        return view($viewLocation);
    }

    /**
     * Get Blog Homepage Introduce Info
     * @author dave
     * */
    private function getIntroduce():array
    {

    }

    /**
     * Get Blog Homepage Content Info
     * @author dave
     * */
    private function getContent():array
    {

    }

    /**
     * Get Blog Homepage Brief Info
     * @author dave
     * */
    private function getBrief():array
    {

    }

}
