<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function getBlogData()
    {
        return [
            'max-holdings-bridging-gap' => [
                'title' => 'Max Holdings Pvt Ltd: Bridging the Gap Between Locals and Foreigners in Sri Lanka',
                'slug' => 'max-holdings-bridging-gap',
                'date' => 'February 15, 2025',
                'image' => 'maxholdingslogowhitebg.png',
                'excerpt' => 'Discover how Max Holdings is creating opportunities and fostering collaboration between local and international communities in Sri Lanka.',
                'author' => 'Max Holdings Team',
                'category' => 'Company News',
                'readTime' => '5 min read',
                // Content will be added later
                'content' => 'Blog content will be added here...'
            ],
            'max-tourism-redefining-travel' => [
                'title' => 'Max Tourism: Redefining Travel Experiences in Sri Lanka',
                'slug' => 'max-tourism-redefining-travel',
                'date' => 'March 17, 2025',
                'image' => 'maxholdingslogowhitebg.png',
                'excerpt' => 'Explore how Max Tourism is revolutionizing the travel industry with personalized and unforgettable experiences across Sri Lanka.',
                'author' => 'Max Tourism Team',
                'category' => 'Tourism',
                'readTime' => '4 min read',
                'content' => 'Blog content will be added here...'
            ],
            'max-manpower-empowering-workforce' => [
                'title' => 'Max Holdings Manpower Services: Empowering Sri Lanka\'s Workforce for a Brighter Future',
                'slug' => 'max-manpower-empowering-workforce',
                'date' => 'February 15, 2025',
                'image' => 'maxholdingsmclogowhitebg.png',
                'excerpt' => 'Learn how Max Holdings Manpower Services is transforming lives by connecting skilled professionals with meaningful career opportunities.',
                'author' => 'Max Manpower Team',
                'category' => 'Manpower',
                'readTime' => '6 min read',
                'content' => 'Blog content will be added here...'
            ],
            'max-engineering-pioneering-innovation' => [
                'title' => 'Max Holdings Engineering: Pioneering Innovation in Sri Lanka\'s Construction and Infrastructure Sector',
                'slug' => 'max-engineering-pioneering-innovation',
                'date' => 'February 15, 2025',
                'image' => 'maxholdingsenglogo.png',
                'excerpt' => 'Discover the cutting-edge engineering solutions that are shaping Sri Lanka\'s future infrastructure and construction landscape.',
                'author' => 'Max Engineering Team',
                'category' => 'Engineering',
                'readTime' => '7 min read',
                'content' => 'Blog content will be added here...'
            ],
        ];
    }

    public function show($slug)
    {
        $blogs = $this->getBlogData();
        
        if (!isset($blogs[$slug])) {
            abort(404);
        }
        
        $blog = $blogs[$slug];
        
        // Get related blogs (exclude current)
        $relatedBlogs = array_filter($blogs, function($key) use ($slug) {
            return $key !== $slug;
        }, ARRAY_FILTER_USE_KEY);
        
        // Get only 3 related blogs
        $relatedBlogs = array_slice($relatedBlogs, 0, 3, true);
        
        return view('pages.blog-single', compact('blog', 'relatedBlogs'));
    }
}