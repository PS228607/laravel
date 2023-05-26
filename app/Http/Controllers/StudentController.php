<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function idUitUrl($iduiturl)
    {
        return view('Week1/infobordeel', ['ID' => $iduiturl]);
    }
    
    public function show($naamUitUrl)
    {
        $naamUitUrl = Str::upper($naamUitUrl); //Str::upper maakt het caps
        return view('Week2/Student2', ['naam' => $naamUitUrl]);
    }
}
