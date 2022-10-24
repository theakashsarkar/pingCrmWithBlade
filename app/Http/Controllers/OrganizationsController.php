<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organization;

class OrganizationsController extends Controller
{
    public function index ()
    {

        return view('organizations');
    }

    public function addCustomer (Request $request)
    {
        $organization = new organization();
        $organization->name  = $request->name;
        $organization->email  = $request->email;
        $organization->phone  = $request->phone;
        $organization->address  = $request->address;
        $organization->city  = $request->city;
        $organization->state  = $request->state;
        $organization->country  = $request->country;
        $organization->postalCode  = $request->postalCode;
        $organization->save();
        return redirect(route('organizations'));
    }
}
