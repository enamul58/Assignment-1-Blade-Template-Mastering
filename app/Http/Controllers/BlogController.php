<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(Request $request){
        $featuredInfo =array(
        (object)[
         'title' => "The Future of Web Development in 2023",
         'featureDes' => "Explore the latest trends and technologies shaping    the future of web development this year.",    
        'feature' => 'Web Development',
        'postDate' => "May 15, 2023",
        'postTime' => "5 min read"
        ],
        (object)[
         'title' => "Getting Started with AI and Machine Learning",
         'featureDes' => "A beginner's guide to understanding and implementing AI and machine learning concepts.",    
        'feature' => 'Artificial Intelligence',
        'postDate' => "June 2, 2023",
        'postTime' => "8 min read"
        ],
        (object)[
         'title' => "Cloud Computing: Best Practices for 2023",
         'featureDes' => "Learn the most effective strategies for leveraging cloud computing in your projects.",    
        'feature' => 'Cloud Computing',
        'postDate' => "June 10, 2023",
        'postTime' => "6 min read"
        ]
        );
        return view("home.index",['featuredPosts' => $featuredInfo]);
    }
}
