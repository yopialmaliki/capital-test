<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                "title" => "Dolar Merosot 3 Pekan Beruntun, Level Keseimbangan Terancam",
                "description" => "Berhasil rebound di akhir pekan, namun Dolar AS masih mencatatkan pelemahan dalam 5 hari perdagangan terakhir.",
                "content" => "<p>Hampir tak ada yang berubah seperti pekan lalu. Kondisi teknikalnya tetap sama, bias jangka pendek masih berisiko <em>bearish</em>. DXY bergerak di bawah kurva MA-50 dengan indikator RSI yang berada di teritori negatif.<br>   <br>Peluang untuk memperpanjang <em>rebound</em> Jumat tentu saja masih terbuka. Tapi skenario ini juga rentan terhadap aksi jual susulan apabila DXY gagal mengejar <em>breakout</em> MA-50 yang sekarang bertindak sebagai <em>resistance</em> dinamis terdekatnya.</p><p> <strong>DXY WEEKLY</strong> </p><p>Seperti yang terlihat dari grafik di atas, DXY merosot 3 pekan beruntun mengancam level keseimbangan jangka menengah yang berada di kisaran 50 persen fibo <em>retracement</em>.<br> <br>Yang barangkali juga layak dicermati adalah posisi indikator RSI yang sekarang menukik ke area yang lebih negatif. Ini memperbesar risiko terjadinya penurunan menembus level keseimbangan tersebut.</p>",
                "is_banner_content" => 1,
                "status" => "active"
            ],
            [
                "title" => "Inflasi Menjegal EUR/USD, Ekspektasi Bunga Tetap Tinggi",
                "description" => "Laju inflasi Zona Euro menurun secara signifikan, sedangkan inflasi inti mencetak rekor tertinggi baru. Situasi ini memerangkap EUR/USD jelang rapat ECB pekan depan.",
                "content" => "<p>EUR/USD sempat <strong>meroket pesat sampai 1.0925 kemarin</strong></a> berkat ekspektasi suku bunga dan laju inflasi Zona Euro yang tetap tinggi. Posisinya langsung lengser ke kisaran 1.0865 pada perdagangan hari Jumat (31/Maret) menyusul rilis data inflasi yang beragam. Namun, para analis menilai data inflasi tetap mendukung ekspektasi kenaikan suku bunga lagi.</p><p>Eurostat melaporkan bahwa laju inflasi inti melonjak 1.2% (Month-over-Month) pada periode Maret 2023. Angka tersebut melampaui pertumbuhan 0.8% pada periode sebelumnya, sekaligus dua kali lipat lebih tinggi daripada estimasi konsensus yang sebesar 0.6% saja. </p><p>Laju inflasi inti dalam basis tahunan pun meningkat dari 5.6% ke 5.7%, mencetak rekor tertingginya sepanjang sama. Akan tetapi, laju inflasi utama malah merosot dari 8.5% menjadi 6.9% saja dalam periode yang sama (estimasi konsensus sebesar 7.1%). Hal ini terjadi karena penurunan hanya berkaitan dengan harga energi yang tidak diperhitungkan dalam inflasi inti.</p><p>Para analis mensinyalir data inflasi Zona Euro seperti ini akan memberikan alasan bagi Bank Sentral Eropa (ECB) untuk menaikkan suku bunga lagi. Pendapat tersebut selaras dengan opini beberapa pejabat ECB belakangan ini yang menilai butuh kenaikan suku bunga lanjutan untuk menurunkan inflasi sampai target bank sentral pada tingkat 2%.</p><p>Data pasar saat ini menunjukkan para trader dan investor mengharapkan kenaikan suku bunga ECB sebesar 25 basis poin pada rapat kebijakan berikutnya yang digelar tanggal 6 Mei 2023. Setelah itu, ECB kemungkinan akan menaikkan bunga satu atau dua kali lagi pada musim panas. EUR/USD kemungkinan sukar menanjak lagi apabila ECB sekadar memenuhi ekspektasi tersebut --karena pasar sudah sepenuhnya memperhitungkan <em>rate hike</em> dalam kurs saat ini--, sehingga dibutuhkan retorika yang lebih hawkish untuk mengerek euro lagi.</p>",
                "is_banner_content" => 1,
                "status" => "active"
            ],
            [
                "title" => "NZD/USD Extrem Di H4, Potensi Sinyal Reversal",
                "description" => "Peluang Dolar AS didasarkan pada pasangan mata uang NZD/USD, dengan mengaplikasikan analisa Multi Time Frame BBMA OA serta Supply And Demand.",
                "content" => "<h2>Analisa Time Frame 1-Hari: Harga Tak Mampu Teruskan Momentum Di Tren Turun</h2><p>Jika diamati dari time frame 1-harinya, pasangan mata uang NZD/USD saat ini sedang dalam tren turun. Hal ini dapat dilihat dari Death Cross antara Mid BB dan EMA-50 yang telah terbentuk sejak akhir Februari lalu. Posisi harga sedang berada pada bagian atas kedua garis, menandakan bahwa kekuatan jangka pendek harga sedang dikuasai Seller. Perbedaan antara tren dan pergerakan jangka pendek sendiri dapat diartikan bahwa harga sedang berada dalam masa konsolidasi. Breakout ke salah satu sisi BB dapat menjadi awal terbentuknya tren baru ataupun penerusan tren.</p><p>Setup terakhir yang terbentuk adalah adanya Candlestick Arah Kukuh yang terbentuk pertengahan Maret lalu. CSAK ini terlihat belum mampu membentuk Momentum Buy di Top BB, sehingga harga hanya mondar-mandir di EMA-50 time frame 1-hari.</p><p>Ketidakmampuan harga membentuk Momentum Buy tersebut, menjadi dasar utama untuk fokus mencari posisi Sell. Posisi akan dibuka dengan mengamati perilaku harga serta struktur Setup yang terbentuk di time frame 4-jam dan 1-jam.</p><p>Dari sisi analisa Supply And Demand, NZD/USD sedang mengalami kenaikan singkat pasca terjadinya Rejection di zona Demand harian. Kenaikan ini diperkirakan akan membawa harga hingga ke zona Supply harian yang berada di dekat Top BB time frame 1-hari. Pergerakan selanjutnya akan ditentukan ketika perilaku harga sampai zona Supply. Jika terjadi Rejection, maka harga berpeluang meneruskan penurunan hingga ke zona Demand yang menyebabkan kenaikan saat ini.</p><h2>Analisa Time Frame 4-Jam: Extrem Jadi Sinyal Terjadinya Reversal</h2><p>Dilihat dari time frame 4-jam, pasangan mata uang NZD/USD sedang berada dalam tren naik. Hal ini dapat diketahui dari Golden Cross antara Mid BB dan EMA-50 yang baru saja terbentuk kemarin. Posisi harga saat ini berada pada bagian atas kedua garis, menandakan bahwa kekuatan pergerakan jangka pendek sedang dikuasai Buyer.</p><p>Dari sisi Setup, terlihat bahwa harga mengalami penurunan singkat, pasca terbentuknya Extrem Sell di Top BB yang telah selesai di MA-5 Low time frame 4-jam. Terbentuknya Extrem ini menjadi pertanda awal terjadinya Reversal atau pembalikan harga dari trennya, sehingga menjadi alasan Entry pada analisa kali ini.</p>",
                "is_banner_content" => 1,
                "status" => "active"
            ],
            // [
            //     "title" => "GDP Inggris Ciamik Tapi GBP/USD Gagal Naik",
            //     "description" => "Data GDP Inggris berhasil menghindari ancaman resesi tahun lalu, tetapi para analis mensinyalir ekonomi Inggris tetap akan seret dalam tahun ini.",
            //     "content" => "<p>Momentum reli GBP/USD lagi-lagi melempem saat memasuki ambang resistance penting pada kisaran 1.2400-an. Kurs pound sterling sempat melambung sampai level tertinggi dua bulan pada 1.2422 pada sesi Eropa hari Jumat (31/Maret), tetapi langsung longsor ke kisaran 1.2350-an saat memasuki sesi New York.</p><p>UK Office for National Statistics (ONS) merevisi naik data pertumbuhan Produk Domestik Bruto (GDP) Inggris dari 0% menjadi 0.1% untuk periode kuartal IV/2022. Angka tersebut menandakan pemulihan dari penurunan -0.3% pada kuartal sebelumnya, sekaligus menggambarkan situasi yang sedikit lebih baik daripada perkiraan banyak pihak.</p><p>Bank Sentral Inggris (BoE) dan mayoritas ekonom tahun lalu sempat memeringatkan adanya risiko resesi pada akhir tahun. Data GDP Inggris kali ini membuktikan bahwa ancaman resesi tersebut berhasil dihindari. Kendati demikian, para analis mensinyalir perekonomian Inggris tetap akan seret dalam tahun ini.</p><p>Faktor utama yang akan membayangi perekonomian ke depan adalah semakin meluasnya dampak dari kenaikan suku bunga BoE. Sebagaimana diketahui, BoE telah menaikkan suku bunga sebanyak sebelas kali beruntun hingga mencapai <strong>rekor tertinggi sejak tahun 2008</strong></a> pada tingkat 4.25%.</p><p>Pantheon Macroeconomics memperkirakan pertumbuhan ekonomi Inggris secara kuartalan akan menurun -0.1% pada kuartal pertama dan kedua tahun ini, sehingga mengalami resesi secara teknikal. Kondisi ketenagakerjaan juga hanya akan bertahan selama dua kuartal tersebut, kemudian mengendur.</p>",
            //     "is_banner_content" => 1,
            //     "status" => "active"
            // ],
            // [
            //     "title" => "Strategi DIBS: Teknik Trading Harian Dengan Inside Bar",
            //     "description" => "Dikembangkan oleh trader Wall Street Peter S. Kraus, strategi DIBS memiliki akurasi cukup bagus yang bisa Anda coba. Seperti apa cara penggunaannya?.",
            //     "content" => "<p>Untuk dapat meraih kesuksesan dalam trading Forex, seorang trader harus memiliki strategi yang teruji dan terbukti <em>profitable</em>. Namun, mengembangkan strategi yang tepat bukanlah hal yang mudah. <br> <br>Seorang trader harus melakukan pengujian berulang dan melakukan perbaikan secara terus-menerus. Selain itu, setiap trader memiliki kepribadian yang berbeda, dan dalam proses belajar trading, setiap trader akan menemukan gaya trading yang sesuai dengan dirinya</a>. <br> <br>Saat memulai karier trading Anda, mungkin akan sulit untuk menemukan strategi yang cocok, namun setelah Anda menguasai dasar-dasar trading, Anda akan dapat menciptakan strategi yang sesuai dengan gaya trading Anda. Meskipun tidak selalu disarankan, Anda dapat mencoba menyalin strategi trader lain yang sukses</a>, setidaknya untuk sementara waktu. <br> <br> <strong>Salah satu contoh strategi trading yang bisa Anda ikuti adalah DIBS (Daily Inside Bar Setup)</strong>. Strategi ini diciptakan oleh salah satu trader yang paling sukses yaitu Peter S. Kraus yang bekerja di Goldman Sachs selama 22 tahun. Strategi ini mengidentifikasi formasi bar dan menunjukkan pergerakan harga yang konsolidatif. Inside bar yang terbentuk juga memberikan sinyal potensial untuk atau reversal.</p><p>Untuk dapat meraih kesuksesan dalam trading Forex, seorang trader harus memiliki strategi yang teruji dan terbukti <em>profitable</em>. Namun, mengembangkan strategi yang tepat bukanlah hal yang mudah. <br> <br>Seorang trader harus melakukan pengujian berulang dan melakukan perbaikan secara terus-menerus. Selain itu, setiap trader memiliki kepribadian yang berbeda, dan dalam proses belajar trading, setiap trader akan menemukan gaya trading yang sesuai dengan dirinya</a>. <br> <br>Saat memulai karier trading Anda, mungkin akan sulit untuk menemukan strategi yang cocok, namun setelah Anda menguasai dasar-dasar trading, Anda akan dapat menciptakan strategi yang sesuai dengan gaya trading Anda. Meskipun tidak selalu disarankan, Anda dapat mencoba menyalin strategi trader lain yang sukses</a>, setidaknya untuk sementara waktu. <br> <br> <strong>Salah satu contoh strategi trading yang bisa Anda ikuti adalah DIBS (Daily Inside Bar Setup)</strong>. Strategi ini diciptakan oleh salah satu trader yang paling sukses yaitu Peter S. Kraus yang bekerja di Goldman Sachs selama 22 tahun. Strategi ini mengidentifikasi formasi bar dan menunjukkan pergerakan harga yang konsolidatif. Inside bar yang terbentuk juga memberikan sinyal potensial untuk atau reversal.</p>",
            //     "is_banner_content" => 1,
            //     "status" => "active"
            // ],
            // [
            //     "title" => "Menguat 4 Hari Beruntun, Dolar AS Masih Rentan Bearish",
            //     "description" => "Indeks Dolar punya peluang untuk memperpanjang rebound dan membuka fase konsolidasi, asalkan mampu menutup candle Daily di atas level 102.50.",
            //     "content" => "<p>Greenback berhasil menguat 4 hari beruntun versus <em>major currencies</em>, akan tetapi dengan rentang yang terbatas. Sehingga, dalam sepekan terakhir, Indeks Dolar (DXY) tercatat nyaris stagnan. Harga pembukaan Senin (3/4) di level 101.94 tidak terpaut jauh dengan harga pada penutupan perdagangan Jumat (7/4) di posisi 102.09.</p><p> <strong> <br>DXY DAILY</strong> </p><p>Pergerakan pada <em>chart</em> Daily menunjukkan bahwa <em>buyers</em> USD memberikan perlawanan. Tapi juga memberikan kesan, kebangkitan 4 hari berturut-turut itu tidak lebih dari sekedar aksi ambil untung saja. Lantaran, DXY masih berada cukup dekat dengan level terendah 2 bulan karena dorongan <em>bullish</em> yang terbatas. <br>  <br>Meski menguat dalam 4 hari perdagangan terakhir, data-data ekonomi AS tidak begitu menggembirakan. Laporan ISM malah terlihat suram. PMI manufaktur pada periode Maret terkontraksi lebih rendah dari bulan sebelumnya. Sementara, PMI sektor jasa masih berada di zona ekspansif, tapi mengalami penurunan yang cukup signifikan jika dibandingkan dengan data yang dirilis bulan sebelumnya.</p><p>Mungkin, hanya data tenaga kerja AS yang terlihat cukup positif. NFP periode Maret melebihi ekspektasi, meskipun pertumbuhannya masih lebih rendah dari bulan sebelumnya. Sementara, tingkat pengangguran turun 0.1 persen dibandingkan periode Februari. Namun, Jobs Data AS tidak memberikan dampak yang cukup berarti untuk menopang USD. Itu karena sebagian besar bursa saham dan pasar finansial global sedang libur pada perdagangan Jumat (7/4).</p>",
            //     "is_banner_content" => 1,
            //     "status" => "active"
            // ],
            // [
            //     "title" => "Trading EUR/USD Dengan Data NFP AS April 2023",
            //     "description" => "Hari ini akan dirilis data NFP AS bulan Maret 2023 yang biasanya berdampak tinggi pada USD. Diperkirakan akan bertambah 236,000 job. Ada 5 skenario pergerakan EUR/USD.",
            //     "content" => "<h2> <strong>Latar Belakang</strong> </h2><p>Data Non Farm Payrolls (NFP) dirilis oleh Biro Statistik Tenaga Kerja AS, mengukur perubahan jumlah tenaga kerja di luar sektor pertanian selama periode sebulan. Data ini merupakan indikator awal bagi pengeluaran konsumen dan aktivitas ekonomi secara keseluruhan.</p><p>Sebagai salah satu bahan pertimbangan penting bagi suku bunga acuan, rilis data NFP akan selalu menjadi fokus perhatian pasar dan biasanya berdampak tinggi pada USD. Naiknya angka NFP akan menyebabkan USD menguat, sedangkan jika NFP di bawah perkiraan pasar atau bahkan minus, akan menyebabkan USD melemah.</p><p>Hari ini akan dirilis data NFP AS bulan Maret 2023. Bulan Februari lalu NFP bertambah 311,000 job, lebih tinggi dari perkiraan yang akan bertambah 224,000 job, tetapi lebih rendah dari bulan sebelumnya yang bertambah 504,000 job. Untuk bulan Maret 2023 diperkirakan NFP akan bertambah 236,000 job, sementara perkiraan dari <em>Automatic Data Processing Inc.(ADP)</em> yang dirilis tanggal 5 April kemarin menunjukkanakan bertambah 145,000 job</a>.</p><p>Jika hasil rilis lebih tinggi dari perkiraan, maka akan cenderung menyebabkan USD menguat atau EUR/USD melemah. Sebaliknya, jika NFP lebih rendah dari perkiraan akan cenderung menyebabkan USD melemah atau EUR/USD menguat.</p>",
            //     "is_banner_content" => 1,
            //     "status" => "active"
            // ]
        
        ];
        
        foreach($articles as $item) {
            // dd($item['title']);
            // $randomCategory = DB::table('article_categories')
            //     ->inRandomOrder()
            //     ->first();

            $isOnePoint = fake()->randomElement([true, false]);

            Article::create([
                'title'                 => $item['title'],
                'permalink'             => str($item['title'])->slug(),
                'content'               => $item['content'],
                'description'           => $item['description'],
                'is_one_point'          => $isOnePoint,
                'status'                => 'active',
            ]);
        }
    }
}
