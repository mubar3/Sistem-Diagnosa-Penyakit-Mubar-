<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'pmk',
                'kode' => 'P001',
                'penyebab' => 'Secara langsung apabila cipratan air dari mulut (droplet) mengenai orang lain—saat bersin, batuk, atau berbicara. Penularan secara tidak langsung terjadi apabila Anda menyentuh permukaan atau benda yang telah terkontaminasi virus flu, lalu tangan Anda menyentuh mulut dan hidung sehingga virus masuk ke dalam tubuh.'
            ],
            [
                'nama' => 'antraxs',
                'kode' => 'P002',
                'penyebab' => 'Virus dengue masuk ke tubuh manusia melalui gigitan nyamuk Aedes aegypti. Jumlah nyamuk Aedes aegypti biasanya meningkat pada awal musim hujan.'
            ],
            [
                'nama' => 'cacingan',
                'kode' => 'P003',
                'penyebab' => 'Melalui makanan atau minuman yang tidak bersih, misalnya es batu yang proses pembuatannya terkontaminasi virus hepatitis. Penularan virus hepatitis B dan hepatitis C melalui darah dan cairan tubuh yang terinfeksi; seperti transfusi darah, hubungan seks, pembuatan tato dan tindik, serta injeksi.'
            ],
            [
                'nama' => 'linu sapi',
                'kode' => 'P004',
                'penyebab' => 'Parasit plasmodium dibawa dan disebarkan oleh nyamuk Anopheles yang kemudian menggigit manusia.'
            ],
            [
                'nama' => 'batuk',
                'kode' => 'P005',
                'penyebab' => 'Virus penyebab campak menular melalui percikan air liur penderita saat batuk atau bersin. Selain itu, bisa karena Anda menyentuh benda yang telah terpercik air liur penderita'
            ],

        ];

        Penyakit::insert($data);
    }
}
