<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new Article;
        $article->user_id = 1;
        $article->category_id = 1;
        $article->title = "Pantai Kuta";
        $article->description = "Pantai Kuta adalah sebuah tempat pariwisata yang terletak di 
        kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah 
        tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali 
        sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam 
        (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai
         terletak tidak jauh dari Kuta. Sebelum menjadi objek wisata, Kuta merupakan sebuah 
         pelabuhan dagang tempat produk lokal diperdagangkan kepada pembeli dari luar Bali. 
         Pada abad ke-19, Mads Lange, seorang pedagang Denmark, datang ke Bali dan mendirikan basis 
         perdagangan di Kuta. Ia ahli bernegosiasi sehingga dirinya terkenal di antara raja-raja Bali 
         dan Belanda. Selanjutnya, Hugh Mahbett menerbitkan sebuah buku berjudul “Praise to Kuta” 
         yang berisi ajakan kepada masyarakat setempat untuk menyiapkan fasilitas akomodasi wisata. 
         Tujuannya untuk mengantisipasi ledakan wisatawan yang berkunjung ke Bali. 
         Buku itu kemudian menginspirasi banyak orang untuk membangun fasilitas wisata seperti 
         penginapan, restoran dan tempat hiburan.";
        $article->image="1.jpg";
        $article->save();

        $article = new Article;
        $article->user_id = 2;
        $article->category_id = 2;
        $article->title = "Gunung Bromo";
        $article->description = "Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja 'Brama', adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
        Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah ± 800 meter (utara-selatan) dan ± 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah 
        Bromo. Selama abad 20 dan abad 21, Gunung Bromo telah meletus sebanyak beberapa kali, dengan interval waktu yang teratur, yaitu 30 tahun. Letusan terbesar terjadi 1974, sedangkan letusan terakhir terjadi pada 2015-sekarang.
        Bagi penduduk sekitar Gunung Bromo, suku Tengger, Gunung Bromo/Gunung Brahma dipercaya sebagai gunung suci. Setiap setahun sekali masyarakat Tengger mengadakan upacara Yadnya Kasada atau Kasodo. Upacara ini bertempat di sebuah pura yang berada di bawah kaki Gunung Bromo dan dilanjutkan ke puncak Bromo. Upacara diadakan pada tengah malam hingga dini hari setiap bulan purnama sekitar tanggal 14 atau 15 pada bulan Kasodo (kesepuluh) menurut penanggalan Jawa.
        ";
        $article->image="2.jpg";
        $article->save();

        $article = new Article;
        $article->user_id = 2;
        $article->category_id = 3;
        $article->title = "Candi Borobudur";
        $article->description = "Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta. Candi berbentuk stupa ini didirikan oleh para penganut agama Buddha Mahayana sekitar tahun 800-an Masehi pada masa pemerintahan wangsa Syailendra. Borobudur adalah candi atau kuil Buddha terbesar di dunia, sekaligus salah satu monumen Buddha terbesar di dunia.

        Monumen ini terdiri atas enam teras berbentuk bujur sangkar yang di atasnya terdapat tiga pelataran melingkar, pada dindingnya dihiasi dengan 2.672 panel relief dan aslinya terdapat 504 arca Buddha. Borobudur memiliki koleksi relief Buddha terlengkap dan terbanyak di dunia. Stupa utama terbesar teletak di tengah sekaligus memahkotai bangunan ini, dikelilingi oleh tiga barisan melingkar 72 stupa berlubang yang di dalamnya terdapat arca Buddha tengah duduk bersila dalam posisi teratai sempurna dengan mudra (sikap tangan) Dharmachakra mudra (memutar roda dharma).
        
        Monumen ini merupakan model alam semesta dan dibangun sebagai tempat suci untuk memuliakan Buddha sekaligus berfungsi sebagai tempat ziarah untuk menuntun umat manusia beralih dari alam nafsu duniawi menuju pencerahan dan kebijaksanaan sesuai ajaran Buddha. Para peziarah masuk melalui sisi timur dan memulai ritual di dasar candi dengan berjalan melingkari bangunan suci ini searah jarum jam, sambil terus naik ke undakan berikutnya melalui tiga tingkatan ranah dalam kosmologi Buddha. Ketiga tingkatan itu adalah Kāmadhātu (ranah hawa nafsu), Rupadhatu (ranah berwujud), dan Arupadhatu (ranah tak berwujud). Dalam perjalanannya para peziarah berjalan melalui serangkaian lorong dan tangga dengan menyaksikan tak kurang dari 1.460 panel relief indah yang terukir pada dinding dan pagar langkan.
        
        Menurut bukti-bukti sejarah, Borobudur ditinggalkan pada abad ke-14 seiring melemahnya pengaruh kerajaan Hindu dan Buddha di Jawa serta mulai masuknya pengaruh Islam. Dunia mulai menyadari keberadaan bangunan ini sejak ditemukan 1814 oleh Sir Thomas Stamford Raffles, yang saat itu menjabat sebagai Gubernur Jenderal Inggris atas Jawa. Sejak saat itu Borobudur telah mengalami serangkaian upaya penyelamatan dan pemugaran (perbaikan kembali). Proyek pemugaran terbesar digelar pada kurun waktu 1975 hingga 1982 atas upaya Pemerintah Republik Indonesia dan UNESCO, kemudian situs bersejarah ini masuk dalam daftar Situs Warisan Dunia.
        
        Borobudur kini masih digunakan sebagai tempat ziarah keagamaan; tiap tahun umat Buddha yang datang dari seluruh Indonesia dan mancanegara berkumpul di Borobudur untuk memperingati Trisuci Waisak. Dalam dunia pariwisata, Borobudur adalah objek wisata tunggal di Indonesia yang paling banyak dikunjungi wisatawan.";
        $article->image="3.jpg";
        $article->save();

        $article = new Article;
        $article->user_id = 2;
        $article->category_id = 4;
        $article->title = "Danau Toba";
        $article->description = "Danau Toba adalah danau alami berukuran besar di Indonesia yang berada di kaldera Gunung Supervulkan. Danau ini memiliki panjang 100 kilometer (62 mil), lebar 30 kilometer (19 mi), dan kedalaman 505 meter (1657 ft). Danau ini terletak di tengah pulau Sumatra bagian utara dengan ketinggian permukaan sekitar 900 meter (2953 ft). Danau ini membentang dari 2.88°N 98.52°E sampai 2.35°N 99.1°E. Ini adalah danau terbesar di Indonesia dan danau vulkanik terbesar di dunia.

        Danau Toba adalah lokasi letusan gunung berapi super masif berkekuatan VEI 8 sekitar 69.000 sampai 77.000 tahun yang lalu yang memicu perubahan iklim global. Metode penanggalan terkini menetapkan bahwa 74.000 tahun yang lalu lebih akurat. Letusan ini merupakan letusan eksplosif terbesar di Bumi dalam kurun 25 juta tahun terakhir. Menurut teori bencana Toba, letusan ini berdampak besar bagi populasi manusia di seluruh dunia; dampak letusan menewaskan sebagian besar manusia yang hidup waktu itu dan diyakini menyebabkan penyusutan populasi di Afrika timur tengah dan India sehingga memengaruhi genetika populasi manusia di seluruh dunia sampai sekarang.
        
        Para ilmuwan sepakat bahwa letusan Toba memicu musim dingin vulkanik yang menyebabkan jatuhnya suhu dunia antara 3 hingga 5 °C (5,4 hingga 9,0 °F), dan hingga 15 °C (27 °F) di daerah lintang atas. Penelitian lanjutan di Danau Malawi, Afrika Tengah, menemukan endapan debu letusan Toba, tetapi tidak menemukan bukti perubahan iklim besar di Afrika Timur. Pada tanggal 18 Juni 2018, musibah tenggelamnya kapal feri terjadi di Danau Toba dan menenggelamkan lebih dari 190 orang.
        
        Ada juga tempat wisata yang terkenal yaitu wisata air rangat tepatnya di bawah kaki gunung pusuk buhit, air rangat itu adalah air hangat yang berasal dari gunung yang meletus dan Pusuk Buhit sendiri adalah sebuah gunung aktif yang sangat disakralkan oleh etnis Batak sehingga beragam cerita mistis pun terdapat di gunung ini. Gunung ini terletak di Pulau Samosir, dan merupakan puncak tertinggi dari semua dataran tinggi di Pulau Samosir. Dengan ketinggian sekitar 1.077 meter dari Danau Toba, gunung ini terlihat berdiri dengan gagahnya. Sehingga apabila Anda sedang berada di sekitar perairan Danau Toba, maka Gunung Pusuk Buhit ini akan terlihat sangat jelas sekali dengan puncaknya yang berwarna hijau dengan kombinasi warna abu-abu dan ditutupi oleh awan di sekitarnya. Lalu ketika kita berenang di air rangat itu tidak membayar uang masuk, tinggal masuk saja tapi setelah kita selesai mandi atau selesai berenang kita diharuskan makan di tempat permandian air rangat.";
        $article->image="4.jpg";
        $article->save();
        
    }
}
