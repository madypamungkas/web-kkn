<?php

use Illuminate\Database\Seeder;

class GambarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gambars')->delete();
        
        \DB::table('gambars')->insert(array (
            0 => 
            array (
                'id' => 6,
                'tipe' => 'video',
                'judul_file' => 'CEGAH PENULARAN COVID-19 DENGAN MASKER',
                'deskripsi' => 'Video ini berisikan tentang pentingnya menggunakan masker untuk mencegah penularan Covid-19',
                'file' => NULL,
                'url' => 'https://drive.google.com/file/d/13r99rN7AIOjCOqQOccME6f7W9pKkPlOs/preview',
                'created_by' => '1',
                'created_at' => '2020-05-31 19:21:51',
                'updated_at' => '2020-05-31 19:39:35',
            ),
            1 => 
            array (
                'id' => 2,
                'tipe' => 'video',
                'judul_file' => 'LANGKAH CUCI TANGAN DAN ETIKA BATUK YANG EFEKTIF',
                'deskripsi' => 'Video ini berisi tentang bagaimana langkah-langkah cuci tangan yang baik dan bagaimana etika batuk dan bersin yang efektif sesuai standar WHO untuk pencegahan penularan Covid-19',
                'file' => NULL,
                'url' => 'https://drive.google.com/file/d/1WAmKZTgS7RQcbdvsJtHKiV52P1Jcet45/preview',
                'created_by' => '1',
                'created_at' => '2020-05-31 17:58:19',
                'updated_at' => '2020-05-31 19:56:33',
            ),
            2 => 
            array (
                'id' => 1,
                'tipe' => 'gambar',
                'judul_file' => 'LANGKAH CUCI TANGAN DAN ETIKA BAKTUK YANG EFEKTIF',
                'deskripsi' => 'Poster ini berisi tentang bagaimana langkah-langkah cuci tangan yang baik dan bagaimana etika batuk dan bersin yang efektif sesuai standar WHO untuk pencegahan penularan Covid-19',
                'file' => NULL,
                'url' => 'https://drive.google.com/open?id=1DXeasW2vhu_5TfB78-VcVYn_u5Dp6MWG',
                'created_by' => '1',
                'created_at' => '2020-05-26 17:24:42',
                'updated_at' => '2020-06-01 20:44:06',
            ),
            3 => 
            array (
                'id' => 5,
                'tipe' => 'gambar',
                'judul_file' => 'CARA MENGGUNAKAN MASKER MEDIS',
                'deskripsi' => 'Cara menggunakan masker medis yang baik dan sesuai standart',
                'file' => NULL,
                'url' => 'https://drive.google.com/open?id=1dyKSPsuIZN6y4Wf0m-Z2czoefjKhsDCv',
                'created_by' => '1',
                'created_at' => '2020-05-31 18:10:42',
                'updated_at' => '2020-06-01 20:44:38',
            ),
            4 => 
            array (
                'id' => 4,
                'tipe' => 'gambar',
                'judul_file' => 'CARA MENGGUNAKAN MASKER KAIN',
                'deskripsi' => 'Cara menggunakan masker kain yang baik dan benar',
                'file' => NULL,
                'url' => 'https://drive.google.com/open?id=17tsXepk77oJ8Di8v4IDk-4_70drOg6zS',
                'created_by' => '1',
                'created_at' => '2020-05-31 18:10:05',
                'updated_at' => '2020-06-01 20:44:55',
            ),
            5 => 
            array (
                'id' => 3,
                'tipe' => 'gambar',
                'judul_file' => 'JENIS MASKER',
                'deskripsi' => 'Poster ini berisikan jenis-jenis masker yang dapat digunakan oleh masyarakat',
                'file' => NULL,
                'url' => 'https://drive.google.com/open?id=168608w0mBBPTxYKvCKknDUE3Uw8LG4iC',
                'created_by' => '1',
                'created_at' => '2020-05-31 18:09:22',
                'updated_at' => '2020-06-01 20:45:11',
            ),
        ));
        
        
    }
}