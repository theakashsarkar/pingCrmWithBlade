<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizations;

class OrganizationsController extends Controller
{
    public function index ()
    {

        return view('organizations',[
                'organizations' => Organizations::all()
            ]

        );
    }

    public function addCustomer (Request $request)
    {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['state'] = $request->state;
        $data['country'] = $request->country;
        $data['postalCode'] = $request->postalCode;
        Organizations::create($data);


        return redirect('organization');
    }
}
