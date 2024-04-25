<?php

namespace App\Http\Controllers;

use App\Models\Caste;
use App\Models\District;
use Illuminate\Http\Request;

class Ajaxcontroller extends Controller
{
    public function getDDL(string $type, string $id)
    {
        $data = "";
        if ($type == 'state') :
            $data = District::where('state_id', $id)->get();
        endif;
        if ($type == 'caste') :
            $data = Caste::where('religion_id', $id)->get();
        endif;
        return response()->json($data);
    }
}
