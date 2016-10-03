<?php

use Illuminate\Database\Seeder;
use App\County;

class CountySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nrb = new County;
        $nrb->county_name = 'Nairobi';
        $nrb->county_code = 'NAIROBI';
        $nrb->county_status = 1;
        $nrb->save();

        $msa = new County();
        $msa->county_name = 'Mombasa';
        $msa->county_code = 'MOMBASA';
        $msa->county_status = 1;
        $msa->save();

        $ksm = new County();
        $ksm->county_name = 'Kisumu';
        $ksm->county_code = 'KISUMU';
        $ksm->county_status = 1;
        $ksm->save();
    }
}
