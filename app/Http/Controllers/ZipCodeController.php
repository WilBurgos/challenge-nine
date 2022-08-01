<?php

namespace App\Http\Controllers;

use App\Http\Requests\ZipCodeRequest;
use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{
    public function get_data(ZipCodeRequest $request, $zip_code){

        $data = ZipCode::where('d_codigo',$zip_code)->get();

        if(count($data) === 0){
            return response()->json([
                'message' => 'Zip code not found'
            ],422);
        }

        $federal_entity = array(
            "key"   => $data[0]->c_estado,
            "name"  => strtoupper($data[0]->setd_estado()),
            "code"  => $data[0]->c_cp
        );

        $settlements = array();
        foreach ($data as $key => $value) {
            array_push($settlements,array(
                "key"               => $value->id_asenta_cpcons,
                "name"              => strtoupper($value->setd_asenta()),
                "zone_type"         => strtoupper($value->setd_zona()),
                "settlement_type"   => array(
                    "name" => $value->d_tipo_asenta
                )
            ));
        }

        $municipality = array(
            "key" => $data[0]->c_mnpio,
            "name" => strtoupper($data[0]->setd_mnpio())
        );

        $total = array(
            "zip_code"          => $zip_code,
            "locality"          => strtoupper($data[0]->setd_ciudad()),
            "federal_entity"    => $federal_entity,
            "settlements"       => $settlements,
            "municipality"      => $municipality
        );

        return response()->json($total,200);
    }
}
