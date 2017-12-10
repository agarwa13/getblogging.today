<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

class GuideController extends Controller
{

    public function one(){
        return view('guide.one');
    }

    public function two(Request $request){

        if($request->has('domain_name')){

            $request->validate([
                'domain_name' => 'sometimes|required|url'
            ]);

            try{
                $response = \Unirest\Request::get(
                    "https://domainr.p.mashape.com/v2/status".
                    "?mashape-key="
                    .env('MASHAPE_TESTING')
                    ."&domain="
                    . $request->domain_name,
                    array(
                        "X-Mashape-Key" => env('MASHAPE_TESTING'),
                        "Accept" => "application/json"
                    )
                );

                $domain_availability = $response->body->status->summary;

            }catch(Exception $exception){
                $domain_availability = "Likely Available";
            }


            return view('guide.two')
                ->with('domain_availability',$domain_availability);

        }

        return view('guide.two');

    }

    public function three(){
        return view('guide.three');
    }

    public function four(){
        return view('guide.four');
    }

    public function five(){
        return view('guide.five');
    }

}
