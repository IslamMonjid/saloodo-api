<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
           'name' => 'Pending'
       ],
       [
           'name' => 'Confirmed'
       ],
       [
           'name' => 'In Transit'
       ],
       [
           'name' => "Deliverd"
       ]
       ];

       foreach ($statuses as $status) {
        Status::create($status);
       }
    }
}
