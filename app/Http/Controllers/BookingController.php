<?php

namespace App\Http\Controllers;

use App\Models\DestinationPackage;
use App\Models\Service;
use App\Models\Tourism;
use App\Notifications\ContactUsNotification;
use App\Notifications\DestinationEnquiryNotification;
use App\Notifications\DubaiEnquiryNotification;
use App\Notifications\HomeBookingNotification;
use App\Notifications\PackageBookingNotification;
use App\Notifications\ServiceBookingNotification;
use App\Notifications\TourismEnquiryNotification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{

    // home page form
    public function homeBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|email'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }
        try {
            $formDetails = [
                'name' => $request->input('name'),
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email')
            ];
    
            $adminMail = 'r.anaghaaa@gmail.com';
            Notification::route('mail', $adminMail)
                ->notify(new HomeBookingNotification($formDetails));
    
                return response()->json([
                    'status' => true,
                    'message' => 'Thank you for contacting us! We will get to you shortly.',
                ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
        
    }

    // service form
    public function serviceBooking(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'comments' => 'nullable|string'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }
        try {
            $service = Service::findOrFail($id);

            $serviceDetails = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'comments' => $request->comments,
                'service' => $service->service
            ];

            $adminMail = 'r.anaghaaa@gmail.com';

            Notification::route('mail', $adminMail)
                ->notify(new ServiceBookingNotification($serviceDetails));

            return response()->json([
                'status' => true,
                'message' => 'Thank you for contacting us! We will get to you shortly.'
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found.',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // package form
    public function packageBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'adults' => 'nullable|integer',
            'children' => 'nullable|integer'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }
        try {

            $formDetails = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'adults' => $request->adults,
                'children' => $request->children,
                'type' => $request->type,
                'package' => $request->package
            ];
    
            $adminMail = 'r.anaghaaa@gmail.com';
    
            Notification::route('mail', $adminMail)
                ->notify(new PackageBookingNotification($formDetails));
    
            return response()->json([
                'status' => true,
                'message' => 'Thank you for contacting us! We will get to you shortly.',
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found.',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // tourism
    public function tourismBooking(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'adults' => 'nullable|integer',
            'children' => 'nullable|integer'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }
        try {
            $tourism = Tourism::findOrFail($id);

            $formDetails = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'adults' => $request->adults,
                'children' => $request->children,
                'tourism-type' => $tourism->title
            ];

            $adminMail = 'r.anaghaaa@gmail.com';

            Notification::route('mail', $adminMail)
                ->notify(new TourismEnquiryNotification($formDetails));

            return response()->json([
                'status' => true,
                'message' => 'Thank you for contacting us! We will get to you shortly.',
            ], 200);
        }
        catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Service not found.',
                'error' => 'Error: ' . $e->getMessage()
            ], 404);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function dubaiBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'adults' => 'nullable|integer',
            'children' => 'nullable|integer'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }
        try {
            $formDetails = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'adults' => $request->adults,
                'children' => $request->children
            ];

            $adminMail = 'r.anaghaaa@gmail.com';

            Notification::route('mail', $adminMail)
                ->notify(new DubaiEnquiryNotification($formDetails));

            return response()->json([
                'status' => true,
                'message' => 'Thank you for contacting us! We will get to you shortly.',
            ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }

    // contact us

    public function contactUsForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'nullable|string'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed.',
                'error' => 'Error: ' . $validator->errors()
            ], 200);
        }


        try {
            $formDetails = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ];
    
            $adminMail = 'r.anaghaaa@gmail.com';
    
            Notification::route('mail', $adminMail)
                ->notify(new ContactUsNotification($formDetails));
    
                return response()->json([
                    'status' => true,
                    'message' => 'Thank you for contacting us! We will get to you shortly.',
                ], 200);
        }
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Internal Server Error.',
                'error' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
}
