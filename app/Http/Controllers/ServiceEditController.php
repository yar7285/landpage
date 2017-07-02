<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Validator;

class ServiceEditController extends Controller
{
   public function execute(Service $service, Request $request) {
       if($request->isMethod('delete')) {
           $service->delete();
           return redirect('admin')->with('status','Портфолио удалено');
       }
       if ($request->isMethod('post')) {
           $input = $request->except('_token');
           $validator = Validator::make($input,[
               'name' => 'required|max:255',
               'text' => 'required| max:255',
           ]);
           if ($validator->fails()) {
               return redirect()->route('serviceEdit',['service'=>$input['id']])->withErrors($validator);
           }
           if ($request->hasFile('icon')) {
               $file = $request->file('icon');
               $file->move(public_path().'/assets/img',$file->getClientOriginalName());
               $input['icon'] = $file->getClientOriginalName();
           } else {
               $input['icon'] = $input['old_images'];
           }
           unset($input['old_images']);
           $service->fill($input);

           if($service->update()) {
               return redirect('admin')->with('status','Страница обговлена');
           }
       }

       $old = $service->toArray();
       if (view()->exists('admin.services_edit')) {
           $data = [
             'title' => 'Редактировать сервис',
             'data' => $old,
           ];
           return view('admin.services_edit',$data);
       }
   }
}
