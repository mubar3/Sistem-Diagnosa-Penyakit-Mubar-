<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
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
                'nama' => 'Demam tinggi',
                'kode' => 'G001'
            ],
            [
                'nama' => 'tidak nafsu makan',
                'kode' => 'G002'
            ],
            [
                'nama' => 'keluar air liur berlebihan',
                'kode' => 'G003'
            ],
            [
                'nama' => 'produksi susu menurun',
                'kode' => 'G004'
            ],
            [
                'nama' => 'penurunan berat badan permanen',
                'kode' => 'G005'
            ],
            [
                'nama' => 'pembengkakan pada area kaki',
                'kode' => 'G006'
            ],
            [
                'nama' => 'proses gayemi tidak terjadi',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Siku-siku kaki mulai lemas',
                'kode' => 'G008'
            ],
            [
                'nama' => 'nafsu makan menuun',
                'kode' => 'G009'
            ],
            [
                'nama' => 'buku kusam & berdiri',
                'kode' => 'G010'
            ],
            [
                'nama' => 'diare berkepanjangan',
                'kode' => 'G011'
            ],
            [
                'nama' => 'mata berair',
                'kode' => 'G012'
            ],
            [
                'nama' => 'berat badan menuurun',
                'kode' => 'G013'
            ],
            [
                'nama' => 'pantat kopor',
                'kode' => 'G014'
            ],
            [
                'nama' => 'perut buncit',
                'kode' => 'G015'
            ],
            [
                'nama' => 'kaki terlihat kurus',
                'kode' => 'G016'
            ],
            [
                'nama' => 'sapi ambruk',
                'kode' => 'G017'
            ],
            [
                'nama' => 'sapi dingklang',
                'kode' => 'G018'
            ],
            [
                'nama' => 'kelumpuhan pada sapi',
                'kode' => 'G019'
            ],
            [
                'nama' => 'batuk terus menerus',
                'kode' => 'G020'
            ],
            [
                'nama' => 'hidung berlendir',
                'kode' => 'G021'
            ]
        ];

        Gejala::insert($data);
    }
}
