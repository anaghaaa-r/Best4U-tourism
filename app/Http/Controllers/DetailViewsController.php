<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationPackage;
use App\Models\DubaiSpecialPackage;
use App\Models\Service;
use App\Models\Tourism;
use Illuminate\Http\Request;

class DetailViewsController extends Controller
{
    // service details
    public function viewService($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();
        $type = Service::find($id);

        return view('client.service-details', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'type' => $type
        ]);
    }
    
    // destination details
    public function viewDestinations($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $model = Destination::with(['package' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->find($id);

        if(!$model)
        {
            return response()->json([
                'status' => false,
                'message' => 'not found',
            ], 404);
        }

        $packages = $model->package;

        return view('client.destinations', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'model' => $model,
            'packages' => $packages
        ]);
    }

    public function viewDestinationPackages($destinationId, $packageId)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $model = Destination::with('package')->find($destinationId);

        if (!$model) {
            return response()->json([
                'status' => false,
                'message' => 'Destination not found',
            ], 404);
        }

        $details = $model->package->find($packageId);
        
        return view('client.package', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'model' => $model,
            'details' => $details
        ]);
    }

    public function viewTourism($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $destinationpackages = DestinationPackage::orderBy('id', 'desc')->get();

        $model = Tourism::with(['package' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->find($id);

        if(!$model)
        {
            return response()->json([
                'status' => false,
                'message' => 'not found',
            ], 404);
        }

        $packages = $model->package;

        return view('client.tourism', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'destinationpackages' => $destinationpackages,
            'model' => $model,
            'packages' => $packages
        ]);
    }

    public function viewTourismPackages($tourismId, $packageId)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $model = Tourism::with('package')->find($tourismId);

        if (!$model) {
            return response()->json([
                'status' => false,
                'message' => 'Tourism not found',
            ], 404);
        }

        $details = $model->package->find($packageId);
        
        return view('client.package', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'model' => $model,
            'details' => $details
        ]);
    }

    // pass to dubaiSpecial
    public function viewDubai()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $destinationpackages = DestinationPackage::orderBy('id', 'desc')->get();

        $packages = DubaiSpecialPackage::orderBy('id', 'desc')->get();

        return view('client.dubaispecialpackage', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'destinationpackages' => $destinationpackages,
            'packages' => $packages
        ]);
    }

    public function viewDubaiPackages($id)
    {
        $services = Service::orderBy('id', 'desc')->get();
        $destinations = Destination::orderBy('id', 'desc')->get();
        $tourismpackages = Tourism::orderBy('id', 'desc')->get();

        $model = 0;
        $details = DubaiSpecialPackage::find($id);

        return view('client.package', [
            'services' => $services,
            'destinations' => $destinations,
            'tourismpackages' => $tourismpackages,
            'model' => $model,
            'details' => $details,
        ]);
    }
}
