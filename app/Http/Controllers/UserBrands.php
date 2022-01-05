<?php

namespace App\Http\Controllers;

use App\Models\UserBrands as ModelsUserBrands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class UserBrands extends Controller
{
    public function index(){
        return view('welcome', [
            'questions' => ModelsUserBrands::get(),
            'answers' => $this->totalUserBrands()
        ]);
    }

    public function apiUser(){
        return Response::json($this->totalUserBrands());
    }

    private function totalUserBrands() {
        $from = '2021-10-20 07:00:00';
        $to = '2021-10-20 08:00:00';
        $data = DB::select(DB::raw("select longitude, latitude, brand , concat('".$from."', ' to ', '".$to."') as 'range', sum(user_count) as 'user_per_brand', (select sum(user_count) from users_brands ab where ab.longitude = ub.longitude) as total_user from users_brands ub where `time` between '". $from . "' and '" .$to. "' group by longitude, brand"));
        return $data;
    }
}
