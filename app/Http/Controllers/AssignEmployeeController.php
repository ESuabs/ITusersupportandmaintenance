<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignEmployee;
use Illuminate\Validation\Rule;

class AssignEmployeeController extends Controller
{
    public function AssignEmployee(Request $req)
    {
        $formFields = $req->validate([
            'full_name' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'address' => ['required', 'min:3'],
            'position' => ['required', 'min:1'],
            'floor' => ['required'],
            'tel' => ['required', 'min:10'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);
        // Hash
        $formFields['password'] = bcrypt($formFields('password'));
        $user = AssignEmployee::create($formFields);

        // $AssignEmployee = new AssignEmployee;
        // $AssignEmployee->full_name->$req->full_name;
        // $AssignEmployee->email->$req->email;
        // $AssignEmployee->address->$req->address;
        // $AssignEmployee->position->$req->position;
        // $AssignEmployee->floor->$req->floor;
        // $AssignEmployee->tel->$req->tel;
        // $AssignEmployee->dates->$req->dates;
        // $AssignEmployee->password->$req->password;
        // $AssignEmployee->save();
        // dd($req->all);
    }
}
