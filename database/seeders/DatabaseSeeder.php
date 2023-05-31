<?php

namespace Database\Seeders;


use App\Models\DownpourUser;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use App\Models\Team2021;
use App\Models\Drought_bingo;
use App\Models\Settings;
use App\Models\Team2022;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // User Admin
        User::create([
            'name' => 'Admin',
            'role' => 'Coordinator',
            'email' => 'admin@umn.ac.id',
            'password' => bcrypt('nirmalabentalaumneco2023')
          ]);



        // Divisi UMN ECO 2023
        Team::create([
            'name' => 'JAGAT',
            'alias' => 'Badan Pengurus Harian',
            'language' => 'Indonesia',
            'arti' => 'Alam Semesta',
            'logo' => 'Alam Semesta',
            'color' => 'Biru Laut',
            'articolor' => 'Merepresentasikan karakter yang dapat dipercaya, unggul dan komunikatif.',
            'desc' => 'Sama halnya dengan alam semesta yang mempersatukan seluruh unsur dalam dunia, Tim JAGAT siap untuk membaurkan seluruh tim UMN ECO menjadi sebuah kesatuan yang dinamis.',
            'jobdesc' => 'Tim JAGAT memiliki tanggung jawab untuk mengawasi tiap-tiap tim dalam UMN ECO 2023. Tidak hanya itu, tim JAGAT pun berperan sebagai jembatan antar tim satu dengan yang lainnya agar dapat bekerja sama dengan lebih baik. ',
            'status' => 0
        ]);
        Team::create([
            'name' => 'ANTA',
            'alias' => 'Creative',
            'language' => 'Sanskerta',
            'arti' => 'Penjaga Alam, Matahari',
            'logo' => 'Matahari',
            'color' => 'Merah',
            'articolor' => 'Merepresentasikan antusias dalam brainstorming, bersemangat, serta menarik perhatian.',
            'desc' => 'Seperti matahari yang menjadi penerang dan pemberi kehidupan bagi alam semesta, tim Anta juga berperan untuk menyinari dan memberi kehidupan dalam pelaksanaan UMN ECO melalui konten-konten yang menarik serta berkualitas.',
            'jobdesc' => 'Tim Anta memiliki tanggung jawab untuk menciptakan konsep serta memberikan konten kreatif selama keberlangsungan kegiatan UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'GANTAR',
            'alias' => 'Insurer',
            'language' => 'Batak Simalungun',
            'arti' => 'Perisai',
            'logo' => 'Perisai',
            'color' => 'Abu-abu',
            'articolor' => 'Merepresentasikan keseriusan, kestabilan, kemandirian, dan tanggung jawab.',
            'desc' => 'Seperti perisai yang merupakan alat pertahanan dan perlindungan, tim Gantar siap menjadi benteng terdepan untuk menjaga kelancaran serta keamanan dari berlangsungnya kegiatan UMN ECO 2023.',
            'jobdesc' => 'Tim Gantar berperan dalam menjaga ketertiban dan kelancaran berlangsungnya kegiatan UMN ECO 2023 dari awal hingga akhir, sesuai dengan regulasi yang berlaku.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'LIKU',
            'subdivisi' => 'Media Partner',
            'alias' => 'Sponsorship & Media Partner',
            'language' => 'Sumba Timur',
            'arti' => 'Ikatan',
            'logo' => 'Tali yang terikat',
            'color' => 'Merah Muda',
            'articolor' => 'Merepresentasikan sifat yang kalem dan lembut.',
            'desc' => 'DDalam hal mempersatukan dan memperkuat suatu hal, diperlukanlah tali yang mengikat dengan erat. Begitu pula dengan tim Liku yang mempersatukan dan menghubungkan berbagai pihak dengan UMN ECO.',
            'jobdesc' => 'Tim Liku sendiri merupakan gabungan dari Tim Sponsorship dan Tim Media Partner, dimana berperan untuk mencari sponsor dan media partner dari berbagai pihak agar kerja sama dapat terjalin dengan UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'LIKU',
            'subdivisi' => 'Sponsorship',
            'alias' => 'Sponsorship & Media Partner',
            'language' => 'Sumba Timur',
            'arti' => 'Ikatan',
            'logo' => 'Tali yang terikat',
            'color' => 'Merah Muda',
            'articolor' => 'Merepresentasikan sifat yang kalem dan lembut.',
            'desc' => 'DDalam hal mempersatukan dan memperkuat suatu hal, diperlukanlah tali yang mengikat dengan erat. Begitu pula dengan tim Liku yang mempersatukan dan menghubungkan berbagai pihak dengan UMN ECO.',
            'jobdesc' => 'Tim Liku sendiri merupakan gabungan dari Tim Sponsorship dan Tim Media Partner, dimana berperan untuk mencari sponsor dan media partner dari berbagai pihak agar kerja sama dapat terjalin dengan UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'LUA',
            'alias' => 'Logistic',
            'language' => 'Bengkulu',
            'arti' => 'Gerobak',
            'logo' => 'Gerobak',
            'color' => 'Ungu Violet',
            'articolor' => 'Merepresentasikan keseimbangan fisik, mental dan perhatian terhadap sesama.',
            'desc' => 'Sama seperti gerobak yang berfungsi membawakan berbagai macam barang kebutuhan, tim Lua juga berperan sebagai penampung segala keperluan kegiatan UMN ECO 2023.',
            'jobdesc' => 'Tim Lua memiliki tanggung jawab untuk menyediakan dan menampung segala keperluan fisik yang akan digunakan selama kegiatan UMN ECO 2023 berlangsung.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'LAWANG',
            'alias' => 'Registration',
            'language' => 'Banjar',
            'arti' => 'Pintu',
            'logo' => 'Lubang kunci',
            'color' => 'Cokelat',
            'articolor' => 'Merepresentasikan kehangatan, rasa nyaman, kepercayaan, dan ketabahan.',
            'desc' => 'Pintu merupakan simbol dari awal untuk memulai segalanya, begitu juga dengan tim Lawang yang menjadi pintu masuk bagi ECO Friends untuk ikut serta dalam kegiatan UMN ECO.',
            'jobdesc' => 'Tim Lawang berperan mengurus registrasi terkait pendataan ECO Friends dalam kegiatan UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'ORTA',
            'alias' => 'Website',
            'language' => 'Bali',
            'arti' => 'Banyak berita',
            'logo' => 'Koran yang digulung',
            'color' => 'Jingga',
            'articolor' => 'Merepresentasikan sisi yang segar dan aktif.',
            'desc' => 'Bagaikan koran yang menyuguhkan berbagai macam berita, tim Orta siap menyediakan platform sebagai tempat dimuatnya informasi seputar UMN ECO 2023.',
            'jobdesc' => 'Tim Orta bertanggung jawab dalam pengelolaan website resmi UMN ECO 2023, mencakup pemaparan informasi yang lengkap dan aktual di dalamnya.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'ARTO',
            'alias' => 'Finance',
            'language' => 'Jawa Krama Inggil (Halus/Keraton)',
            'arti' => 'Uang',
            'logo' => 'Huruf \'S\' yang seringkali diidentikkan dengan uang',
            'color' => 'Hijau',
            'articolor' => 'Merepresentasikan ambisi dan kekayaan yang berlimpah.',
            'desc' => 'Selaras dengan logonya,  tim Arto mengelola segala hal yang berkaitan dengan uang. Penggunaan bahasa Jawa halus memiliki keterkaitan dengan tim Arto yang memecahkan permasalahan dengan lembut.',
            'jobdesc' => 'Tim Arto berperan dalam menyusun strategi untuk pencarian dana demi pelaksanaan kegiatan UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'GENTA',
            'subdivisi' => 'Public Relation',
            'alias' => 'Publication & Visual',
            'language' => 'Kutai (Kalimantan Timur)',
            'arti' => 'Bel yang besar',
            'logo' => 'Bel',
            'color' => 'Kuning',
            'articolor' => 'Merepresentasikan karakter yang positif dan optimis.',
            'desc' => 'Bagaikan bel yang bunyinya dapat didengar oleh banyak orang, tim GENTA siap untuk menjadi sumber informasi bagi para ECO Friends.',
            'jobdesc' => 'Tim Genta terbagi menjadi dua yaitu tim Public Relations dan tim Visual. Tim Public Relations berperan mempublikasikan informasi serta merancang ide-ide konten sosial media dari UMN ECO 2023. Sedangkan, tim Visual bertugas membuat visualisasi dari berbagai konten yang sesuai dengan tema dan konsep UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'GENTA',
            'subdivisi' => 'Visual',
            'alias' => 'Publication & Visual',
            'language' => 'Kutai (Kalimantan Timur)',
            'arti' => 'Bel yang besar',
            'logo' => 'Bel',
            'color' => 'Kuning',
            'articolor' => 'Merepresentasikan karakter yang positif dan optimis.',
            'desc' => 'Bagaikan bel yang bunyinya dapat didengar oleh banyak orang, tim GENTA siap untuk menjadi sumber informasi bagi para ECO Friends.',
            'jobdesc' => 'Tim Genta terbagi menjadi dua yaitu tim Public Relations dan tim Visual. Tim Public Relations berperan mempublikasikan informasi serta merancang ide-ide konten sosial media dari UMN ECO 2023. Sedangkan, tim Visual bertugas membuat visualisasi dari berbagai konten yang sesuai dengan tema dan konsep UMN ECO 2023.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'BACARITA',
            'alias' => 'Documentation',
            'subdivisi' => 'Foto',
            'language' => 'Manado',
            'arti' => 'Bercerita, Banyak cerita',
            'logo' => 'Setengah buku, setengah kamera',
            'color' => 'Hitam',
            'articolor' => 'Merepresentasikan kanvas kosong akan dipenuhi dengan berbagai warna dan gambar  yang menyimpan kisah UMN ECO.',
            'desc' => 'Seperti kamera berfungsi untuk menangkap momen, dan buku sebagai media menyampaikan cerita, tim Bacarita juga berperan untuk menangkap dan menceritakan momen-momen UMN ECO.',
            'jobdesc' => 'Tim Bacarita berperan untuk mengabadikan serta menyampaikan seluruh cerita yang berkaitan kegiatan UMN ECO 2023, baik melalui foto maupun video yang sudah diabadikan.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'BACARITA',
            'subdivisi' => 'Video',
            'alias' => 'Documentation',
            'language' => 'Manado',
            'arti' => 'Bercerita, Banyak cerita',
            'logo' => 'Setengah buku, setengah kamera',
            'color' => 'Hitam',
            'articolor' => 'Merepresentasikan kanvas kosong akan dipenuhi dengan berbagai warna dan gambar  yang menyimpan kisah UMN ECO.',
            'desc' => 'Seperti kamera berfungsi untuk menangkap momen, dan buku sebagai media menyampaikan cerita, tim Bacarita juga berperan untuk menangkap dan menceritakan momen-momen UMN ECO.',
            'jobdesc' => 'Tim Bacarita berperan untuk mengabadikan serta menyampaikan seluruh cerita yang berkaitan kegiatan UMN ECO 2023, baik melalui foto maupun video yang sudah diabadikan.',
            'status' => 0
        ]);
        Team::create([
            'name' => 'GERHA',
            'alias' => 'Decoration',
            'language' => 'Sansekerta',
            'arti' => 'Bangunan',
            'logo' => 'Ukiran',
            'color' => 'Hijau Toska',
            'articolor' => 'Merepresentasikan ketenangan, kesan professional dan handal.',
            'desc' => 'Bangunan dan ukiran selalu menjadi satu kesatuan. Dimana ukiran selalu diibaratkan sebagai hal indah yang menghiasi bangunan, sama seperti tim Gerha yang memperindah latar dan mengukir makna di setiap kegiatan UMN ECO.',
            'jobdesc' => 'Tim Gerha berperan mempercantik latar dari setiap lokasi pelaksanaan kegiatan UMN ECO 2023, dengan tujuan untuk memperkuat suasana acara serta menarik perhatian audiens.',
            'status' => 0
        ]);



        // Anggota UMN ECO 2021

        // JAGAT
        Team2021::create([
            'name' => 'Agnes Viriana',
            'team' => 'JAGAT',
            'jabatan' => 'Supervisi',
            'image' => 'Foto2021/JAGAT/JAGAT_Agnes Viriana_1.png'
        ]);
        Team2021::create([
            'name' => 'Caristheo Bonancy',
            'team' => 'JAGAT',
            'jabatan' => 'Ketua',
            'image' => 'Foto2021/JAGAT/JAGAT_Caristheo Bonancy_1.png'
        ]);
        Team2021::create([
            'name' => 'Putu Pricilia',
            'team' => 'JAGAT',
            'jabatan' => 'Wakil Ketua',
            'image' => 'Foto2021/JAGAT/JAGAT_Putu Pricilia_1.png'
        ]);
        Team2021::create([
            'name' => 'Jovita Christie',
            'team' => 'JAGAT',
            'jabatan' => 'Sekretaris 1',
            'image' => 'Foto2021/JAGAT/JAGAT_Jovita Christie_1.png'
        ]);
        Team2021::create([
            'name' => 'Fransiskus Juan',
            'team' => 'JAGAT',
            'jabatan' => 'Sekretaris 2',
            'image' => 'Foto2021/JAGAT/JAGAT_Fransiskus Juan_1.png'
        ]);
        Team2021::create([
            'name' => 'Lucya Mawar',
            'team' => 'JAGAT',
            'jabatan' => 'Sekretaris 1',
            'image' => 'Foto2021/JAGAT/JAGAT_Lucya Mawar_1.png'
        ]);

        // ANTA
        Team2021::create([
            'name' => 'Luis Centuri',
            'team' => 'ANTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ANTA/ANTA_Luis Centuri_1.png'
        ]);
        Team2021::create([
            'name' => 'Veronika Debora',
            'team' => 'ANTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ANTA/ANTA_Veronika Debora_1.png'
        ]);
        Team2021::create([
            'name' => 'Mikyal Saputra',
            'team' => 'ANTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ANTA/ANTA_Mikyal Saputra_1.png'
        ]);
        Team2021::create([
            'name' => 'Giany Caroline',
            'team' => 'ANTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ANTA/ANTA_Giany Caroline_1.png'
        ]);
        Team2021::create([
            'name' => 'Zaky Syarafy',
            'team' => 'ANTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ANTA/ANTA_Zaky Syarafy_1.png'
        ]);
        Team2021::create([
            'name' => 'Jesslyn Anggreani',
            'team' => 'ANTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ANTA/ANTA_Jesslyn Anggreani_1.png'
        ]);

        // ARTO
        Team2021::create([
            'name' => 'Priscilla Agatha',
            'team' => 'ARTO',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ARTO/ARTO_Priscilla Agatha_1.png'
        ]);
        Team2021::create([
            'name' => 'Angela Artashevia',
            'team' => 'ARTO',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ARTO/ARTO_Angela Artashevia_1.png'
        ]);
        Team2021::create([
            'name' => 'Kenneth William',
            'team' => 'ARTO',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ARTO/ARTO_Kenneth William_1.png'
        ]);
        Team2021::create([
            'name' => 'Nicolas Wibowo',
            'team' => 'ARTO',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ARTO/ARTO_Nicolas Wibowo_1.png'
        ]);
        Team2021::create([
            'name' => 'Eunice Angelie',
            'team' => 'ARTO',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ARTO/ARTO_Eunice Angelie_1.png'
        ]);
        Team2021::create([
            'name' => 'Evelyn Farencia',
            'team' => 'ARTO',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ARTO/ARTO_Evelyn Farencia_1.png'
        ]);
        Team2021::create([
            'name' => 'Caterine',
            'team' => 'ARTO',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ARTO/ARTO_Caterine_1.png'
        ]);

        // BACARITA
        Team2021::create([
            'name' => 'Fiezra',
            'team' => 'BACARITA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/BACARITA/BACARITA_Fiezra_1.png'
        ]);
        Team2021::create([
            'name' => 'Cindy Buntoro',
            'team' => 'BACARITA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/BACARITA/BACARITA_Cindy Buntoro_1.png'
        ]);
        Team2021::create([
            'name' => 'Jason Julian',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Jason Julian_1.png'
        ]);
        Team2021::create([
            'name' => 'Dicky Wijaya',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Dicky Wijaya_1.png'
        ]);
        Team2021::create([
            'name' => 'Muhammad Radifan',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Muhammad Radifan_1.png'
        ]);
        Team2021::create([
            'name' => 'Rakha Adhyasta',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Rakha Adhyasta_1.png'
        ]);
        Team2021::create([
            'name' => 'Michael Andrian',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Michael Andrian_1.png'
        ]);
        Team2021::create([
            'name' => 'Lexy Jeremy',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Lexy Jeremy_1.png'
        ]);
        Team2021::create([
            'name' => 'Alpin Santoso',
            'team' => 'BACARITA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/BACARITA/BACARITA_Alpin Santoso_1.png'
        ]);

        // GANTAR
        Team2021::create([
            'name' => 'Melvin Dwi Rangga',
            'team' => 'GANTAR',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/GANTAR/GANTAR_Melvin Dwi Rangga_1.png'
        ]);
        Team2021::create([
            'name' => 'Valerie Wijaya',
            'team' => 'GANTAR',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/GANTAR/GANTAR_Valerie Wijaya_1.png'
        ]);
        Team2021::create([
            'name' => 'Christopher Louis',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Christopher Louis_1.png'
        ]);
        Team2021::create([
            'name' => 'Angeline Christian',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Angeline Christian_1.png'
        ]);
        Team2021::create([
            'name' => 'Jennifer Claudya',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Jennifer Claudya_1.png'
        ]);
        Team2021::create([
            'name' => 'Aloysius Theodore',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Aloysius Theodore_1.png'
        ]);
        Team2021::create([
            'name' => 'Grafviella Fransisca',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Grafviella Fransisca_1.png'
        ]);
        Team2021::create([
            'name' => 'Luther',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Luther_1.png'
        ]);
        Team2021::create([
            'name' => 'Jesslyn Hartania',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Jesslyn Hartania_1.png'
        ]);
        Team2021::create([
            'name' => 'Saretta Raissa',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Saretta Raissa_1.png'
        ]);
        Team2021::create([
            'name' => 'Elizabeth Clarissa',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Elizabeth Clarissa_1.png'
        ]);
        Team2021::create([
            'name' => 'Survina',
            'team' => 'GANTAR',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GANTAR/GANTAR_Survina_1.png'
        ]);

        // GENTA
        Team2021::create([
            'name' => 'Laurensius Dimas',
            'team' => 'GENTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/GENTA/GENTA_Laurensius Dimas_1.png'
        ]);
        Team2021::create([
            'name' => 'Nikolas Nathan',
            'team' => 'GENTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/GENTA/GENTA_Nikolas Nathan_1.png'
        ]);
        Team2021::create([
            'name' => 'Sheren Nathalie',
            'team' => 'GENTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/GENTA/GENTA_Sheren Nathalie_1.png'
        ]);
        Team2021::create([
            'name' => 'Michiko Mora',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Michiko Mora_1.png'
        ]);
        Team2021::create([
            'name' => 'Kenly Jonathan',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Kenly Jonathan_1.png'
        ]);
        Team2021::create([
            'name' => 'Lidia Yamin',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Lidia Yamin_1.png'
        ]);
        Team2021::create([
            'name' => 'Vincentius Christian',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Vincentius Christian_1.png'
        ]);
        Team2021::create([
            'name' => 'Nathaniel Lucas',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Nathaniel Lucas_1.png'
        ]);
        Team2021::create([
            'name' => 'Salsabila Zahra',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Salsabila Zahra_1.png'
        ]);
        Team2021::create([
            'name' => 'Tirza Rephaelica',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Tirza Rephaelica_1.png'
        ]);
        Team2021::create([
            'name' => 'Nikolaus Andre',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Nikolaus Andre_1.png'
        ]);
        Team2021::create([
            'name' => 'Dwi Sita Sari',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Dwi Sita Sari_1.jpg'
        ]);
        Team2021::create([
            'name' => 'Vireen Ernestine',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Vireen Ernestine_1.png'
        ]);
        Team2021::create([
            'name' => 'Priscilla Brenda',
            'team' => 'GENTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/GENTA/GENTA_Priscilla Brenda_1.png'
        ]);

        // LAWANG
        Team2021::create([
            'name' => 'Steven',
            'team' => 'LAWANG',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/LAWANG/LAWANG_Steven_1.png'
        ]);
        Team2021::create([
            'name' => 'Jocelyn Helena',
            'team' => 'LAWANG',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/LAWANG/LAWANG_Jocelyn Helena_1.png'
        ]);
        Team2021::create([
            'name' => 'Dorthy Beatrice',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Dorthy Beatrice_1.png'
        ]);
        Team2021::create([
            'name' => 'Audrey Natasha',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Audrey Natasha_1.png'
        ]);
        Team2021::create([
            'name' => 'Nicky Tan',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Nicky Tan_1.png'
        ]);
        Team2021::create([
            'name' => 'Arvan Fernando',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Arvan Fernando_1.png'
        ]);
        Team2021::create([
            'name' => 'Winona Maria',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Winona Maria_1.png'
        ]);
        Team2021::create([
            'name' => 'Verllencia',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Verllencia_1.png'
        ]);
        Team2021::create([
            'name' => 'Andrea',
            'team' => 'LAWANG',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LAWANG/LAWANG_Andrea_1.png'
        ]);

        // LIKU
        Team2021::create([
            'name' => 'Jesslyn',
            'team' => 'LIKU',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/LIKU/LIKU_Jesslyn_1.png'
        ]);
        Team2021::create([
            'name' => 'Ramadhani Putri',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Ramadhani Putri_1.png'
        ]);
        Team2021::create([
            'name' => 'Naila Medita',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Naila Medita_1.png'
        ]);
        Team2021::create([
            'name' => 'Nur Fadillah',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Nur Fadillah_1.png'
        ]);
        Team2021::create([
            'name' => 'Eleonora Axcel',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Eleonora Axcel_1.png'
        ]);
        Team2021::create([
            'name' => 'Cecillia Angelica',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Cecillia Angelica_1.png'
        ]);
        Team2021::create([
            'name' => 'Ariella Dwiputri',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Ariella Dwiputri_1.png'
        ]);
        Team2021::create([
            'name' => 'Madala Fandrimira',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Madala Fandrimira_1.png'
        ]);
        Team2021::create([
            'name' => 'Nadia Noor',
            'team' => 'LIKU',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LIKU/LIKU_Nadia Noor_1.png'
        ]);

        // LUA
        Team2021::create([
            'name' => 'Sandyka Ari Kurniawan',
            'team' => 'LUA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/LUA/LUA_Sandyka Ari Kurniawan_1.png'
        ]);
        Team2021::create([
            'name' => 'Albertus Jovann N',
            'team' => 'LUA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/LUA/LUA_Albertus Jovann N_1.png'
        ]);
        Team2021::create([
            'name' => 'Afreza Danang Fathoni',
            'team' => 'LUA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LUA/LUA_Afreza Danang Fathoni_1.png'
        ]);
        Team2021::create([
            'name' => 'Adipta Muhammad',
            'team' => 'LUA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/LUA/LUA_Adipta Muhammad_1.png'
        ]);

        // ORTA
        Team2021::create([
            'name' => 'Felix Laynardi',
            'team' => 'ORTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ORTA/ORTA_Felix Laynardi_1.png'
        ]);
        Team2021::create([
            'name' => 'Delvin Chiandardi',
            'team' => 'ORTA',
            'jabatan' => 'Koordinator',
            'image' => 'Foto2021/ORTA/ORTA_Delvin Chiandardi_1.png'
        ]);
        Team2021::create([
            'name' => 'Lifosmin Simon',
            'team' => 'ORTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ORTA/ORTA_Lifosmin Simon_1.png'
        ]);
        Team2021::create([
            'name' => 'Frans Imanuel',
            'team' => 'ORTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ORTA/ORTA_Frans Imanuel_1.png'
        ]);
        Team2021::create([
            'name' => 'Kevin Jonathan Kristianto',
            'team' => 'ORTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ORTA/ORTA_Kevin Jonathan Kristianto_1.png'
        ]);
        Team2021::create([
            'name' => 'Alexander Moya Hin',
            'team' => 'ORTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ORTA/ORTA_Alexander Moya Hin_1.png'
        ]);
        Team2021::create([
            'name' => 'Chotiwut',
            'team' => 'ORTA',
            'jabatan' => 'Anggota',
            'image' => 'Foto2021/ORTA/ORTA_Chotiwut_1.png'
        ]);
    }
}

