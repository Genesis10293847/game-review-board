<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GameReviewController extends Controller
{
    public function index(): View
    {
        $gameReviews = [
            [
                'author'=>'Jeremy',
                'game_title'=>'Candy Crush',
                'review'=>'I would play over and over',
                'rating'=>4
            ],
            [
                'author'=>'Zoey',
                'game_title'=>'league',
                'review'=>'First Blood',
                'rating'=>5
            ],
        ];
        return view('game-reviews.index', ['gameReviews' => $gameReviews, ]);
    }
}
