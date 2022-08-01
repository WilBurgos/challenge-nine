<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZipCodeRequest;
use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{
    public function get_data(ZipCodeRequest $request, $zipcode){

        $data = ZipCode::where('d_codigo',$zipcode)->get();

        if(count($data) === 0){
            return response()->json([
                'message' => 'Zip code not found'
            ],422);
        }

        $federal_entity = array(
            "key"   => $data[0]->c_estado,
            "name"  => $data[0]->d_estado,
            "code"  => $data[0]->c_cp
        );

        $settlements = array();
        foreach ($data as $key => $value) {
            array_push($settlements,array(
                "key"               => $value->id_asenta_cpcons,
                "name"              => $value->d_asenta,
                "zone_type"         => $value->d_zona,
                "settlement_type"   => array(
                    "name" => $value->d_tipo_asenta
                )
            ));
        }

        $municipality = array(
            "key" => $data[0]->c_mnpio,
            "name" => $data[0]->d_mnpio
        );

        $total = array(
            "zip_code"          => $zipcode,
            "locality"          => $data[0]->d_ciudad,
            "federal_entity"    => $federal_entity,
            "settlements"       => $settlements,
            "municipality"      => $municipality
        );

        return response()->json($total,200);
    }
}
