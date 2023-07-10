<?php

namespace App\Controllers;

use App\Libraries\ApiService;
use App\Libraries\Services;

class Home extends BaseController
{
    public function index()
    {
        $services = new ApiService();
        
        // $services->authenticate([
        //     'grant_type' => 'password',
        //     'client_id' => env('CLIENT_ID'),
        //     'client_secret' => env('CLIENT_SECRET'),
        //     'client_secret' => 'CEBBCBDF78738DA7AA3D8383C11672F17317D2F9A3B475A979729E65F3D56A53',
        //     'username' => 'admin.crm@muliaraya.co.id.fullsb',
        //     'password' => 'metrodata.2'
        // ]);

        // $services->getSoInvoice([
        //     'limit' => 10,
        //     'offset' => 0,
        //     'startdate' => '2022-01-07',
        //     'enddate' => '2022-01-18'
        // ], '00D6D0000002xWL!ARUAQOK7lH_Du7eVke6O7ZC.2cvPjEArmKP0nsPy7OeByOiXtdwlOOFkaavGmIq82bu40PTwnB9rg32KQcyIXGoXKvD0gFf9');

        // $services->getSoReturn([
        //     'limit' => 90,
        //     'offset' => 0,
        //     'startdate' => '2022-01-07',
        //     'enddate' => '2022-01-18'
        // ], '00D6D0000002xWL!ARUAQOK7lH_Du7eVke6O7ZC.2cvPjEArmKP0nsPy7OeByOiXtdwlOOFkaavGmIq82bu40PTwnB9rg32KQcyIXGoXKvD0gFf9');
        
        

        return view('home/index');
    }
}
