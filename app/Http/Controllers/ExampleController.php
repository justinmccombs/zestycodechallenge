<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
            return response()->json([
                'email' => 'jtmccombs@gmail.com',
                'name' => [
                    'first' => 'Justin',
                    'last' => 'McCombs',
                ],
                'website' => 'http://justinmccombs.com',
                'github_repo_link' => '',
            ], 201, [
                'Content-Type' => 'application/json; charset-utf-8',
                'Access-Control-Allow-Methods' => 'HEAD, GET, POST, PUT, PATCH, DELETE',
                'Access-Control-Allow-Headers' => $request->header('Access-Control-Request-Headers'),
                'Access-Control-Allow-Origin' => '*',
            ]);
    }
}
