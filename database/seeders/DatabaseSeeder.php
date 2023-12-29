<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Poli;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'Admin',
                // 'username'=>'admin',
                'email'=>'admin@admin.com',
                'role'=>'admin',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'user',
                // 'username'=>'user',
                'email'=>'user@user.com',
                'role'=>'user',
                'password'=>bcrypt('12345')
            ],
            ];


            foreach($userData as $key => $val ){
                User::create($val);
            };

            Poli::create([
                'nama_poli' => 'Poli Umum',
                'deskripsi' => 'Poli Umum kami adalah jantung dari pelayanan kesehatan yang menyediakan perawatan yang komprehensif dan beragam untuk berbagai kondisi medis. Dengan staf medis yang berpengalaman dan peralatan terkini, kami siap memberikan solusi bagi setiap keluhan kesehatan Anda.'
            ]);

            Poli::create([
                'nama_poli' => 'Poli Gigi',
                'deskripsi' => 'Poli Gigi kami mengutamakan kesehatan mulut Anda dengan pelayanan yang komprehensif dan perawatan yang penuh perhatian. Kami memahami pentingnya kesehatan gigi dan mulut dalam kesejahteraan keseluruhan'
            ]);

            Poli::create([
                'nama_poli' => 'Poli THT',
                'deskripsi' => 'Poli THT (Telinga, Hidung, Tenggorokan) kami hadir untuk memberikan perawatan komprehensif bagi masalah terkait THT. Kami mengerti betapa pentingnya kesehatan bagian ini dalam kehidupan sehari-hari'
            ]);

    }
}
