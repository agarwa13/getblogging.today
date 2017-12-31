<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AffiliateController extends Controller
{

    public function siteground(){
        return redirect('https://www.siteground.com/web-hosting.htm?afcode=b3f3468f407693d098dfbe552423dcb8');
    }

    // TODO: Update with affiliate link
    public function a2hosting(){
        return redirect("https://www.a2hosting.com/web-hosting");
    }

    public function bluehost(){
        return redirect("https://www.bluehost.com/track/bloggercasts/");
    }

    public function wordpressDotCom(){
        return redirect("https://wordpress.com/pricing/?aff=189");
    }

    // TODO: Update with affiliate link
    public function kinsta(){
        return redirect("https://kinsta.com/plans/");
    }

    public function wpengine(){
        return redirect('http://shareasale.com/r.cfm?b=1055761&u=1376737&m=41388&urllink=&afftrack=');
    }

}
