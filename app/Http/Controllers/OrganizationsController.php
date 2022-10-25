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

    public function editData ($id)
    {
        return view('editOrganizations', [
            'editOrganizations' => Organizations::find($id)
        ]);
    }

    public function update (Request $request)
    {
        $editData = Organizations::find($request->id);
        $editData->name = $request->name;
        $editData->email = $request->email;
        $editData->phone = $request->phone;
        $editData->address = $request->address;
        $editData->city = $request->city;
        $editData->state = $request->state;
        $editData->country = $request->country;
        $editData->postalCode = $request->postalCode;
        $editData->save();
        return redirect('organization');
    }
}
