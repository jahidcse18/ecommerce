<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * `` `type` `` `email` `password` `image` `status`
     * @return void
     */
    public function run()
    {
        $password = Hash :: make('123456');
        $adminRecords = [
            [
                'name'=>'jahid',
                'type'=>'Admin',
                'mobile'=>'01753660522',
                'email'=>'jahidcse18@gmail.com',
                'password'=> $password,
                'image'=>'',
                'status'=>'1',
            ]
        ];

        Admin::insert($adminRecords);
    }
}
