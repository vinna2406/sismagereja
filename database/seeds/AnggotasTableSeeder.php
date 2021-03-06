<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert([
        	[
        		'user_id' => 1,
        		'nama' => 'Vanny Kumala Wiguna',
        		'tempat_lahir' => 'Denpasar',
        		'tanggal_lahir' => '1994-02-11',
        		'jenis_kelamin' => 'Perempuan',
        		'alamat' => 'Jl. Imam Bonjol',
        		'no_telepon' => '087755897567',
        		'nama_ayah' => 'Nathan Wiguna',
        		'nama_ibu' => 'Mariana Dwiyanti',
                'nm_anggota_keluarga' => 'Mariana Dwiyanti',
        		'notlp_keluarga' => '089123812337',
        		'status_keluarga' => 'Ibu',
        		'status' => 'aktif',
        		'foto' => null,
        		// 'status_baptis' => 'tidak_ada',
        		'created_at' => now(),
        		'updated_at' => now()
        	],
            [
                'user_id' => 1,
                'nama' => 'Hastri Sutrisno',
                'tempat_lahir' => 'Banyuwangi',
                'tanggal_lahir' => '1989-08-20',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl Dalung Pemai 8X',
                'no_telepon' => '087767890321',
                'nama_ayah' => 'Wiguh Sudiarto',
                'nama_ibu' => 'Yoela Kristin',
                'nm_anggota_keluarga' => 'Piko Christian',
                'notlp_keluarga' => '089123675808',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Nathania Elkana',
                'tempat_lahir' => 'Banyuwangi',
                'tanggal_lahir' => '1997-04-12',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Seminyak 8A/6',
                'no_telepon' => '087112890321',
                'nama_ayah' => 'Johan Albert',
                'nama_ibu' => 'Kristin Indrawari',
                'nm_anggota_keluarga' => 'Kristin Indrawari',
                'notlp_keluarga' => '089777675808',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Jidridel Kase',
                'tempat_lahir' => 'Kupang',
                'tanggal_lahir' => '1995-06-05',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Imam Bonjol Gg 99/11',
                'no_telepon' => '087112880112',
                'nama_ayah' => 'Yunus Kase',
                'nama_ibu' => 'Kristina',
                'nm_anggota_keluarga' => 'Kristina',
                'notlp_keluarga' => '089880908780',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Inggrit Priscilla Pattikawa',
                'tempat_lahir' => 'Kupang',
                'tanggal_lahir' => '1997-11-17',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Sunset Road 99X',
                'no_telepon' => '082339137771',
                'nama_ayah' => 'Rico Pattikawa',
                'nama_ibu' => 'Maria Lalena',
                'nm_anggota_keluarga' => 'Maria Lalena',
                'notlp_keluarga' => '082336719128',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Inggrit Theopilus',
                'tempat_lahir' => 'Sumba Barat',
                'tanggal_lahir' => '1996-11-11',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kunti Gg Cemara 32',
                'no_telepon' => '081234557137',
                'nama_ayah' => 'Alexander Theopilus',
                'nama_ibu' => 'Vemmy Susanti',
                'nm_anggota_keluarga' => 'Vemmy Susanti',
                'notlp_keluarga' => '08123771373',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Inggrit Theopilus',
                'tempat_lahir' => 'Sumba Barat',
                'tanggal_lahir' => '1996-11-11',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kunti Gg Cemara 32',
                'no_telepon' => '081234557137',
                'nama_ayah' => 'Alexander Theopilus',
                'nama_ibu' => 'Vemmy Susanti',
                'nm_anggota_keluarga' => 'Vemmy Susanti',
                'notlp_keluarga' => '08123771373',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Febby Agustina',
                'tempat_lahir' => 'Sumbawa',
                'tanggal_lahir' => '1992-02-05',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Imam Bonjol AA32',
                'no_telepon' => '082233441123',
                'nama_ayah' => 'Viktor Yoseph',
                'nama_ibu' => 'Vira Dewi Wijaya',
                'nm_anggota_keluarga' => 'Vannessa Permata Susanti',
                'notlp_keluarga' => '08221371129',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'user_id' => 1,
                'nama' => 'Vannessa Permata Susanti',
                'tempat_lahir' => 'Sumbawa',
                'tanggal_lahir' => '1990-06-15',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Imam Bonjol AA32',
                'no_telepon' => '08221371129',
                'nama_ayah' => 'Viktor Yoseph',
                'nama_ibu' => 'Vira Dewi Wijaya',
                'nm_anggota_keluarga' => 'Febby Agustina',
                'notlp_keluarga' => '082233441123',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'user_id' => 1,
                'nama' => 'Veronica Novia',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1987-11-01',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kuta A7/32',
                'no_telepon' => '081234557137',
                'nama_ayah' => 'Joseph Simon',
                'nama_ibu' => 'Visca Ayu',
                'nm_anggota_keluarga' => 'Visca Ayu',
                'notlp_keluarga' => '081452234111',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ], 
            [
                'user_id' => 1,
                'nama' => 'Garen Geraldo',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1980-01-17',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Kwanji A6',
                'no_telepon' => '087755453234',
                'nama_ayah' => 'Tjandra Putra',
                'nama_ibu' => 'Ayu Permatasari',
                'nm_anggota_keluarga' => 'Vira Felicia',
                'notlp_keluarga' => '084667668123',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Abigail Tigor',
                'tempat_lahir' => 'Badung',
                'tanggal_lahir' => '1982-02-19',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Kesambi A7/32',
                'no_telepon' => '084778137625',
                'nama_ayah' => 'Wijanarko Hariono',
                'nama_ibu' => 'Kenny Poya ',
                'nm_anggota_keluarga' => 'Yoga Dinata ',
                'notlp_keluarga' => '089117890117',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Abigail Tigor',
                'tempat_lahir' => 'Badung',
                'tanggal_lahir' => '1982-02-19',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Kesambi A7/32',
                'no_telepon' => '084778137625',
                'nama_ayah' => 'Wijanarko Hariono',
                'nama_ibu' => 'Kenny Poya ',
                'nm_anggota_keluarga' => 'Yoga Dinata ',
                'notlp_keluarga' => '089117890117',
                'status_keluarga' => 'Saudara',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Axel Darren',
                'tempat_lahir' => 'Badung',
                'tanggal_lahir' => '1999-12-12',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. G Agung RR3/7',
                'no_telepon' => '082221122456',
                'nama_ayah' => 'Kristian Arjassa',
                'nama_ibu' => 'Dina Aurelia',
                'nm_anggota_keluarga' => 'Dina Aurelia',
                'notlp_keluarga' => '081337711211',
                'status_keluarga' => 'Ibu',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'nama' => 'Dina Aurelia',
                'tempat_lahir' => 'Badung',
                'tanggal_lahir' => '1999-12-12',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Jl. G Agung RR3/7',
                'no_telepon' => '081223115190',
                'nama_ayah' => 'Indradewa',
                'nama_ibu' => 'Sulastri ',
                'nm_anggota_keluarga' => 'Kristian Arjassa',
                'notlp_keluarga' => '082221129796',
                'status_keluarga' => 'Ayah',
                'status' => 'aktif',
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
