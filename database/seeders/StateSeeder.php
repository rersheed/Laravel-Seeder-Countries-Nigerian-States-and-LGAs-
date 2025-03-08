<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert states
        DB::statement($this->getStateQuery());
    }

    private function getStateQuery()
    {
        return "INSERT INTO states (id, country_id, state_name) VALUES
        (1, 126, 'Abia State'),
        (2, 126, 'Adamawa State'),
        (3, 126, 'Akwa Ibom State'),
        (4, 126, 'Anambra State'),
        (5, 126, 'Bauchi State'),
        (6, 126, 'Bayelsa State'),
        (7, 126, 'Benue State'),
        (8, 126, 'Borno State'),
        (9, 126, 'Cross River State'),
        (10, 126, 'Delta State'),
        (11, 126, 'Ebonyi State'),
        (12, 126, 'Edo State'),
        (13, 126, 'Ekiti State'),
        (14, 126, 'Enugu State'),
        (15, 126, 'FCT'),
        (16, 126, 'Gombe State'),
        (17, 126, 'Imo State'),
        (18, 126, 'Jigawa State'),
        (19, 126, 'Kaduna State'),
        (20, 126, 'Kano State'),
        (21, 126, 'Katsina State'),
        (22, 126, 'Kebbi State'),
        (23, 126, 'Kogi State'),
        (24, 126, 'Kwara State'),
        (25, 126, 'Lagos State'),
        (26, 126, 'Nasarawa State'),
        (27, 126, 'Niger State'),
        (28, 126, 'Ogun State'),
        (29, 126, 'Ondo State'),
        (30, 126, 'Osun State'),
        (31, 126, 'Oyo State'),
        (32, 126, 'Plateau State'),
        (33, 126, 'Rivers State'),
        (34, 126, 'Sokoto State'),
        (35, 126, 'Taraba State'),
        (36, 126, 'Yobe State'),
        (37, 126, 'Zamfara State')";
    }

}
