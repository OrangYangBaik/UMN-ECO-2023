<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use App\Models\Team;
use App\Models\Team2021;
use App\Models\Milestone;
use Illuminate\Support\Str;

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


        // User Admin Arcade
        Admin::create([
            'name' => 'AdminArcade1',
            'email' => 'adminarcade1@umn.ac.id',
            'booth' => 1,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminArcade2',
            'email' => 'adminarcade2@umn.ac.id',
            'booth' => 2,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminArcade3',
            'email' => 'adminarcade3@umn.ac.id',
            'booth' => 3,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminArcade4',
            'email' => 'adminarcade4@umn.ac.id',
            'booth' => 4,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminArcade5',
            'email' => 'adminarcade5@umn.ac.id',
            'booth' => 5,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        // User Admin Merchandise
        Admin::create([
            'name' => 'AdminMerchandise1',
            'email' => 'adminmerchandise1@umn.ac.id',
            'booth' => 1,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminMerchandise2',
            'email' => 'adminmerchandise2@umn.ac.id',
            'booth' => 2,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminMerchandise3',
            'email' => 'adminmerchandise3@umn.ac.id',
            'booth' => 3,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        // User Admin Side Quest
        Admin::create([
            'name' => 'AdminSideQuest1',
            'email' => 'adminsidequest1@umn.ac.id',
            'booth' => 1,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminSideQuest2',
            'email' => 'adminsidequest2@umn.ac.id',
            'booth' => 2,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
        Admin::create([
            'name' => 'AdminSideQuest3',
            'email' => 'adminsidequest3@umn.ac.id',
            'booth' => 3,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);
       
        // User Admin Dapat Kupon
        Admin::create([
            'name' => 'AdminDapatKupon1',
            'email' => 'admindapatkupon1@umn.ac.id',
            'booth' => 1,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        Admin::create([
            'name' => 'AdminDapatKupon2',
            'email' => 'admindapatkupon2@umn.ac.id',
            'booth' => 2,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        Admin::create([
            'name' => 'AdminDapatKupon3',
            'email' => 'admindapatkupon3@umn.ac.id',
            'booth' => 3,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        // User Admin Kurang Kupon
        Admin::create([
            'name' => 'AdminKurangKupon1',
            'email' => 'adminkurangkupon1@umn.ac.id',
            'booth' => 1,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        Admin::create([
            'name' => 'AdminKurangKupon2',
            'email' => 'adminkurangkupon2@umn.ac.id',
            'booth' => 2,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        Admin::create([
            'name' => 'AdminKurangKupon3',
            'email' => 'adminkurangkupon3@umn.ac.id',
            'booth' => 3,
            'password' => bcrypt('nirmalabentalaumneco2023')
        ]);

        // Dummy User
        User::create([
            'id' => Str::uuid(),
            'nama' => 'dummy1',
            'nim' => '00000012345',
            'angkatan' => '2021',
            'fakultas' => 'Ilmu Komunikasi',
            'prodi' => 'Komunikasi Strategis',
            'email' => 'dummy1@student.umn.ac.id',
            'line' => '12345',
            'instagram' => '12345',
            'password' => bcrypt('password'),
            'wehea' => 0,
            'meru_betiri' => 0,
            'scanned_arcade' => 0,
            'scanned_merchandise' => 0,
            'scanned_dapat_kupon' => 0,
            'scanned_tukar_kupon' => 0,
            'booth_merchandise' => 0,
            'booth_dapat_kupon' => 0,
            'booth_tukar_kupon' => 0,
            'credit' => 5,
            'point' => 0,
            'booth_arcade' => 0
        ]);

        User::create([
            'id' => Str::uuid(),
            'nama' => 'dummy2',
            'nim' => '00000012346',
            'angkatan' => '2022',
            'fakultas' => 'Teknik dan Informatika',
            'prodi' => 'Informatika',
            'email' => 'dummy2@student.umn.ac.id',
            'line' => '123455',
            'instagram' => '123455',
            'password' => bcrypt('password'),
            'wehea' => 0,
            'meru_betiri' => 0,
            'scanned_arcade' => 0,
            'scanned_merchandise' => 0,
            'scanned_dapat_kupon' => 0,
            'scanned_tukar_kupon' => 0,
            'booth_merchandise' => 0,
            'booth_dapat_kupon' => 0,
            'booth_tukar_kupon' => 0,
            'credit' => 5,
            'point' => 0,
            'booth_arcade' => 0
        ]);

        User::create([
            'id' => Str::uuid(),
            'nama' => 'dummy3',
            'nim' => '00000012347',
            'angkatan' => '2021',
            'fakultas' => 'Teknik dan Informatika',
            'prodi' => 'Informatika',
            'email' => 'dummy3@student.umn.ac.id',
            'line' => '1234556',
            'instagram' => '1234556',
            'password' => bcrypt('password'),
            'wehea' => 0,
            'meru_betiri' => 0,
            'scanned_arcade' => 0,
            'scanned_merchandise' => 0,
            'scanned_dapat_kupon' => 0,
            'scanned_tukar_kupon' => 0,
            'booth_merchandise' => 0,
            'booth_dapat_kupon' => 0,
            'booth_tukar_kupon' => 0,
            'credit' => 5,
            'point' => 0,
            'booth_arcade' => 0
        ]);

        User::create([
            'id' => Str::uuid(),
            'nama' => 'dummy4',
            'nim' => '00000012348',
            'angkatan' => '2021',
            'fakultas' => 'Teknik dan Informatika',
            'prodi' => 'Informatika',
            'email' => 'dummy4@student.umn.ac.id',
            'line' => '1234556',
            'instagram' => '1234556',
            'password' => bcrypt('password'),
            'wehea' => 0,
            'meru_betiri' => 0,
            'scanned_arcade' => 0,
            'scanned_merchandise' => 0,
            'scanned_dapat_kupon' => 0,
            'scanned_tukar_kupon' => 0,
            'booth_merchandise' => 0,
            'booth_dapat_kupon' => 0,
            'booth_tukar_kupon' => 0,
            'credit' => 5,
            'point' => 0,
            'booth_arcade' => 0
        ]);

        User::create([
            'id' => Str::uuid(),
            'nama' => 'dummy5',
            'nim' => '00000012349',
            'angkatan' => '2021',
            'fakultas' => 'Teknik dan Informatika',
            'prodi' => 'Informatika',
            'email' => 'dummy5@student.umn.ac.id',
            'line' => '1234556',
            'instagram' => '1234556',
            'password' => bcrypt('password'),
            'wehea' => 0,
            'meru_betiri' => 0,
            'scanned_arcade' => 0,
            'scanned_merchandise' => 0,
            'scanned_dapat_kupon' => 0,
            'scanned_tukar_kupon' => 0,
            'booth_merchandise' => 0,
            'booth_dapat_kupon' => 0,
            'booth_tukar_kupon' => 0,
            'credit' => 5,
            'point' => 0,
            'booth_arcade' => 0
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

        //Milestone
        Milestone::create([
            'nama_organisasi' => 'BANK SAMPAH',
            'gen' => '1',
            'tahun' => '2016',
            'overview' => 'Bank Sampah Gen 1 memiliki kegiatan utama yang bertajuk “Chlorofeel”. Dengan diselenggarakannya kegiatan tersebut, diharapkan mahasiswa/i dapat meningkatkan kepeduliannya terhadap lingkungan melalui pengumpulan dan penukaran berbagai kategori sampah. ',
            'program_1' => 'Chlorofeel',
            'program_2' => 'Dari Sampah Jadi Berkah',
            'program_3' => '',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Kegiatan pengumpulan serta penukaran berbagai kategori sampah dengan berbagai hadiah menarik oleh para nasabah yang merupakan mahasiswa/i Universitas Multimedia Nusantara.',        
            'keterangan_program_2' => 'Program ini dicanangkan dalam bentuk kunjungan sosial Bank Sampah Gen 1 ke salah satu sekolah yaitu SDN Curug Wetan V. Kegiatan ini adalah wujud nyata dari hasil pengumpulan sampah para nasabah yang disumbangkan menjadi alat-alat kebersihan untuk sekolah tersebut.',
            'keterangan_program_3' => '',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Kegiatan pengumpulan serta penukaran sampah yang diadakan oleh Bank Sampah Gen 1 sukses menarik perhatian, antusiasme, hingga kepedulian mahasiswa/i Universitas Multimedia Nusantara terhadap lingkungan. Hal ini terbukti dari jumlah nasabah yang mencapai angka hingga ratusan mahasiswa/i.',
            'environmental_outcomes' => '“Lingkungan yang bersih adalah lingkungan yang bebas dari sampah” Tentunya,  kegiatan yang diselenggarakan oleh Bank Sampah Gen 1 mempunyai kontribusi terhadap lingkungan agar dapat lebih bersih dan terbebas dari sampah.',     
        ]);

        Milestone::create([
            'nama_organisasi' => 'BANK SAMPAH',
            'gen' => '2',
            'tahun' => '2017',
            'overview' => 'Pada tahun 2017, Bank Sampah kembali hadir mempersembahkan Spread Awareness About Cleanliness (S.P.A.R.C) yang merupakan sebuah kegiatan kerja sama Bank Sampah Gen 2 bersama dengan beberapa sekolah seperti SMPN 14 Tangsel, SMPN 19 Tangsel, hingga SMP Yaspita yang didokumentasikan serta dijadikan puncak dari acara Open Seminar Transparansi.',
            'program_1' => 'Spread Awareness About Cleanliness (S.P.A.R.C)',
            'program_2' => '“SO CLEAN (Spirit of Cleanliness)”',
            'program_3' => '"TRASHFORMATION"',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Sebuah kegiatan yang dilakukan oleh Bank Sampah Gen 2 dengan melakukan penyuluhan ke beberapa sekolah terdekat seperti SMPN 14 Tangsel, SMPN 19 Tangsel, hingga  SMP Yaspita.',
            'keterangan_program_2' => 'Program ini dilaksanakan Bank Sampah Gen 2  dalam bentuk dua jenis kompetisi yaitu membuat ilustrasi dan  fotografi berkaitan dengan ajakan menjaga serta mencintai lingkungan. Kompetisi ini diperuntukkan kepada mahasiswa/i Universitas Multimedia Nusantara berhadiahkan SKKM dan Voucher MAP.',
            'keterangan_program_3' => 'Program ini adalah kegiatan berupa Seminar & Workshop Bank Sampah Gen 2 bersama WWF dan TZU CHI mengenai pentingnya proses daur ulang sampah yang merupakan material sisa menjadi berbagai barang yang berguna. Selain itu, TRASHFORMATION pun juga membuka banyak booth interaktif berisikan game dengan hadiah-hadiah yang menarik.',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Kegiatan utama dari Bank Sampah Gen 2 yaitu  Spread Awareness About Cleanliness (S.P.A.R.C) berupa penyuluhan ke tiga sekolah terdekat berhasil mendapatkan banyak respon positif dari pihak-pihak eksternal.',
            'environmental_outcomes' => 'Berbagai kegiatan yang diselenggarakan oleh Bank Sampah Gen 2 tentunya mampu membangkitkan awareness generasi muda dalam lingkup internal serta eksternal kampus terhadap pentingnya memilah serta meminimalisir jumlah sampah di Indonesia.',
        ]);
        Milestone::create([
            'nama_organisasi' => 'BANK SAMPAH',
            'gen' => '3',
            'tahun' => '2018',
            'overview' => 'Bank Sampah Gen 3 telah mengadakan beberapa kegiatan berupa Workshop Daur Ulang Sampah hingga ECO-Run dengan objektif mengedukasi para mahasiswa/i secara interaktif.',
            'program_1' => '“Workshop Daur Ulang Sampah”',
            'program_2' => '“ECO-Run”',
            'program_3' => '“Plant the Green 2018”',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Workshop ini merupakan sebuah kerja sama dari Bank Sampah Gen 3 dengan UMN Festival berupa pelatihan bagi para nasabah maupun non-nasabah untuk menjadi sukarelawan sosialisasi daur ulang sampah kepada murid-murid Sekolah Dasar (SD).',
            'keterangan_program_2' => 'ECO-Run adalah acara khusus untuk para nasabah Bank Sampah berupa kegiatan lari bersama pada 11 November 2018.  Tidak hanya berlari, peserta pun melakukan berbagai aktivitas seperti pengumpulan sampah di sekitar rute hingga aksi penggalakan mengenai kelestarian lingkungan.',
            'keterangan_program_3' => 'Sebuah kegiatan yang wajib diikuti oleh para nasabah Bank Sampah berisikan aksi penanaman pohon secara serempak sebagai bentuk kepedulian terhadap bumi agar terhindar dari polusi. ',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Berbagai program dari Bank Sampah Gen 3 sukses menggaet perhatian serta partisipasi para mahasiswa/i Universitas Multimedia Nusantara di setiap kegiatannya mulai dari pengumpulan sampah, penanaman pohon, hingga pengadaan aktivitas ECO-Run.',
            'environmental_outcomes' => 'Kegiatan-kegiatan yang diselenggarakan oleh  Bank Sampah Gen  3 mempunyai dampak positif bagi lingkungan, khususnya dalam hal penghindaran polusi hingga pengurangan jumlah sampah di sekitar kampus Universitas Multimedia Nusantara.',
        ]);
        Milestone::create([
            'nama_organisasi' => 'BANK SAMPAH',
            'gen' => '4',
            'tahun' => '2019',
            'overview' => 'Di tahun ini, Bank Sampah Gen 4 bekerja sama dengan salah satu organisasi kemahasiswaan yaitu OMB UMN. GROW WITH NATURE pun menjadi kegiatan sosial utama berupa kunjungan Bank Sampah Gen 4 ke sekolah terdekat.',
            'program_1' => '“GROW WITH NATURE”',
            'program_2' => '“ECO-Run”',
            'program_3' => '',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Kegiatan aksi sosial dari Bank Sampah Gen 4 bersama dengan OMB UMN dalam bentuk kunjungan ke SDN Medang.',
            'keterangan_program_2' => 'Bank Sampah Gen 4 kembali mengadakan ECO-Run yang merupakan acara khusus untuk para nasabah Bank Sampah berupa kegiatan lari bersama, pengumpulan sampah, hingga aksi penggalakan kelestarian lingkungan.',
            'keterangan_program_3' => '',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Kegiatan pengumpulan sampah, GROW WITH NATURE, hingga ECO-Run tentunya mampu memperoleh antusiasme tinggi dari pihak nasabah maupun non-nasabah. Hal ini terpancarkan dari partisipasi hingga semangat yang ditunjukkan oleh mereka di setiap kegiatan.',
            'environmental_outcomes' => 'Dampak positif terhadap kelestarian lingkungan berupa pengurangan jumlah sampah, polusi, hingga pelatihan kualitas SDM  berhasil dicetak oleh Bank Sampah Gen 4.',
        ]);
        Milestone::create([
            'nama_organisasi' => 'BANK SAMPAH',
            'gen' => '5',
            'tahun' => '2020',
            'overview' => 'Bank Sampah Gen 5 mengajak mahasiswa/i Universitas Multimedia Nusantara untuk berpartisipasi dalam 3 kegiatan besar yang tentunya berdampak baik bagi bumi, yaitu SPACE (Submit PAper And Clean Earth), ADEM (Ada DEmi alaM) dan RUSH (RUn to SHare).',
            'program_1' => '“SPACE (Submit PAper And Clean Earth)”',
            'program_2' => '“ADEM (Ada DEmi alaM)”',
            'program_3' => '“RUSH (RUn to SHare)”',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Kegiatan ini mengajak baik mahasiswa/i aktif Universitas Multimedia Nusantara, calon Alumni, dan Alumni Universitas Multimedia Nusantara untuk mengumpulkan sampah kertas bekas yang akan didaur ulang. Melalui kegiatan ini, peserta yang berhasil mengumpulkan kertas minimal 2,5 kg akan memperoleh 1 buah stainless straw.',
            'keterangan_program_2' => 'Kegiatan ini terbuka bagi umum yang mengajak masyarakat melakukan kampanye 3 Days Challenge, dimana para peserta ditantang untuk mendokumentasikan aktivitas menanam dan merawat tanaman selama 3 hari. Melalui kegiatan ini, peserta memperoleh SKKM dan 4 orang pemenang memperoleh kaktus self-plant kit.',
            'keterangan_program_3' => 'Kegiatan ini merupakan Puncak Acara dari seluruh rangkaian, bertujuan untuk memberikan sumbangan Alat Pelindung Diri (APD) Upcycle kepada para tenaga kesehatan yang menangani kasus Covid-19. RUSH mengajak mahasiswa/i Universitas Multimedia Nusantara untuk ikut serta dalam kompetisi lari sambil berdonasi secara virtual. Para peserta yang berhasil menang karena memenuhi kategori ketentuan, memperoleh hadiah menarik dari Bank Sampah Gen 5.',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Kegiatan SPACE, ADEM, dan RUSH memperoleh antusiasme yang tinggi baik dari pihak internal maupun external Universitas Multimedia Nusantara. Hal ini terpancarkan melalui donasi sebesar Rp. 12.500.000,00 yang terkumpul dari 365 peserta RUSH, dan diteruskan untuk pembuatan Alat Pelindung Diri (APD) Upcycle tenaga medis Indonesia melalui kerja sama Bank Sampah x Demi Bumi.',
            'environmental_outcomes' => 'Dampak positif terhadap kelestarian lingkungan berupa pengurangan jumlah sampah kertas bekas, peningkatan kepedulian terhadap tanaman, hingga pembuatan Alat Pelindung Diri (APD) Upcycle berhasil dicetak oleh Bank Sampah Gen 5.',
        ]);

        Milestone::create([
            'nama_organisasi' => 'UMN ECO',
            'gen' => '1',
            'tahun' => '2021',
            'overview' => 'Pada 2020, pandemi Covid-19 terjadi sehingga  segala kegiatan harus dilaksanakan secara daring. Hal ini, membuat Bank Sampah akhirnya melakukan rebranding menjadi UMN ECO (Earth Caring Operation – artinya tidak merusak dan membahayakan lingkungan) dengan pemikiran dapat mengangkat isu lebih luas. Tim UMN ECO beserta dengan logo-logonya juga terbentuk dan memiliki sebutan ECO Family/Fams. Di tahun pertamanya ini,  UMN ECO mengangkat tema “Environmental Compassion for Our Nation” yang mencerminkan rasa keprihatinan secara mendalam terhadap bangsa dalam ranah lingkungan, dengan konsep “True Colors of Nature”. UMN ECO melaksanakan 3 kegiatan utama, yaitu RED, GREEN dan BLUE.',
            'program_1' => 'RED',
            'program_2' => 'GREEN atau GREENATE',
            'program_3' => 'BLUE (Behold The Undersea)',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Kegiatan ini mengajak ECO Friends (mahasiswa/i Universitas Multimedia Nusantara) untuk melakukan upaya penyelamatan bumi melalui 2 cara. Cara yang pertama adalah QUEST (misi wajib) berisi UTOPIA: Small Act Big Impact, ECO Friends diminta untuk menghapuskan Email yang sudah tidak perlu sebagai pengurangan polusi karbon. Kemudian RISE, ECO Friends diminta untuk menanam tanaman sebagai simbol dari permulaan kehidupan baru. Cara yang kedua adalah MYSTERY QUEST (misi tambahan) berisi UTILE (Useless Become Useful), ECO Friends diminta membuat kerajinan tangan dari bahan daur ulang demi meningkatkan kepedulian terhadap hewan. ECO Friends yang berpartisipasi pada kegiatan QUEST akan memperoleh e-certificate dan SKKM. Sedangkan ECO Friends yang berpartisipasi pada kegiatan MYSTERY QUEST berkesempatan untuk memenangkan berbagai hadiah menarik.',        
            'keterangan_program_2' => 'Kegiatan ini mengajak ECO Friends untuk lebih peduli terhadap food waste dan bagaimana pengelolaannya yang baik. Diawali dengan DINE-IN, yaitu seminar yang mengangkat isu  mengenai food waste dan dilanjutkan dengan TAKE AWAY, yaitu pemberian 3 tantangan kepada ECO Friends dengan misi yang berbeda-beda. Pertama XHORT, dimana ECO Friends diminta untuk membuat video berisi tips bagaimana cara menyimpan makanan lebih lama. Kedua ALTER, dimana ECO Friends diminta untuk membuat video berisi cara mengolah sisa makanan menjadi hidangan baru. Ketiga TIDBIT, dimana ECO Friends diminta untuk membuat video memperlihatkan dirinya menghabiskan makanan hingga tidak tersisa. ECO Friends yang berpartisipasi di dalamnya akan memperoleh e-certificate dan SKKM.',
            'keterangan_program_3' =>  'Kegiatan terakhir ini mengajak ECO Friends untuk lebih dalam membahas isu sampah plastik yang mencemari lautan (mikroplastik) dengan Lulu sebagai maskot utama. ECO Friends diminta untuk membuat video berisi proses mengubah sampah plastik menjadi barang yang lebih berguna. ECO Friends yang berpartisipasi akan memperoleh e-certificate dan SKKM.',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Ketiga rangkaian acara UMN ECO Gen 1 (RED, GREEN, dan BLUE)  memperoleh antusiasme yang tinggi baik dari ECO Friends. Hal ini terpancarkan melalui hasil akhir dari setiap kegiatan yang di luar ekspektasi. RED berhasil menghapus Email sebanyak 243.600 buah dan daya simpan sebanyak 8.120 GB, mengurangi penggunaan listrik sebesar 260,652 kWh, menanam 219 tanaman yang menambah produksi oksigen sebanyak 1.075 mm/jam, serta menyebarkan kata-kata positif sebanyak 370.548 kata. GREEN berhasil mengajak 633 ECO Friends untuk berpartisipasi pada DINE-IN dan teredukasi perihal food waste, serta mengajak 734 ECO Friends untuk memerangi food waste melalui video yang dibuat. BLUE berhasil mengajak 100+ ECO Friends membuat video kreasi dari sampah plastik dan meraih penonton sebanyak 76.000 viewers.',
            'environmental_outcomes' => 'Dampak positif terhadap kelestarian lingkungan berupa pengurangan jumlah polusi karbon dan penggunaan listrik, serta penyebaran edukasi perihal food waste dan pengolahan sampah plastik berhasil dicetak oleh UMN ECO Gen 1.',     
        ]);

         Milestone::create([   
            'nama_organisasi' => 'UMN ECO',
            'gen' => '2',
            'tahun' => '2022',
            'overview' => 'UMN ECO Gen 2 mengangkat tema “Endless Ventures to Treasure our Nature”, artinya sebuah perjalanan yang tidak akan pernah putus. Dengan konsep “Dynamic Season of Nusantara” yang mengambil isu kekeringan dan musim hujan. Tahun ini, UMN ECO ditemani oleh maskot bernama Maru yang diambil dari kata kemarau dan hujan. Terdapat 2 kegiatan utama yang akan dilaksanakan, yaitu DROUGHT dan DOWNPOUR.',
            'program_1' => 'DROUGHT (Determine The Way Out)',
            'program_2' => 'DOWNPOUR: Better Human Better Earth',
            'program_3' => '',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => 'Dalam kegiatan ini, ECO Friends terjebak di Nusantara yang sedang berada di dalam kondisi yang tidak baik dan harus segera diatasi, kalau tidak ingin segera musnah. ECO Friends diberi pilihan untuk menentukan (Determine) keluar dari zona nyaman dan turut serta memperbaiki Nusantara, atau hanya diam (The Way Out). ECO Friends dapat keluar dari Nusantara dengan ikut serta melakukan 3 tantangan dari 9 macam tantangan yang diberikan untuk mengatasi kekeringan. ECO Friends yang berpartisipasi di dalamnya akan memperoleh e-certificate dan SKKM',
            'keterangan_program_2' => 'Dalam kegiatan ini, ECO Friends diajak untuk berpartisipasi ke dalam 2 kegiatan. Pertama berupa seminar “Turning Our Generation, Into GREENATION” dengan narasumber pada sesi pertama Valerie Krasnadewi (Asia’s Next Top Model C5 dan Founder @twnseco) bersama dengan Veronica Krasnassari (Asia’s Next Top Model C5 dan Founder @twnseco), dan pada sesi kedua Kenny Liana Kenny Siswanto (Sustainability Development Executive Nutrifood). Kedua berupa activity booth “The Green Town of Ours” di ECO TOWN yang berisikan The Environmental Gallery, Maru On Strike, Throw It, dan Drop Your Empties.',
            'keterangan_program_3' => '',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => 'Kedua rangkaian acara UMN ECO Gen 2 (DROUGHT dan DOWNPOUR)  memperoleh antusiasme yang tinggi baik dari ECO Friends. Hal ini terpancarkan melalui hasil akhir dari kedua kegiatan, yaitu sebanyak 45 kg kemasan/botol plastik terkumpul dan sebanyak 470+ ECO Friends sudah teredukasi perihal isu lingkungan.',
            'environmental_outcomes' => 'Dampak positif terhadap kelestarian lingkungan berupa pengumpulan dan pengolahan kemasan/botol plastik, serta peningkatan edukasi perihal isu lingkungan kepada ECO Friends berhasil dicetak oleh UMN ECO Gen 2.',
        ]);

        Milestone::create([
            'nama_organisasi' => 'UMN ECO',
            'gen' => '3',
            'tahun' => '2023',
            'overview' => 'UMN ECO Gen 3 mengangkat tema “Know Your Path for Earth’s Sustainability”, artinya melakukan ekspansi secara berkelanjutan dengan melewati berbagai macam lika-liku perjalanan untuk menjaga, mempertahankan, dan melestarikan kondisi bumi menjadi lebih baik lagi. Dengan konsep “The Dwelling Places of Natures Temple” yang mengambil isu carbon footprint (emisi karbon), dimana menjadi isu kode merah akibat berbagai aktivitas manusia sehari-hari. Tahun ini, UMN ECO ditemani oleh maskot bernama Nala yang diambil dari kata Nirmala Bentala. ECO Friends diajak untuk berpartisipasi dalam berbagai macam kegiatan untuk menghadapi isu carbon footprint. Untuk mengetahui kegiatan apa saja yang akan dilaksanakan tahun ini, ECO Friends dapat memperoleh informasi-informasi selanjutnya di website dan akun media sosial resmi UMN ECO. Sampai jumpa!',
            'program_1' => '',
            'program_2' => '',
            'program_3' => '',
            'program_4' => '',
            'program_5' => '',
            'keterangan_program_1' => '',
            'keterangan_program_2' => '',
            'keterangan_program_3' => '',
            'keterangan_program_4' => '',
            'keterangan_program_5' => '',
            'achievement' => '',
            'environmental_outcomes'=> '',
        ]);
    }
}

    