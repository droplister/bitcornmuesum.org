<?php

namespace App\Http\Controllers;

use Curl\Curl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->curl = new Curl();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = $this->getCards();

        return view('home', compact('cards'));
    }

    /**
     * Get Cards API
     * 
     * @return array
     */
    private function getCards()
    {
        $this->curl->get('https://bitcorns.com/api/cards');

        if ($this->curl->error) return []; // Some Error

        return json_decode($this->curl->response, true);
    }
}