<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitesController extends Controller
{
    public function activites()
    {
        return view('activites');
    }

    public function activityDetails($id)
    {
        return view('activityDetails', ['id' => $id]);
    }

    public function editActivity()
    {
        return view('editActivity');
    }

    public function addActivity()
    {
        return view('addActivity');
    }
}
