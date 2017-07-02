<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Validator;
use Illuminate\Http\Request;

class PortfolioAddController extends Controller
{
    public function execute(Request $request) {

        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name' =>'required|max:255',
                'filter' => 'required|max:60',
            ]);
            if ($validator->fails()) {
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }

            if($request->hasFile('images')) {
                $file = $request->file('images');
                $input['images']= $file->getClientOriginalName();

                $file->move(public_path().'/assets/img',$input['images']);
            }
            $portfolio = new Portfolio();
            $portfolio->fill($input);
            if($portfolio->save()) {
                return redirect('admin')->with('status','Портфолио добавлено');
            }
        }


        if (view()->exists('admin.portfolio_add')) {
            $data = [
                'title' => 'Добавить портфолио',
            ];
            return view('admin.portfolio_add',$data);
        }
    }
}
