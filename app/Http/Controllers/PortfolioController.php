<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function execute() {

        if(view()->exists('admin.portfolio')) {
            $portfolios = Portfolio::all();
            $data = [
                'title' => 'Портофолио',
                'portfolios' => $portfolios,
            ];
            return view('admin.portfolio',$data);
        }else {
            abort(404);
        }
    }
}
