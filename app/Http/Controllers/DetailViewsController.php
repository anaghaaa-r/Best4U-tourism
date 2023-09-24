<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationPackage;
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
        
        return view('client.destination-package', [
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
            'model' => $model,
            'packages' => $packages
        ]);
    }
}
