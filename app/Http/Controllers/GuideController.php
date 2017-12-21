<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

class GuideController extends Controller
{


    public function one(Request $request){

        if($request->has('domain_name')){
            return $this->oneWithDomain($request);
        }

        return view('guide.one')
            ->with('domain_availability','Yahoo.com is a domain');
    }

    public function oneWithDomain(Request $request){

        $request->validate([
            'domain_name' => 'sometimes|required|url'
        ]);

        try{
//            $response = \Unirest\Request::get(
//                "https://domainr.p.mashape.com/v2/status".
//                "?mashape-key="
//                .env('MASHAPE_TESTING')
//                ."&domain="
//                . $request->domain_name,
//                array(
//                    "X-Mashape-Key" => env('MASHAPE_TESTING'),
//                    "Accept" => "application/json"
//                )
//            );
//
//            $domain_availability = $response->body->status->summary;

            $domain_availability = "Yahoo.com is available";

        }catch(Exception $exception){
            $domain_availability = "Likely Available";
        }

    return view('guide.one')
        ->with('domain_availability',$domain_availability);

    }

    public function two(){
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
