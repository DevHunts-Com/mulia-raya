<?php

namespace App\Controllers\Api;

use App\Libraries\ApiService;
use App\Controllers\BaseController;

class ApiServicesController extends BaseController
{
    protected $apiServices;

    public function __construct()
    {
        $this->apiServices = new ApiService();
        helper('filesystem');
    }

    public function index()
    {
        return 'Service Api';
    }

    public function authenticate() {

        $request = [
            'grant_type' => 'password',
            'client_id' => env('CLIENT_ID'),
            'client_secret' => env('CLIENT_SECRET'),
            'username' => 'admin.crm@muliaraya.co.id.fullsb',
            'password' => 'metrodata.2'
        ];
       
        $response = $this->apiServices->auth($request);
        // write file
        $path = WRITEPATH . 'uploads/';
        $filename = 'authenticate.json';
        $data = $response;
        if (!write_file($path . $filename, $data)) {
            dd('Unable to write the file');
        } else {
            dd('File written!');
        }
    }

    public function soInvoice() {
        $request = [
            'limit' => 10,
            'offset' => 0,
            'startdate' => '2022-01-07',
            'enddate' => '2022-01-18'
        ];

        $access_token = $this->request->getVar('access_token');

        if(!$access_token) {
            dd('Access Token is required');
        }

        $response = $this->apiServices->getSoInvoice($request, $access_token);

        // write file
        $path = WRITEPATH . 'uploads/';
        $filename = 'so_invoice.json';
        $data = $response;
        if (!write_file($path . $filename, $data)) {
            dd('Unable to write the file');
        } else {
            dd('File written!');
        }
        

    }

    public function soReturn() {
        $request = [
            'limit' => 10,
            'offset' => 0,
            // 'startdate' => '2022-01-07',
            // 'enddate' => '2022-01-18'
        ];

        $access_token = $this->request->getVar('access_token');

        if(!$access_token) {
            dd('Access Token is required');
        }

        $response = $this->apiServices->getSoReturn($request, $access_token);
        // write file 
        $path = WRITEPATH . 'uploads/';
        $filename = 'so_return.json';
        $data = $response;
        if (!write_file($path . $filename, $data)) {
            dd('Unable to write the file');
        } else {
            dd('File written!');
        }
    }
}
