<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destination;
use App\Models\DestinationPackage;
use App\Models\DubaiSpecialPackage;
use App\Models\Service;
use App\Models\Tourism;
use App\Models\TourismPackage;
use Illuminate\Http\Request;

class ViewsManageController extends Controller
{
    // to admin
    public function toAdmin()
    {
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourisms = Tourism::orderBy('id', 'desc')->get();
        $packages = DubaiSpecialPackage::orderBy('id', 'desc')->get();

        return view('admin.packages', [
            'destinations' => $destinations,
            'tourisms' => $tourisms,
            'packages' => $packages
        ]);

    }

    // pass to index
    public function viewIndex()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $packages = TourismPackage::orderBy('id', 'desc')->get();

        return view('client.index', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'packages' => $packages
        ]);
    }

    // pass to aboutus
    public function viewAboutUs()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        return view('client.aboutus', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages
        ]);
    }

    

    // pass to blog
    public function viewBlog()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('client.blog', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'blogs' => $blogs
        ]);
    }

    // pass to contact
    public function viewContactUs()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        return view('client.contactus', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages
        ]);
    }


    public function viewBlogDetails($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $blog = Blog::findOrFail($id);

        return view('client.blog-details', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'blog' => $blog
        ]);
    }
}
