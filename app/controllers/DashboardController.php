<?php

use lib\Weatherstation\WeatherstationReader;

class DashboardController extends BaseController
{
    protected $layout = 'master';

    public function showDashboard()
    {
//        var_dump(base_path());exit;
        $weatherstationReader = new WeatherstationReader(base_path() . DIRECTORY_SEPARATOR . 'data/testdata');

        $this->layout->content = View::make('dashboard.dashboard', array('data' => $weatherstationReader->getData()));
    }
}
