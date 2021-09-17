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
        $viewLocation = "{$this->viewPrefix}.index";

        return view($viewLocation);
    }

}
