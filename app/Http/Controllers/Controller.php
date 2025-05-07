<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
        public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        session(['username' => $username]);
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $flowers = [
            [
                'id' => 1,
                'name' => 'Carnation Flower',
                'image' => 'Jan.png',
                'desc' => 'Warna bunga Anyelir juga harus disesuaikan untuk tujuan pemberian bunga. Bunga Anyelir berwarna merah muda berarti kasih sayang, Anyelir merah berarti rasa cinta, Anyelir putih berarti cinta yang murni.',
            ],
            [
                'id' => 2, 
                'name' => 'Iris Flower',
                'image' => 'Feb.png',
                'desc' => 'Bunga iris merupakan salah satu bunga yang memiliki kecantikan elegan, warna yang menakjubkan, dan bentuk yang unik. Dikenal sebagai simbol kebijaksanaan dan keberanian dalam mitologi Yunani kuno'
            ],
            [
                'id' => 3, 
                'name' => 'Daffodil Flower',
                'image' => 'Mar.png',
                'desc' => 'Bunga daffodil atau bakung ini sering direpresentasikan sebagai simbol awal kehidupan yang baru. Di negara lain, seperti Cina misalnya, bunga bakung dijadikan lambang kekayaan dan kemakmuran.'
            ],
            [
                'id' => 4, 
                'name' => 'Daisy Flower',
                'image' => 'Apr.png',
                'desc' => 'Bunga daisy melambangkan kesederhanaan, kemurnian, kepolosan, kebahagiaan, dan cinta sejati. Bunga ini sering dikaitkan dengan harapan baru dan musim semi, serta bisa menjadi simbol kebersamaan dan persahabatan. '
            ],
            [
                'id' => 5, 
                'name' => 'Lily of The Valley',
                'image' => 'May.png',
                'desc' => 'Bunga yang di Indonesia disebut bunga bakung gunung ini dikenal dengan aromanya yang lembut nan manis, serta waktu mekarnya yang singkat. Karena itu, lily of the valley juga kerap dimaknai sebagai lambang dari lemah lembut dan harapan.'
            ],
            [
                'id' => 6, 
                'name' => 'Rose Flower',
                'image' => 'Jun.png',
                'desc' => 'Bunga yang populer dan memiliki perbedaan makna pada setiap warnanya. Namun, secara keseluruhan mawar diartikan sebagai tanda cinta, kekaguman, dan hasrat yang mendalam.'
            ],
            [
                'id' => 7, 
                'name' => 'Water Lily Flower',
                'image' => 'Jul.png',
                'desc' => 'Water lily atau bunga teratai merupakan birth flower untuk orang-orang yang lahir di bulan Juli. Bunga yang tumbuh dipermukaan air ini melambangkan kepolosan, kemurnian, dan kedamaian.'
            ],
            [
                'id' => 8, 
                'name' => 'Gladiol Flower',
                'image' => 'Aug.png',
                'desc' => 'Bunga gladiol secara umum melambangkan kekuatan karakter, kesetiaan, integritas moral, dan kenangan. Selain itu, gladiol juga sering dikaitkan dengan kekuatan, keberanian, dan ketahanan.'
            ],
            [
                'id' => 9, 
                'name' => 'Morning Glory Flower',
                'image' => 'Sept.png',
                'desc' => 'Bunga Morning Glory memiliki simbolisme yang berbeda dalam berbagai budaya. Di beberapa budaya, bunga ini melambangkan kecantikan, kegembiraan, dan kehidupan yang singkat.'
            ],
            [
                'id' => 10, 
                'name' => 'Marigold Flower',
                'image' => 'Oct.png',
                'desc' => 'Bunga dengan bentuk unik dan warna orange cerah yang menarik perhatian ini dimaknai sebagai lambang kehangatan, optimisme, dan kreativitas.'
            ],
            [
                'id' => 11, 
                'name' => 'Chrysanthemums Flower',
                'image' => 'Nov.png',
                'desc' => 'Chrysanthemums atau bunga krisan memiliki variasi warna yang cerah dan hangat. Karena itu, bunga kelahiran untuk bulan November ini memiliki arti persahabatan, cinta, kebahagiaan, dan cinta.'
            ],
            [
                'id' => 12, 
                'name' => 'Holly Flower',
                'image' => 'Dec.png',
                'desc' => 'Meski bukan termasuk golongan bunga, tapi daun buah beri merah yang identik dengan perayaan Natal ini dijadikan sebagai birth flower untuk yang lahir di bulan Desember. Holly memiliki makna kasih, kedamaian, dan kehidupan yang abadi.'
            ],
        ];
        return view('dashboard', [
            'username' => $request->query('username'),
            'flowers' => array_chunk($flowers, length: 2)    ]);
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $flowers = [
            ['id' => 'January', 'name' => 'Carnation Flower', 'ff' => 'Tidak mengandung racun sehingga dapat dikonsumsi. 
            Juga disebut sebagai The Flower of God. Pada 2000 tahun lalu di jaman Yunani Kuno dan Romawi Kuno, bunga ini digunakan menjadi bagian dari karangan bunga atau dekorasi berbagai seremonial.'],
            ['id' => 'February', 'name' => 'Iris Flower', 'ff' => 'Banyak yang melihat bunga iris dengan lily sebagai bunga yang sama, namun keduanya berbeda jenis. Dapat dimanfaatkan sebagai obat herbal seperti untuk batuk, iritasi kulit, dan gangguan pencernaan. Juga bisa dijadikan bahan untuk campuran parfum.'],
            ['id' => 'March', 'name' => 'Daffodil Flower', 'ff' => 'Memiliki warna yang cantik, namun bunga ini mengandung getah yang beracun bagi tumbuhan lain. Di China, bunga ini menjadi simbol atas nasib baik dan biasanya menjadi bunga resmi tahun baru China yang bisa memberikan suasana positif.'],
            ['id' => 'April', 'name' => 'Daisy Flower', 'ff' => 'Dikenal sebagai tanaman yang sangat adaptif karena dapat tumbuh hampir di semua jenis tanah dan toleransi tinggi terhadap kondisi cuaca. Dalam dunia simbolisme, bunga daisy melambangkan kesetiaan, kemurnian, dan cinta abadi.'],
            ['id' => 'May', 'name' => 'Lily of The Valley', 'ff' => 'Bunga yang cukup langka dan harganya cukup "wow", mahal. Hal itu disebabkan oleh proses budidaya yang cenderung susah dan periode mekar yang singkat.Melambangkan kemurnian, kebahagiaan, serta awal yang baru, sehingga sangat cocok dijadikan sebagai bunga pernikahan.'],
            ['id' => 'June', 'name' => 'Rose Flower', 'ff' => 'Dikenal sebagai bunga tertua karena ditemukannya fosil bunga mawar sekitar 35 juta tahun yang lalu di Amerika Serikat.Setiap warna yang dimiliki bunga mawar melambangkan makna yang berbeda. Juga menjadi sumber penghasilan yang tinggi bagi berbagai negara, seperti Prancis dan Ekuador.'],
            ['id' => 'July', 'name' => 'Water Lily Flower', 'ff' => 'Sering dikenal sebagai bunga teratai yang tumbuh di perairan. Teratai merupakan simbol dari kesucian. Hal ini karena bunga teratai hidup di air yang kotor dan berlumpur. Namun, tetap memiliki bunga yang indah dan bersih.'],
            ['id' => 'August', 'name' => 'Gladiol Flower', 'ff' => 'Nama gladiol berasal dari kata Latin "gladius" yang berarti pedang, merujuk pada bentuk daunnya yang meruncing.Bunga gladiol merupakan bunga abadi, yang di daerah beriklim dingin harus digali dan disimpan untuk musim dingin'],
            ['id' => 'September', 'name' => 'Morning Glory Flower', 'ff' => 'Bunga ini mekar di pagi hari dan layu sebelum matahari terbenam, memberikan kesan yang indah namun singkat. Memiliki bentuk seperi terompet dan daun yang berbentuk hati. Bunga ini tumbuh secara bergerombol.'],
            ['id' => 'October', 'name' => 'Marigold Flower', 'ff' => 'Bisa tumbuh subur di bawah sinar matahari ini bisa tumbuh setinggi 13 hingga 152 cm, bergantung pada jenisnya. Nama marigold berasal dari bahasa Inggris, yaitu “Mary’s Gold”. Konon, dibandingkan koin, penganut Kristen kuno kerap meletakkan bunga tersebut di altar Bunda Maria sebagai bentuk persembahan.'],
            ['id' => 'November', 'name' => 'Chrysanthemums Flower', 'ff' => 'Biasa dikenal sebagai bunga krisan, berasal dari China. Chrysanthemum berasal dari bahasa Yunani "khrusos" yang artinya emas dan "anthemom" yang memiliki arti bunga, karena memiliki banyak manfaat sebagai penyembuh berbagai penyakit.'],
            ['id' => 'December', 'name' => 'Holly Flower', 'ff' => 'Pertumbuhan tanaman ini pun termasuk lambat hingga perlu bertahun-tahun sampai tinggi belasan meter. Akan tetapi hidup tanaman ini bisa mencapai 100 tahun bila penanaman dan perawatannya tepat. Memiliki buah yang beracun, namun daunnya dapat digunakan sebagai obat.']
        ];

        return view('pengelolaan', ['items' => $flowers]);
    }
}