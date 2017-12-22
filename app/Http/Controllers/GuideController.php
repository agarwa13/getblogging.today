<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;

class GuideController extends Controller
{


    public function one(){
        return view('guide.one')
            ->with('domain_availability','Example.com is already taken')
            ->with('alert_type','info');
    }

    public function oneWithDomain(Request $request){

        // in case scheme relative URI is passed, e.g., //www.google.com/
        $input = trim($request->domain_name, '/');

        // If scheme not included, prepend it
        if (!preg_match('#^http(s)?://#', $input)) {
            $input = 'http://' . $input;
        }

        // Parse the URL
        $urlParts = parse_url($input);

        // remove www if exists
        $host_names = explode(".", $urlParts['host']);
        if(count($host_names) > 2){
            $domain = $host_names[count($host_names)-2] . "." . $host_names[count($host_names)-1];
        }else{
            $domain = $urlParts['host'];
        }

        // Prepare the request
        $headers = array(
            'Accept' => 'application/json',
            'X-Mashape-Key' => env('MASHAPE_TESTING')
        );

        $query = array(
            'domain' => $domain
        );

        // Check the Domain Name
        $response = \Unirest\Request::get('https://domainr.p.mashape.com/v2/status',$headers,$query);

        // Check if we got an error response
        if( isset ($response->body->errors) ){
            $message = $request->domain_name . " is not available. Try searching for a different domain name.";
            $alert_type = 'danger';
        }else{
            // Compose the response
            switch ($response->body->status[0]->summary){
                case 'unknown':
                    $message = "Unable to check if " . $domain . " is available or not. Try a different domain name or check back later";
                    $alert_type = 'danger';
                    break;

                case 'undelegated':
                    $message = "You can't register " . $domain . ". Try searching for a different one.";
                    $alert_type = 'danger';
                    break;

                case 'inactive':
                    $message = $domain . " is available. <a href='/guide/step-2' class=\"alert-link\">Go to the next step to register this name before someone else does!</strong>";
                    $alert_type = 'success';
                    break;

                case 'pending':
                    $message = $domain . " is not available and likely won't be available for a long time. Try a .com domain instead.";
                    $alert_type = 'danger';
                    break;

                case 'unregistrable':
                    $message = $domain . " is not available for sale. Try searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                case 'disallowed':
                case 'claimed':
                case 'reserved':
                case 'dpml':
                    $message = $domain . " is not available. Try searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                case 'invalid':
                    $message = $domain . " is not a valid domain name. Try searching for a simpler domain name like seattlepetstore.com or nikhilagarwal.com";
                    $alert_type = 'danger';
                    break;

                case 'active':
                case 'parked':
                    $message = $domain . " is not available. Try searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                case 'marketed':
                    $message = $domain . " is possibly available but it is likely very expensive. I recommend searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                case 'expiring':
                case 'deleting':
                    $message = $domain . " is not available available. Try searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                case 'priced':
                case 'transferable':
                case 'premium':
                    $message = $domain . " is possibly available but it is likely very expensive. I recommend searching for a different domain name";
                    $alert_type = 'info';
                    break;

                case 'suffix':
                case 'registrar':
                case 'zone':
                case 'tld':
                    $message = $domain . " is not available available. Try searching for a different domain name";
                    $alert_type = 'danger';
                    break;

                default:
                    $message = $domain . ' is ' . $response->body->status[0]->summary;
                    $alert_type = 'danger';
            }
        }

        // Return the view
        return view('guide.one')
            ->with('domain_availability',$message)
            ->with('alert_type',$alert_type);
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
