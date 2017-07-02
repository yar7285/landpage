<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function execute() {
        if (view()->exists('admin.service')) {
            $services = Service::all();
            $data = [
                'title' => 'Сервисы',
                'services' => $services,
            ];


            return view('admin.service',$data);
        }
    }
}
