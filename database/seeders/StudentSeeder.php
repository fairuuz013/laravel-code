<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::insert([
        //     [
        //         'name' => 'ruuz',
        //         'email' => 'ruuz@gmail.com',
        //         'phone' => '081234567',
        //         'address' => 'Bekasi',
        //     ],
        //     [
        //         'name' => 'acer',
        //         'email' => 'acer@gmail.com',
        //         'phone' => '0812345678',
        //         'address' => 'Bekasi',
        //     ],
        // ]);

        Student::factory(50)->create();
    }

}
