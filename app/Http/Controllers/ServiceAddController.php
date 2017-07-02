<?php

namespace App\Http\Controllers;

use App\Service;
use Validator;
use Illuminate\Http\Request;

class ServiceAddController extends Controller
{
    public function execute(Request $request) {
        if ($request->isMethod('post')) {
            $input = $request->except('_token');
            $validator = Validator::make($input,[
               'name' => 'required|max:255',
               'text' => 'required|max:255',
               'icon' => 'required',
            ]);

            if($validator->fails()) {
                return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
            }

            if($request->hasFile('icon')) {
                $file = $request->file('icon');
                $input['icon']= $file->getClientOriginalName();

                $file->move(public_path().'/assets/img',$input['icon']);
            }
            $portfolio = new Service();
            $portfolio->fill($input);
            if($portfolio->save()) {
                return redirect('admin')->with('status','Портфолио добавлено');
            }
        }
        if (view()->exists('admin.services_add')) {
            $data = [
                'title' => 'Добавить сервис',
            ];
            return view('admin.services_add',$data);
        }
    }
}
