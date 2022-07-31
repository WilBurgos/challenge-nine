<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CodigoPostalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aguascalientes = str_replace("\\", "/", database_path() . '/seeders/sql/aguascalientes.sql');
        dump(\DB::unprepared(file_get_contents($aguascalientes)));

        $baja_california = str_replace("\\", "/", database_path() . '/seeders/sql/baja_california.sql');
        dump(\DB::unprepared(file_get_contents($baja_california)));

        $baja_california_sur = str_replace("\\", "/", database_path() . '/seeders/sql/baja_california_sur.sql');
        dump(\DB::unprepared(file_get_contents($baja_california_sur)));

        $campeche = str_replace("\\", "/", database_path() . '/seeders/sql/campeche.sql');
        dump(\DB::unprepared(file_get_contents($campeche)));

        $coahuila = str_replace("\\", "/", database_path() . '/seeders/sql/coahuila.sql');
        dump(\DB::unprepared(file_get_contents($coahuila)));

        $colima = str_replace("\\", "/", database_path() . '/seeders/sql/colima.sql');
        dump(\DB::unprepared(file_get_contents($colima)));

        $chiapas = str_replace("\\", "/", database_path() . '/seeders/sql/chiapas.sql');
        dump(\DB::unprepared(file_get_contents($chiapas)));

        $chihuahua = str_replace("\\", "/", database_path() . '/seeders/sql/chihuahua.sql');
        dump(\DB::unprepared(file_get_contents($chihuahua)));

        $distrito_federal = str_replace("\\", "/", database_path() . '/seeders/sql/distrito_federal.sql');
        dump(\DB::unprepared(file_get_contents($distrito_federal)));

        $durango = str_replace("\\", "/", database_path() . '/seeders/sql/durango.sql');
        dump(\DB::unprepared(file_get_contents($durango)));

        $guanajuato = str_replace("\\", "/", database_path() . '/seeders/sql/guanajuato.sql');
        dump(\DB::unprepared(file_get_contents($guanajuato)));

        $guerrero = str_replace("\\", "/", database_path() . '/seeders/sql/guerrero.sql');
        dump(\DB::unprepared(file_get_contents($guerrero)));

        $hidalgo = str_replace("\\", "/", database_path() . '/seeders/sql/hidalgo.sql');
        dump(\DB::unprepared(file_get_contents($hidalgo)));

        $jalisco = str_replace("\\", "/", database_path() . '/seeders/sql/jalisco.sql');
        dump(\DB::unprepared(file_get_contents($jalisco)));

        $mexico = str_replace("\\", "/", database_path() . '/seeders/sql/mexico.sql');
        dump(\DB::unprepared(file_get_contents($mexico)));

        $michoacan = str_replace("\\", "/", database_path() . '/seeders/sql/michoacan.sql');
        dump(\DB::unprepared(file_get_contents($michoacan)));

        $morelos = str_replace("\\", "/", database_path() . '/seeders/sql/morelos.sql');
        dump(\DB::unprepared(file_get_contents($morelos)));

        $nayarit = str_replace("\\", "/", database_path() . '/seeders/sql/nayarit.sql');
        dump(\DB::unprepared(file_get_contents($nayarit)));

        $nuevo_leon = str_replace("\\", "/", database_path() . '/seeders/sql/nuevo_leon.sql');
        dump(\DB::unprepared(file_get_contents($nuevo_leon)));

        $oaxaca = str_replace("\\", "/", database_path() . '/seeders/sql/oaxaca.sql');
        dump(\DB::unprepared(file_get_contents($oaxaca)));

        $puebla = str_replace("\\", "/", database_path() . '/seeders/sql/puebla.sql');
        dump(\DB::unprepared(file_get_contents($puebla)));

        $queretaro = str_replace("\\", "/", database_path() . '/seeders/sql/queretaro.sql');
        dump(\DB::unprepared(file_get_contents($queretaro)));

        $quintana_roo = str_replace("\\", "/", database_path() . '/seeders/sql/quintana_roo.sql');
        dump(\DB::unprepared(file_get_contents($quintana_roo)));

        $san_luis_potosi = str_replace("\\", "/", database_path() . '/seeders/sql/san_luis_potosi.sql');
        dump(\DB::unprepared(file_get_contents($san_luis_potosi)));

        $sinaloa = str_replace("\\", "/", database_path() . '/seeders/sql/sinaloa.sql');
        dump(\DB::unprepared(file_get_contents($sinaloa)));

        $sonora = str_replace("\\", "/", database_path() . '/seeders/sql/sonora.sql');
        dump(\DB::unprepared(file_get_contents($sonora)));

        $tabasco = str_replace("\\", "/", database_path() . '/seeders/sql/tabasco.sql');
        dump(\DB::unprepared(file_get_contents($tabasco)));

        $tamaulipas = str_replace("\\", "/", database_path() . '/seeders/sql/tamaulipas.sql');
        dump(\DB::unprepared(file_get_contents($tamaulipas)));

        $tlaxcala = str_replace("\\", "/", database_path() . '/seeders/sql/tlaxcala.sql');
        dump(\DB::unprepared(file_get_contents($tlaxcala)));

        $veracruz = str_replace("\\", "/", database_path() . '/seeders/sql/veracruz.sql');
        dump(\DB::unprepared(file_get_contents($veracruz)));

        $yucatan = str_replace("\\", "/", database_path() . '/seeders/sql/yucatan.sql');
        dump(\DB::unprepared(file_get_contents($yucatan)));

        $zacatecas = str_replace("\\", "/", database_path() . '/seeders/sql/zacatecas.sql');
        dump(\DB::unprepared(file_get_contents($zacatecas)));
    }
}
