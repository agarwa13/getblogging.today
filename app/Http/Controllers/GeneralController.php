<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function testimonials(){

        $testimonials = array();
        $testimonials[] = "Very helpful!";
        $testimonials[] = "I didn't know about this. Now I know why I have been spammed like crazy. Glad to know.";
        $testimonials[] = "I appreciated the tip to select private. I didn't know about the ease of accessing my info before. Thank you";
        $testimonials[] = "Registered! Exciting! Thank you! I like the way you sign off on each of your videos... \"see u in the next lesson\". Nice.";
        $testimonials[] = "Your directions for doing so were very clear and easy to follow.";
        $testimonials[] = "It's good to have explanations of these important parts of websites.";
        $testimonials[] = "You explained https in a way I could easily understand and made s step that I was afraid would be very complicated easy to do!";
        $testimonials[] = "I really liked this lesson and at the end it became clear how important it is that SiteGround which you recommend is superior to others - they automatically set up as https.";
        $testimonials[] = "Your directions for doing so were very clear and easy to follow.";
        $testimonials[] = "I am a little behind everyone, I followed the video well and it is all well explained. I did take assistance from SiteGround support, but that was because I have just moved here from another host and having some teething problems. Customer Service at SiteGround have been great so far and helped me to setup the ssl.";
        $testimonials[] = "Totally AWESOME course!!!!! You have addressed every aspect of getting started with a new blog, but better yet what it takes to make it a success. I can't wait to get started. Thank you.";
        $testimonials[] = "Very insightful. Nikhil provides a solid foundation for getting started with building a blog";
        $testimonials[] = "Great specific to the point, and easy to understand.";
        $testimonials[] = "Clear, it includes everything in a short and descriptive way, great voice and design of the course, useful information.";
        $testimonials[] = "Excellent explanation of steps in getting set up along with recommendations that helped me make the right choices from the start.";
        $testimonials[] = "Very beginner-friendly. Simple Straightforward lessons which are easy to understand.";
        $testimonials[] = "Of all the ways to learn how to create a blog, this is by far the best. You'll be a pro in just a few lessons.";
        $testimonials[] = "Learning anything should be always like this - a pleasure. Thank you for helping me create a blog so quickly.";
        $testimonials[] = "Get Blogging Today is THE learning resource for starting a blog. I come back to this tutorial every time I need to start a blog for a client.";
        $testimonials[] = "Best of the best tutorial explaining starting a blog! Nikhil is really fun to watch and to listen.";
        $testimonials[] = "I Think everyone should see this Tutorial, who will create their own website. You will learn everything about creating a blog. Thank you very much!";

        return view('testimonials')->with('testimonials', $testimonials);
    }
}
