<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationPackage;
use App\Models\Service;
use App\Models\Tourism;
use App\Models\TourismPackage;
use Illuminate\Http\Request;

class ViewsManageController extends Controller
{
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

    // pass to dubaiSpecial
    public function viewDubai()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        return view('client.dubaispecialpackage', [
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

        return view('client.blog', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages
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


}
