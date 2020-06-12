<?php

use Illuminate\Database\Seeder;

class HasilSkorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('hasil_skors')->delete();
        
        \DB::table('hasil_skors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'otg',
            'hasil' => 'Orang Tanpa Gejala (OTG)',
                'interpretasi' => 'Seseorang yang memiliki riwayat kontak dengan kasus konfirmasi COVID-19 namun tidak menunjukan gejala dan memiliki risiko tertular dari orang konfirmasi COVID-19.',
            'tatalaksana' => 'Melakukan karantina diri di rumah selama 14 hari (Rajin cuci tangan, menggunakan masker, menerapkan etika bersin dan batuk yang baik, menjaga jarak minimal 1 meter).',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '2.png',
                'created_at' => NULL,
                'updated_at' => '2020-05-26 13:06:37',
            ),
            1 => 
            array (
                'id' => 2,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'odp',
            'hasil' => 'Orang Dalam Pemantauan (ODP)',
            'interpretasi' => 'a.	Orang yang mengalami demam (≥380C) atau riwayat demam; atau gejala gangguan sistem pernapasan seperti pilek/sakit tenggorokan/batuk DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah yang melaporkan transmisi lokal
b.	Orang yang mengalami gejala gangguan sistem pernapasan seperti pilek/sakit tenggorokan/batuk DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi atau probabel COVID-19
',
            'tatalaksana' => 'Melaukan isolasi diri di rumah selama 14 hari (Rajin cuci tangan, menggunakan masker, menerapkan etika bersin dan batuk yang baik, menjaga jarak minimal 1 meter).',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '3.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'pdp',
            'hasil' => 'Pasien Dalam Pemantauan (PDP)',
            'interpretasi' => 'a.	Orang dengan Infeksi Saluran Pernapasan Akut (ISPA) yaitu demam (≥38oC) atau riwayat demam; disertai salah satu gejala/tanda penyakit pernapasan seperti: batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah yang melaporkan transmisi lokal
b.	Orang dengan demam (≥38oC) atau riwayat demam atau ISPA DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi atau probabel COVID-19
c.	Orang dengan ISPA (Infeksi Saluran Pernapasan Akut) berat/pneumonia berat yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.',
                'tatalaksana' => 'Jika gejala ringan, lakukan Isolasi diri di rumah selama 14 hari, rajin cuci tangan, gunakan masker, terapkan etika bersin dan batuk yang baik, jaga jarak minimal 1 meter. 
Jika gejala sedang dan ringan, Hubungi Fasilitas Kesehatan.',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '4.png',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'sehat',
                'hasil' => 'Sehat',
                'interpretasi' => 'Sehat dari covid-19 namun HARUS WASPADA',
                'tatalaksana' => 'Tetap jaga kesehatan dengan menerapkan pola hidup sehat, rajin cuci tangan, menggunakan masker jika keluar rumah dan menjaga jarak minimal 1meter dengan orang lain.',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '1.png',
                'created_at' => NULL,
                'updated_at' => '2020-05-26 13:08:31',
            ),
            4 => 
            array (
                'id' => 5,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'waspada',
                'hasil' => 'Waspada',
                'interpretasi' => 'Sehat dari covid-19 namun HARUS WASPADA',
            'tatalaksana' => 'Melakukan isolasi diri di rumah selama 14 hari (Rajin cuci tangan, menggunakan masker, menerapkan etika bersin dan batuk yang baik, menjaga jarak minimal 1 meter).
Kunjungi FASYANKES untuk berobat jika dirasa perlu atau sakit yang dirasakan bertambah berat.',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '2.png',
                'created_at' => NULL,
                'updated_at' => '2020-05-26 13:09:07',
            ),
            5 => 
            array (
                'id' => 6,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'wajib_lapor',
                'hasil' => 'Wajib Lapor',
                'interpretasi' => 'Wajib melaporkan ke rt/rw atau pihak lain terkait riwayat perjalanan dan tinggal di zona merah',
                'tatalaksana' => 'Wajib melaporkan ke RT/RW atau pihak lain terkait riwayat perjalanan dan tinggal di zona merah.
Melakukan isolasi diri di rumah selama 14 hari (Rajin cuci tangan, menggunakan masker, menerapkan etika bersin dan batuk yang baik, menjaga jarak minimal 1 meter).',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => '2.png',
                'created_at' => NULL,
                'updated_at' => '2020-05-26 13:09:47',
            ),
            6 => 
            array (
                'id' => 7,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Normal',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 0,
                'batas_atas' => 9,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:26:00',
                'updated_at' => '2020-05-18 21:26:00',
            ),
            7 => 
            array (
                'id' => 8,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Ringan',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 10,
                'batas_atas' => 13,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:26:17',
                'updated_at' => '2020-05-18 21:26:17',
            ),
            8 => 
            array (
                'id' => 9,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Sedang',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 14,
                'batas_atas' => 20,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:26:37',
                'updated_at' => '2020-05-18 21:26:37',
            ),
            9 => 
            array (
                'id' => 10,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 21,
                'batas_atas' => 27,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:26:56',
                'updated_at' => '2020-05-18 21:26:56',
            ),
            10 => 
            array (
                'id' => 11,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Sangat Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 21,
                'batas_atas' => 150,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:27:31',
                'updated_at' => '2020-05-18 21:27:31',
            ),
            11 => 
            array (
                'id' => 12,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Kecemasan',
                'hasil' => 'Normal',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 0,
                'batas_atas' => 7,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:27:54',
                'updated_at' => '2020-05-18 21:27:54',
            ),
            12 => 
            array (
                'id' => 13,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Kecemasan',
                'hasil' => 'Ringan',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 8,
                'batas_atas' => 9,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:28:13',
                'updated_at' => '2020-05-18 21:28:13',
            ),
            13 => 
            array (
                'id' => 14,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Kecemasan',
                'hasil' => 'Sedang',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 10,
                'batas_atas' => 14,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:28:38',
                'updated_at' => '2020-05-18 21:28:38',
            ),
            14 => 
            array (
                'id' => 15,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Kecemasan',
                'hasil' => 'Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 15,
                'batas_atas' => 19,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:28:58',
                'updated_at' => '2020-05-18 21:28:58',
            ),
            15 => 
            array (
                'id' => 16,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Depresi',
                'hasil' => 'Sangat Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 20,
                'batas_atas' => 150,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:29:17',
                'updated_at' => '2020-05-18 21:29:17',
            ),
            16 => 
            array (
                'id' => 17,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Stress',
                'hasil' => 'Normal',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 0,
                'batas_atas' => 14,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:29:42',
                'updated_at' => '2020-05-18 21:29:42',
            ),
            17 => 
            array (
                'id' => 18,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Stress',
                'hasil' => 'Ringan',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 15,
                'batas_atas' => 18,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:30:04',
                'updated_at' => '2020-05-18 21:30:04',
            ),
            18 => 
            array (
                'id' => 19,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Stress',
                'hasil' => 'Sedang',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 19,
                'batas_atas' => 25,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:30:27',
                'updated_at' => '2020-05-18 21:30:27',
            ),
            19 => 
            array (
                'id' => 20,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Stress',
                'hasil' => 'Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 26,
                'batas_atas' => 33,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:30:41',
                'updated_at' => '2020-05-18 21:30:41',
            ),
            20 => 
            array (
                'id' => 21,
                'kategori_screening' => 'Psikis',
                'kategori_hasil' => 'Stress',
                'hasil' => 'Sangat Parah',
                'interpretasi' => NULL,
                'tatalaksana' => NULL,
                'batas_bawah' => 34,
                'batas_atas' => 150,
                'gambar' => NULL,
                'created_at' => '2020-05-18 21:31:01',
                'updated_at' => '2020-05-18 21:31:01',
            ),
            21 => 
            array (
                'id' => 22,
                'kategori_screening' => 'Covid',
                'kategori_hasil' => 'belum_diketahui',
                'hasil' => 'Belum diketahui',
                'interpretasi' => 'Belum diketahui',
                'tatalaksana' => 'Belum diketahui',
                'batas_bawah' => NULL,
                'batas_atas' => NULL,
                'gambar' => NULL,
                'created_at' => '2020-05-26 13:10:38',
                'updated_at' => '2020-05-26 13:10:38',
            ),
        ));
    }
}
