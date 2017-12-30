<?php

namespace App\Http\Controllers;

use App\Mail\SendPassword;
use App\Rules\VideosPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
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

    public function four(Request $request){

        $videos = array(
            '1' =>  array(
                'id' => '104578891',
                'title' => 'Part 1: The Dashboard'
            ),
            '2' => array(
                'id' => '81072019',
                'title' => 'Part 2: Posts vs. Pages'
            ),
            '3' => array(
                'id' => '81124727',
                'title' => 'Part 3: The Editor'
            ),
            '4' => array(
                'id' => '104552221',
                'title' => 'Part 4: Creating a New Post'
            ),
            '5' => array(
                'id' => '81687340',
                'title' => 'Part 5: Post Formats'
            ),
            '6' => array(
                'id' => '81145029',
                'title' => 'Part 6: Edit an Existing Post'
            ),
            '7' => array(
                'id' => '81151204',
                'title' => 'Part 7: Categories and Tags'
            ),
            '8' => array(
                'id' => '81217831',
                'title' => 'Part 8: Creating and Editing Pages'
            ),
            '9' => array(
                'id' => '81228125',
                'title' => 'Part 9: Adding Photos and Images'
            ),
            '10' => array(
                'id' => '104557979',
                'title' => 'Part 10: How to Embed Video'
            ),
            '11' => array(
                'id' => '104564504',
                'title' => 'Part 11: Using the Media Library'
            ),
            '12' => array(
                'id' => '81683808',
                'title' => 'Part 12: Managing Comments'
            ),
            '13' => array(
                'id' => '81685001',
                'title' => 'Part 13: Creating Links'
            ),
            '14' => array(
                'id' => '81436462',
                'title' => 'Part 14: Changing the Theme'
            ),
            '15' => array(
                'id' => '81446773',
                'title' => 'Part 15: Adding Widgets'
            ),
            '16' => array(
                'id' => '81451242',
                'title' => 'Part 16: Custom Menus'
            ),
            '17' => array(
                'id' => '104578267',
                'title' => 'Part 17: Installing Plugins'
            ),
            '18' => array(
                'id' => '81525638',
                'title' => 'Part 18: Adding New Users'
            ),
            '19' => array(
                'id' => '81532593',
                'title' => 'Part 19: Useful Tools'
            ),
            '20' => array(
                'id' => '81540428',
                'title' => 'Part 20: Settings & Configuration'
            )
        );

        // If Cookie is set, show the videos
        // Otherwise, request email / password
        if( $request->cookie('password') !== null){
            return view('guide.four')
                ->with('videos',$videos);
        }else{
            return view('guide.request-email');
        }
    }

    public function sendPassword(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        Mail::to($request->email)->send(new SendPassword());
        return view('guide.request-email')
            ->with('message','The password has been sent to your email address. Don\'t forget to check your spam folder');
    }

    public function storeCookie(Request $request){
        $request->validate([
            'password' => [new VideosPassword]
        ]);
        $cookie =  Cookie::make('password','true', 50000);
        return redirect('/guide/step-4')->withCookie($cookie);
    }


    public function five(){
        return view('guide.five');
    }


    public function twoDownload(){
        return response()->download( public_path('downloads/get-blogging-today-step-2-instructions.pdf')  );
    }

    public function threeDownload(){
        return response()->download( public_path('downloads/get-blogging-today-step-3-instructions.pdf')  );
    }



}
