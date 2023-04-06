<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            [
                'Nim' => '2141720063',
                'Nama' => 'Maria Fadilla',
                'Kelas' => 'TI-2G',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '085853032182',
                'Email' => 'mariafadilla15@gmail.com',
                'Tanggal_Lahir' => '2002-08-17',
            ],
            [
                'Nim' => '2141720065',
                'Nama' => 'Waviandra Xaviero',
                'Kelas' => 'TI-2I',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '089629568257',
                'Email' => 'waviandraxav@gmail.com',
                'Tanggal_Lahir' => '2002-10-15',
            ],
            [
                'Nim' => '2141720078',
                'Nama' => 'Ingga Setya Budi',
                'Kelas' => 'TI-2A',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '089629568257',
                'Email' => 'inggasetyabudi@gmail.com',
                'Tanggal_Lahir' => '2002-02-18',
            ],
            [
                'Nim' => '2141720099',
                'Nama' => 'Angga Van Estav',
                'Kelas' => 'TI-2I',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '081627896534',
                'Email' => 'anggavanes@gmail.com',
                'Tanggal_Lahir' => '2003-06-07',
            ],
            [
                'Nim' => '2141720123',
                'Nama' => 'Ambarwati',
                'Kelas' => 'TI-2H',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '081763987456',
                'Email' => 'ambarwati@gmail.com',
                'Tanggal_Lahir' => '2003-11-16',
            ],
            [
                'Nim' => '2141720224',
                'Nama' => 'Aditya Pangestu',
                'Kelas' => 'TI-2E',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '089762563987',
                'Email' => 'adityapangestu@gmail.com',
                'Tanggal_Lahir' => '2002-03-05',
            ],
            [
                'Nim' => '2141720001',
                'Nama' => 'Dirgahayu Ika Maulidia',
                'Kelas' => 'TI-2I',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '082637896546',
                'Email' => 'dirgahayuika@gmail.com',
                'Tanggal_Lahir' => '2003-08-17',
            ],
            [
                'Nim' => '2141720546',
                'Nama' => 'Anya SIlvania',
                'Kelas' => 'TI-2A',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '085876459876',
                'Email' => 'anyasilvania@gmail.com',
                'Tanggal_Lahir' => '2002-09-06',
            ],
            [
                'Nim' => '2141720074',
                'Nama' => 'Joko Anwar',
                'Kelas' => 'TI-2C',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '089876543256',
                'Email' => 'jokoanwar@gmail.com',
                'Tanggal_Lahir' => '2002-08-01',
            ],
            [
                'Nim' => '2141720077',
                'Nama' => 'Bagus Handoko',
                'Kelas' => 'TI-2B',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '081567254367',
                'Email' => 'bagushandoko@gmail.com',
                'Tanggal_Lahir' => '2003-04-04',
            ],
            [
                'Nim' => '2141720435',
                'Nama' => 'Chika Hasibuan',
                'Kelas' => 'TI-2D',
                'Jurusan' => 'D-IV Teknik Informatika',
                'No_Handphone' => '085873546765',
                'Email' => 'chikahasibuan@gmail.com',
                'Tanggal_Lahir' => '2002-06-30',
            ],
        ]);
    }
}
