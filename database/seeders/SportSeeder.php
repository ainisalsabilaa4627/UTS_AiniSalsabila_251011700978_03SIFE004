<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportSeeder extends Seeder
{
    public function run(): void
    {
        $sports = [
            [
                'name' => 'Sepak Bola',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola sepak, gawang, dan sepatu bola',
                'rules' => 'Dimainkan oleh dua tim yang masing-masing terdiri dari 11 pemain. Tim mencetak gol dengan memasukkan bola ke gawang lawan.',
                'origin_country' => 'Inggris',
                'image' => 'sepak-bola.jpg',
                'description' => 'Sepak bola adalah olahraga beregu yang dimainkan dengan menendang bola untuk mencetak gol ke gawang lawan. Olahraga ini membutuhkan kerja sama tim, kecepatan, dan strategi.',
            ],
            [
                'name' => 'Badminton',
                'category' => 'Olahraga Raket',
                'equipment' => 'Raket, shuttlecock, dan net',
                'rules' => 'Pemain memukul shuttlecock melewati net agar jatuh di area lawan. Pertandingan dapat dimainkan tunggal atau ganda.',
                'origin_country' => 'Inggris',
                'image' => 'badminton.jpg',
                'description' => 'Badminton atau bulu tangkis adalah olahraga raket yang dimainkan dengan memukul shuttlecock melewati net. Olahraga ini melatih kelincahan, kecepatan reaksi, dan konsentrasi.',
            ],
            [
                'name' => 'Bola Basket',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola basket dan ring',
                'rules' => 'Dua tim berusaha memasukkan bola ke ring lawan untuk mendapatkan poin.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'basket.jpg',
                'description' => 'Bola basket merupakan olahraga beregu yang bertujuan memasukkan bola ke ring lawan untuk memperoleh poin. Permainan ini membutuhkan koordinasi, ketepatan, dan kerja sama antarpemain.',
            ],
            [
                'name' => 'Renang',
                'category' => 'Olahraga Air',
                'equipment' => 'Pakaian renang dan kacamata renang',
                'rules' => 'Perenang menyelesaikan jarak perlombaan sesuai gaya dan ketentuan yang ditetapkan.',
                'origin_country' => 'Inggris',
                'image' => 'renang.jpg',
                'description' => 'Renang adalah olahraga air yang dilakukan dengan menggerakkan tubuh untuk berpindah di dalam air. Selain menjadi cabang perlombaan, renang juga bermanfaat untuk melatih kebugaran dan daya tahan tubuh.',
            ],
            [
                'name' => 'Bola Voli',
                'category' => 'Olahraga Tim',
                'equipment' => 'Bola voli dan net',
                'rules' => 'Dua tim berusaha menjatuhkan bola di area lawan dengan maksimal tiga sentuhan sebelum mengembalikan bola.',
                'origin_country' => 'Amerika Serikat',
                'image' => 'voli.jpg',
                'description' => 'Bola voli adalah olahraga beregu yang dimainkan dengan memukul bola melewati net agar jatuh di area lawan. Permainan ini mengandalkan komunikasi, kekompakan, dan ketepatan dalam menyerang maupun bertahan.',
            ],
            [
                'name' => 'Tenis',
                'category' => 'Olahraga Raket',
                'equipment' => 'Raket, bola tenis, dan net',
                'rules' => 'Pemain memukul bola melewati net ke area lawan dan berusaha mendapatkan poin.',
                'origin_country' => 'Inggris',
                'image' => 'tenis.jpg',
                'description' => 'Tenis merupakan olahraga raket yang dimainkan oleh dua pemain atau dua pasangan. Pemain harus memukul bola melewati net ke area lawan sambil menjaga ketepatan, stamina, dan strategi permainan.',
            ],
            [
                'name' => 'Tinju',
                'category' => 'Olahraga Bela Diri',
                'equipment' => 'Sarung tinju dan pelindung gigi',
                'rules' => 'Dua petinju bertanding dalam ronde dengan aturan pukulan dan keselamatan yang berlaku.',
                'origin_country' => 'Inggris',
                'image' => 'tinju.jpg',
                'description' => 'Tinju adalah olahraga bela diri yang mempertemukan dua petinju dalam pertandingan sesuai aturan. Olahraga ini membutuhkan kekuatan, kecepatan, ketahanan fisik, dan kemampuan bertahan.',
            ],
            [
                'name' => 'Bersepeda',
                'category' => 'Olahraga Individu',
                'equipment' => 'Sepeda dan helm',
                'rules' => 'Peserta bersepeda mengikuti rute atau menyelesaikan jarak yang ditentukan sesuai aturan perlombaan.',
                'origin_country' => 'Prancis',
                'image' => 'sepeda.jpg',
                'description' => 'Bersepeda adalah aktivitas olahraga menggunakan sepeda yang dapat dilakukan di jalan raya, lintasan khusus, maupun jalur alam. Olahraga ini membantu melatih daya tahan tubuh dan kebugaran jantung.',
            ],
            [
                'name' => 'Atletik',
                'category' => 'Olahraga Individu',
                'equipment' => 'Sepatu olahraga, pakaian atletik',
                'rules' => 'Peserta mengikuti nomor perlombaan sesuai aturan, seperti lari, lompat, atau lempar.',
                'origin_country' => 'Yunani',
                'image' => 'atletik.jpeg',
                'description' => 'Atletik mencakup berbagai cabang olahraga seperti lari, jalan cepat, lompat, dan lempar. Cabang ini mengutamakan kemampuan dasar fisik, seperti kecepatan, kekuatan, kelincahan, dan daya tahan.',
            ],
            [
                'name' => 'Golf',
                'category' => 'Olahraga Individu',
                'equipment' => 'Stik golf dan bola golf',
                'rules' => 'Pemain berusaha memasukkan bola ke setiap lubang dengan jumlah pukulan sesedikit mungkin.',
                'origin_country' => 'Skotlandia',
                'image' => 'golf.jpg',
                'description' => 'Golf adalah olahraga yang dilakukan dengan memukul bola menggunakan stik menuju serangkaian lubang di lapangan. Tujuannya adalah menyelesaikan permainan dengan jumlah pukulan sesedikit mungkin.',
            ],
            [
                'name' => 'Karate',
                'category' => 'Olahraga Bela Diri',
                'equipment' => 'Seragam karate dan sabuk',
                'rules' => 'Peserta bertanding dengan teknik pukulan, tendangan, dan pertahanan sesuai aturan karate.',
                'origin_country' => 'Jepang',
                'image' => 'karate.jpg',
                'description' => 'Karate adalah seni bela diri asal Jepang yang menggunakan teknik pukulan, tendangan, tangkisan, dan kuda-kuda. Selain melatih kebugaran, karate juga mengajarkan disiplin, fokus, dan pengendalian diri.',
            ],
            [
                'name' => 'Panahan',
                'category' => 'Olahraga Individu',
                'equipment' => 'Busur dan anak panah',
                'rules' => 'Peserta membidik sasaran dan mengumpulkan poin berdasarkan ketepatan tembakan.',
                'origin_country' => 'Berkembang di berbagai negara',
                'image' => 'panahan.jpeg',
                'description' => 'Panahan adalah olahraga yang mengandalkan kemampuan membidik sasaran menggunakan busur dan anak panah. Olahraga ini membutuhkan konsentrasi, ketenangan, ketepatan, serta koordinasi tubuh yang baik.',
            ],
        ];

        foreach ($sports as $sport) {
            DB::table('sports')->updateOrInsert(
                ['name' => $sport['name']],
                $sport
            );
        }
    }
}
