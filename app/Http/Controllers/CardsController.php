<?php

namespace App\Http\Controllers;

use Curl\Curl;
use Illuminate\Http\Request;

class CardsController extends Controller
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
     * Show the card.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($card)
    {
        $card = $this->getCard($card);

        return view('card', compact('card'));
    }

    /**
     * Get Cards API
     * 
     * @return array
     */
    private function getCard($card)
    {
        $this->curl->get('https://bitcorns.com/api/cards/' . $card);

        if ($this->curl->error) return []; // Some Error

        return json_decode($curl->this->response, true);
    }
}