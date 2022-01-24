<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Detil;
use App\Models\Client;
use App\Models\Produk;
use App\Models\Keunggulan;
use Illuminate\Database\Seeder;

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

        User::create([
            "username" => "admin",
            "password" => bcrypt("adminmpu")
        ]);
        
        Produk::create([
            "id_produk" => "PA001",
            "nama_produk" => "e-BPHTB",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "mybphtb.png",
            "slug" => "e-bphtb"
        ]);

        Produk::create([
            "id_produk" => "PA002",
            "nama_produk" => "e-SIMPATDA",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "simpatda.PNG",
            "slug" => "e-simpatda"
        ]);

        Produk::create([
            "id_produk" => "PA003",
            "nama_produk" => "e-SPPT",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "esppt.png",
            "slug" => "e-sppt"
        ]);

        Produk::create([
            "id_produk" => "PA004",
            "nama_produk" => "SIMPBB",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "simpbb.jpg",
            "slug" => "simpbb"
        ]);

        Produk::create([
            "id_produk" => "PA005",
            "nama_produk" => "e-Retribusi",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "eretribusi.png",
            "slug" => "e-retribusi"
        ]);

        Produk::create([
            "id_produk" => "PA006",
            "nama_produk" => "e-Dashboard",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "edashboard.png",
            "slug" => "e-dashboard"
        ]);

        Produk::create([
            "id_produk" => "PA007",
            "nama_produk" => "SMS Gateway",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "sms gateway.png",
            "slug" => "sms-gateway"
        ]);

        Produk::create([
            "id_produk" => "PA008",
            "nama_produk" => "e-Potensi",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "potensi.png",
            "slug" => "e-potensi"
        ]);

        Produk::create([
            "id_produk" => "PA009",
            "nama_produk" => "e-SIG PBB P2",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "sigpbb.png",
            "slug" => "e-sig-pbb-p2"
        ]);

        Produk::create([
            "id_produk" => "PA010",
            "nama_produk" => "e-SPTPD",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "esptpd.png",
            "slug" => "e-sptpd"
        ]);

        Produk::create([
            "id_produk" => "PA011",
            "nama_produk" => "e-SPOP/LSPOP",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "espop.png",
            "slug" => "e-spop-lspop"
        ]);
        
        Produk::create([
            "id_produk" => "PA012",
            "nama_produk" => "Pembayaran Online Sistem Host to Host",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "payment h2h.png",
            "slug" => "pembayaran-online-sistem-host-to-host"
        ]);
        Produk::create([
            "id_produk" => "PA013",
            "nama_produk" => "Sistem Monitoring Data Transaksi Wajib Pajak Online dengan Tapping Box",
            "jenis_produk" => "Aplikasi",
            "image_produk" => "monitoring tapping box.jpg",
            "slug" => "sistem-monitoring-data-transaksi-wajib-pajak-online-dengan-tapping-box"
        ]);
        Produk::create([
            "id_produk" => "PN001",
            "nama_produk" => "Pendataan Massal Objek Pajak PBB P2",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "pendataan massal.jpg",
            "slug" => "pendataan-massal-objek-pajak-pbb-p2"
        ]);
        Produk::create([
            "id_produk" => "PN002",
            "nama_produk" => "Penyempurnaan Zona Nilai Tanah (ZNT)",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "pendataan massal.jpg",
            "slug" => "penyempurnaan-zona-nilai-tanah-znt"
        ]);
        Produk::create([
            "id_produk" => "PN003",
            "nama_produk" => "Pembuatan Peta Digital Objek PBB P2",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "peta digital.png",
            "slug" => "pembuatan-peta-digital-objek-pbb-p2"
        ]);
        Produk::create([
            "id_produk" => "PN004",
            "nama_produk" => "Penilaian Individual Objek Pajak PBB Non Standar",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "penilaian individu.jpg",
            "slug" => "penilaian-individual-objek-pajak-pbb-non-standar"
        ]);
        Produk::create([
            "id_produk" => "PN005",
            "nama_produk" => "Kajian Potensi Pajak Daerah",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "kajian-potensi-pajak-daerah"
        ]);
        Produk::create([
            "id_produk" => "PN006",
            "nama_produk" => "Kajian Potensi Retribusi Daerah",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "kajian-potensi-retribusi-daerah"
        ]);

        Produk::create([
            "id_produk" => "PN007",
            "nama_produk" => "Penyusunan Naskah Akademik PERDA Pajak/Retribusi Daerah",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "penyusunan-naskah-akademik-perda-pajak-retribusi-daerah"
        ]);

        Produk::create([
            "id_produk" => "PN008",
            "nama_produk" => "Workshop Program Diklat Reguler",
            "jenis_produk" => "Workshop",
            "image_produk" => "diklat.jpg",
            "slug" => "workshop-program-diklat-reguler"
        ]);
        
        Produk::create([
            "id_produk" => "PN009",
            "nama_produk" => "Workshop Program Diklat Group",
            "jenis_produk" => "Workshop",
            "image_produk" => "diklat.jpg",
            "slug" => "workshop-program-diklat-group"
        ]);
        Produk::create([
            "id_produk" => "PN010",
            "nama_produk" => "Workshop Penilaian Individual Objek Non Standar Tingkat Dasar",
            "jenis_produk" => "Workshop",
            "image_produk" => "workshop penilaian massal & individu.jpg",
            "slug" => "workshop-penilaian-individual-objek-non-standar-tingkat-dasar"
        ]);

        
        Produk::create([
            "id_produk" => "PN011",
            "nama_produk" => "Workshop Map Info Terintegrasi dengan Aplikasi Smart Map PBB P2",
            "jenis_produk" => "Workshop",
            "image_produk" => "SIG & Map Info.jpg",
            "slug" => "workshop-map-info-terintegrasi-dengan-aplikasi-smart-map-pbb-p2"
        ]);
        Produk::create([
            "id_produk" => "PN012",
            "nama_produk" => "Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Dasar)",
            "jenis_produk" => "Workshop",
            "image_produk" => "workshop oracle dasar.jpg",
            "slug" => "workshop-oracle-dalam-penerapan-sismiop-tingkat-dasar"
        ]);

        Produk::create([
            "id_produk" => "PN013",
            "nama_produk" => "Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Lanjutan)",
            "jenis_produk" => "Workshop",
            "image_produk" => "Oracle SISMIOP.jpg",
            "slug" => "workshop-oracle-dalam-penerapan-aplikasi-sismiop-tingkat-lanjutan"
        ]);

        Produk::create([
            "id_produk" => "PN014",
            "nama_produk" => "Workshop Pemeriksaan Pajak Daerah",
            "jenis_produk" => "Workshop",
            "image_produk" => "pemeriksaan pajak.jpg",
            "slug" => "workshop-pemeriksaan-pajak-daerah"
        ]);

        Produk::create([
            "id_produk" => "PN015",
            "nama_produk" => "Workshop Penggalian Potensi & Pengelolaan Piutang Pajak Daerah",
            "jenis_produk" => "Workshop",
            "image_produk" => "workshop kajian potensi & piutang.jpeg",
            "slug" => "workshop-penggalian-potensi-&-pengelolaan-piutang-pajak-daerah"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan_produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "<ol>
            <li>Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.</li>
            <li>Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.</li>
            <li>Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB.</li>
            <li>Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan.</li>
            <li>Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA002",
            "slug" => "e-simpatda",
            "nama_produk" => "Elektronik Sistem Informasi Manajemen Pendapat Daerah",
            "singkatan_produk" => "e-SIMPATDA",
            "deskripsi_produk" => "e-SIMPATDA merupakan aplikasi berbasis Web yang dapat digunakan untuk mengelola administrasi Pajak Daerah dengan sistem yang dapat dioperasikan sesuai ketersedian sumber daya yang ada. Selain itu, produk ini juga sudah kami kembangkan dengan adanya aplikasi tambahan, yaitu e-SPTPD yang dapat digunakan oleh Wajib Pajak untuk melaporkan pajaknya secara online.",
            "image_produk" => "edit simpatda.png",
            "tujuan" => "<ol>
            <li>Megelola administrasi Pajak Daerah khususnya Pajak Hotel, Pajak Restoran, Pajak Hiburan, Pajak Reklame, Pajak Penerangan Jalan, Pajak Bahan Mineral Bukan Logam dan Batuan, Pajak Parkir, Pajak Air Tanah dan Pajak Sarang Burung Walet yang sesuai dengan aturan yang berlaku.</li>
            <li>Menjadi solusi sistem informasi terpadu berbasis Website yang meliputi pendaftaran, pendataan, penetapan, pembayaran, penagihan, pembukuan dan pelaporan, serta pemeriksaan</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA003",
            "slug" => "e-sppt",
            "nama_produk" => "Elektronik Surat Pemberitahuan Pajak Terhutang",
            "singkatan_produk" => "e-SPPT",
            "deskripsi_produk" => "e-SPPT merupakan aplikasi berbasis Web yang dipergunakan oleh Wajib Pajak untuk melihat informasi tagihan SPPT PBB P2 dan informasi status pembayaran PBB P2 secara Online. e-SPPT merupakan aplikasi pendukung dari SIMPBB yang merupakan aplikasi layanan Online kenapa masyarakat dalam hal menyampaikan informasi mengenai SPPT PBB P2 yang disediakan oleh Pemerintah Derah secara gratis.",
            "image_produk" => "edit sppt.png",
            "tujuan" => "<ol>
            <li>Memberikan kelancaran dalam pelaksanaan kegiatan pelaporan adminstrasi Pajak Daerah.</li>
            <li>Menciptakan peningkatan pelayanan / nilai tambah dalam memberikan pelayanan kepada Wajib Pajak.</li>
            <li>Meningkatkan efektivitas, keakuratan dan kepraktisan dalam menyediakan layanan terhadap kebutuhan informasi di bidang Pendapatan.</li>
            <li>Pengolahan data administrasi menjadi cepat, tepat dan akurat.</li>
            <li>Memudahkan perangkat daerah dalam memberikan informasi dan pelayanan prima kepada masyarakat dalam hal seperti tagihan SPPT, mencetak DHKP, membayar Pajak PBB secara kolektif serta penerimaan PPB per Kelurahan/Desa.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA004",
            "slug" => "simpbb",
            "nama_produk" => "Sistem Informasi Manajemen Pajak Bumi dan Bangunan",
            "singkatan_produk" => "SIMPBB",
            "deskripsi_produk" => "SIMPBB merupakan Aplikasi untuk mengelola administrasi Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBB P2) yang dikembangkan berdasarkan Aplikasi SISMIOP dengan berbagai fungsi seperti Pendaftaran & Pendataan, Peniliaian, Penetapan, Penagihan, Penerimaan serta Pelayanan.",
            "image_produk" => "edit simpbb.png",
            "tujuan" => "Membantu dan memudahkan Penyelenggaara Pemerintahan Daerah dalam meningkatkan Pendapatan Asli Daerah, khususnya melakui peningkatan kapasitas administrasi pengelolaan Pajak Bumi dan Bangunan di Kabupaten/Kota dengan mudah, cepat dan sistematis."

        ]);

        Detil::create([
            "id_produk" => "PA005",
            "slug" => "e-retribusi",
            "nama_produk" => "Elektronik Retribusi",
            "singkatan_produk" => "e-Retribusi",
            "deskripsi_produk" => "E-Retribusi merupakan sistem elektronik Aplikasi yang mengelola administrasi Pendapatan Daerah, khususnya Retribusi Daerah guna meningkatkan kapasitas administrasi pemungutan Retribusi Daerah yang diharapkan dapat meningkatkan penerimaan Pendapatan Daerah.",
            "image_produk" => "edit retribusi.png",
            "tujuan" => "<ol>
            <li>Tersedianya Aplikasi yang sesuai dengan peraturan dan perundang-undangan yang berlaku.</li>
            <li>Terciptanya tertib administrasi dalam pengelolaan Retribusi Daerah.</li>
            <li>Menerapkan sistem informasi yang fleksibel dan dapat dikembangkan, sehingga bisa diakses dengan berbagai macam perangkat komunikasi digital.</li>
            <li>Memenuhi kebutuhan informasi serta memiliki jangkauan yang luas bagi Wajib Retribusi maupun Fiscus.</li>
            <li>Terciptanya media informasi layanan masyarakat yang dapat diakses oleh Wajib Retribusi yang membutuhkan informasi layanan.</li>
            <li>Terbangunnya Digital Information Center sebagai saran pendukung pelayanan kepada masyarakat</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA006",
            "slug" => "e-dashboard",
            "nama_produk" => "Elektronik Dashboard",
            "singkatan_produk" => "e-Dashboard",
            "deskripsi_produk" => "E-Dashboard merupakan aplikasi berbasis Web yang digunakan untuk menampilkan visualisasi sebuah data mengenai kinerja suatu instansi, sehingga didapatkan gambaran mengenai bagaimana sebuah organisasi ataupun bagian dari instansi mengalami perubahan pada kinerja yang sedang berjalan.",
            "image_produk" => "edit dashboard.png",
            "tujuan" => "<ol>
            <li>Memudahkan monitoring informasi penting di lingkunagan Bapenda/BPPRD yang merupakan indikator kinerja.</li>
            <li>Meningkatkan aspek kegunaan data penerimaan pajak.</li>
            <li>Meningkatkan kualitas proses pengambilan keputusan.</li>
            <li>Memperoleh informasi Wajib Pajak dan mengolahnya sebagai data potensi perpajakan.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA007",
            "slug" => "sms-gateway",
            "nama_produk" => "SMS Gateway",
            "singkatan_produk" => null,
            "deskripsi_produk" => "SMS Gateway merupakan Aplikasi yang banyak digunakan oleh pelanggang teknologi seluler karena biaya yang relatif murah dan dapat dikembangkan menjadi sebuah layanan sistem informasi berbasis teknologi mobile.",
            "image_produk" => "edit sms gateway.png",
            "tujuan" => "<ol>
            <li>Memudahkan masyarakat untuk mengetahui informasi seperti jatuh tempo pajak, besar pajak yang harus dibayar serta denda/bunga yang diterima.</li>
            <li>Memudahkan Fiscus untuk mengirim informasi kepada Wajib Pajak tentang jatuh tempo ataupun reward seperti ucapatan terimakasih dan sejenisnya setelah Wajib Pajak melakukan pembayaran.</li>
            <li>Meningkatkan layanan informasi kepada masyarakat.</li>
            <li>Meningkatkan kinerja pengelolaan Pajak Daerah.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA008",
            "slug" => "e-potensi",
            "nama_produk" => "Elektronik Potensi",
            "singkatan_produk" => "e-Potensi",
            "deskripsi_produk" => "E-Potensi merupakan aplikasi berbasis Web yang digunakan untuk mengelola potensi objek Pajak Daerah yang ada dengan menggunakan Teknologi Informasi. E-Potensi berbasis GIS sehingga membantu Fiscus untuk mengetahui potensi dari sisi objek maupun lokasinya sehingga dapat memudahkan dalam melakukan pelaksanaan intensifikasi, ekstensifikasi maupun proses penyusunan target anggaran, yang dapat mengetahui potensi dari sisi objek maupun lokasinya",
            "image_produk" => "edit potensi.png",
            "tujuan" => "<ol>
            <li>Meningkatkan kinerja dan kontribusi sektor Pajak Daerah dalam pos Pendapatan Asli Daerah melalui penggalian pontensi dan pengembangan terhadap potensi obyek Pajak Daerah melalui badan terkait/Satuan Kerja Perangkat Daerah (SKPD) dengan memanfaatkan Teknlogi Informasi.</li>
            <li>Memudahkan Fiscus dalam mengetahui potensi dari sisi objek maupun lokasi objek sehingga dapat menghemat waktu dalam pelaksanaan intensifikasi, ekstensifikasi maupun proses penyusunan target anggaran.</li>
            <li>Mengembangkan mekanisme baru dalam interaksi antara sumber-sumber pendapatan dengan pihak yang membutuhkan akses data dan informasi secara cepat dan akurat.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA009",
            "slug" => "e-sig-pbb-p2",
            "nama_produk" => "Elektronik Sistem Informasi Geografis Pajak Bumi dan Bangunan Perdesaan dan Perkotaan",
            "singkatan_produk" => "e-SIG PBB P2",
            "deskripsi_produk" => "E-SIG PBB P2 merupakan perangkat lunak yang mengolah data spasial yang dirancang secara efisien untuk memperoleh, menyimpan, memperbaharui, memanipulasi, menganalisis, dan menampilkan semua bentuk informasi yang bereferensi geografi dari sebuah Objek Pajak.",
            "image_produk" => "edit retribusi.png",
            "tujuan" => "<ol>
            <li>Mempermudah pengambilan keputusan.</li>
            <li>Memperbaharui data spasial sehingga Database PBB P2 dapat mendekati kondisi di lapangan yang sebenarnya.</li>
            <li>Memuktahirkan data-data Objek Pajak PBB P2, seperti Peta Desa, Peta Blok dan Peta ZNT serta dengan penerapan sinkronisasi SIG dengan SIMPBB melalui pemetaan, identifikasi, pengukuran, pendataan dan registrasi terhadap objek pajak PBB P2.</li>
            <li>Diharapkan dapat meningkatkan penerimaan daerah sektor PBB P2 dari pembaharuan dan pemeliharaan Basis Data SIMPBB dengan SIG.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA010",
            "slug" => "e-sptpd",
            "nama_produk" => "Elektronik Surat Pemberitahuan Pajak Terhutang",
            "singkatan_produk" => "e-SPPT",
            "deskripsi_produk" => "e-SPTPD merupakan aplikasi berbasis Web yang digunakan oleh Wajib Pajak untuk menyampaikan laporan SPTPD secara Online kepada Fiscus sesuai dengan masa pajaknya. e-SPTPD merupakan aplikasi pendukung dari SIMPATDA yang digunakan oleh Wajib Pajak dalam proses perekaman laporan SPTPD.",
            "image_produk" => "edit sptpd.png",
            "tujuan" => "<ol>
            <li>Memberikan kelancaran dalam pelaksanaan kegiatan pelaporan administrasi Pajak Daerah.</li>
            <li>Meningkatkan pelayanan/nilai tambah dalam memberikan pelayanan kepada Wajib Pajak.</li>
            <li>Meningkatkan efektifitas, keakuratan dan kepraktisan dalam menyediakan layanan terhadap kebutuhan informasi di bidang pendapatan.</li>
            <li>Mengelola data administrasi yang cepat, tepat dan akurat.</li>
            <li>Mampu memenuhi kebutuhan informasi yang cepat, tepat dan akurat serta memiliki jangkauan yang luas bagi Wajib Pajak maupun Fiscus.</li>
            <li>Menciptakan media informasi layanan masyarakat yang dapat diakses ole Wajib Pajak sehingga memudahkan Wajib Pajak dalam melaporkan SPTPD</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA011",
            "slug" => "e-spop-lspop",
            "nama_produk" => "Elektronik Surat Pemberitahuan Objek Pajak/Lampiran Surat Pemberitahuan Objek Pajak",
            "singkatan_produk" => "e-SPOP/LSPOP",
            "deskripsi_produk" => "e-SPOP/LSPOP merupakan aplikasi berbasis Website yang dipergunakan oleh Fiscus (petugas pendata objek PBB P2), Kelurahan (petugas yang ditunjuk) untuk merekam, merubah (mutas) atau menyampaikan informasi dan Subjek Pajak maupun Objek Pajak PBB P2. e-SPOP/LSPOP merupakan aplikasi pedukung dari SIMPBB yang merupakan aplikasi Online yang dibuat untuk memudahkan petugas pendata objek PBB P2 untuk melihat ataupun melakukan crosscheck antara database dengan kondisi di lapangan.",
            "image_produk" => "edit sppt.png",
            "tujuan" => "<ol>
            <li>Memberikan kelancaran dalam pelaksanaan kegiatan pelaporan adminstrasi Pajak Daerah.</li>
            <li>Menciptakan peningkatan pelayanan / nilai tambah dalam memberikan pelayanan kepada Wajib Pajak.</li>
            <li>Meningkatkan efektivitas, keakuratan dan kepraktisan dalam menyediakan layanan terhadap kebutuhan informasi di bidang Pendapatan.</li>
            <li>Pengolahan data administrasi menjadi cepat, tepat dan akurat.</li>
            <li>Memudahkan masyarakat untuk memberikan informasi tentang PBB.</li>
            <li>Memudahkan perangkat daerah dalam memonitoring.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA012",
            "slug" => "pembayaran-online-sistem-host-to-host",
            "nama_produk" => "Pembayaran Online Sistem Host to Host",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Aplikasi Pembayaran Online Sistem Host to Host merupakan Aplikasi back-end (Web Server) yang digunakan pada proses pembayaran Pajak Daerah secara online melalui Bank dengan menggunakan metode Host to Host, yang selanjutnya sistem akan menghubungkan antara server Pemerintah Daerah dengan server Bank melalui server Gateway.",
            "image_produk" => "alur jaringan app payment h2h.png",
            "tujuan" => "<ol>
            <li>Mempermudah Wajib Pajak dalam melakukan pembayaran dengan menyediakan akses pembayaran yang luas dan mudah dijangkau.</li>
            <li>Menyediakan fasilitas pembayaran secara online melalui seluruh teller diseluruh Bank yang ditunjuk/Bank lain yang bekerjasama/secara Offline dari tempat pembayaran yang ditunjuk.</li>
            <li>Memberikan kesiapan sistem untuk menambahkan Bank penerima pembayaran baru, sehingga dapat menerima pembayaran secara Online/Offline.</li>
            <li>Tersedianya fasilitas pembayaran melalui loket secara Online/Offline secara fleksibel sehingga dapat membuka loket pembayaran tambahan selain melalui cabang-cabang Bank yang ada.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PA013",
            "slug" => "sistem-monitoring-data-transaksi-wajib-pajak-online-dengan-tapping-box",
            "nama_produk" => "Sistem Monitoring Data Transaksi Wajib Pajak Online dengan Tapping Box",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Sistem Monitoring Data Transaksi Wajib Pajak Online dengan Tapping Box merupakan salah satu cara untuk meningkatkan pelayanan, trasnparansi dan akuntabilitas serta mewujudkan reformasi birokrasi dalam pengelolaan Pajak Daerah dengan media alat pendeteksi transaksi (Tapping Box).",
            "image_produk" => "edit monitoring tapping box.png",
            "tujuan" => "<ol>
            <li>Meningkatkan transparansi, akuntabilitas, efektifitas dan efisiensi pemungutan Pajak Daerah.</li>
            <li>Menciptakan instrumen untuk mengukur besaran dasar pengenaan yang seharusya pada Wajib Pajak secara real time.</li>
            <li>Meningkatkan Pendapatan Asli Daerah khususnya Pajak Hotel, Pajak Restoran, Pajak Hiburan dan Pajak Parkir.</li>
            <li>Memberikan kemudahan dalam melakukan pengawasan dan monitoring kepada Wajib Pajak.</li>
            <li>Dapat memonitoring langsung transaksi real time yang dilakukan oleh Wajib Pajak.</li>
            </ol>"
        ]);


        Detil::create([
            "id_produk" => "PN001",
            "slug" => "pendataan-massal-objek-pajak-pbb-p2",
            "nama_produk" => "Pendataan Massal Objek Pajak Bumi dan Bangunan Pedesaan dan Perkotaan (PBB-P2)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa Konsultasi untuk Pendataan Massal Objek Pajak PBB P2 yang merupakan kegiatan pendaftaran, pendataan, pengukuran objek dan subjek PBB serta penilaian Zona Nilai Tanah untuk menciptakan suatu Basis Data yang akurat dan terupdate dengan mengintegrasikan semua aktivitas administrasi PBB kdalam 1 wadah.",
            "image_produk" => "pendataan massal.jpg",
            "tujuan" => "<ol>
            <li>Memperoleh data objek dan subjek PBB yang lengkap dan akurat yang berupa administrasi PBB yang lebih mutakhir, dimanan data tersebut akan dikelola dengan Sistem Informasi Manajemen Pajak Bumi dan Bangunan (SIMPBB).</li>
            <li>Mendapatkan data mutakhir dan akurat yang meliputi besarnya NJOP yang lebih adil dan merata yang mendekati dengan nilai pasar wajar, sehingga hasil ketetaan PBB yang diterbtkan dapat diterima oleh wajib pajak dan bersedia melaksanakan kewajibannya untuk membayar pajak.</li>
            <li>Menajaga akurasi data objek pajak yang memenuhi unsur relevan, tepat waktu, efisien dan mutakhir.</li>Mengatasi kesulitan dalam menentukan besarnya Nilai Jual Objek Pajak (NJOP) PBB
            <li>Mengidentifikasi Nilai Indikasi Rata-Rata (NIR) Obejek Pajak Bumi dan Bangunan (PBB) dalam suatu Zona Nilai Tanah (ZNT).</li>
            <li>Menentukan nilai pasar wajar rata-rata yang dapat mewakili tanah dalam suatu Zona Nilai Tanah (ZNT).</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN002",
            "slug" => "penyempurnaan-zona-nilai-tanah-znt",
            "nama_produk" => "Penyempurnaan Zona Nilai Tanah (ZNT)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa konsultasi yang berupa kegiatan yang dilakukan untuk mendapatkan data nilai Pajak Bumi dan Bangunan sebagai potensi pajak daerah yang nantinya akan digunakan sebagai dasar acuan dalam menentukan besarnya Nilai Jual Objek Pajak (NJOP) dan harga resources sebagai dasar pengenaan PBB",
            "image_produk" => "pendataan massal.jpg",
            "tujuan" => "<ol>
            <li>Meningkatkan pendapatan Asli Daerah dari sektor PBB P2 serta penertiban dalam administrasi PBB P2.</li>
            <li>Meningkatkan potensi Pajak Daerah yang didukung administrasi data yang akurat dan up to date.</li>
            <li>Meningkatkan pegenalan Pajak Bumi dan Bangunan (PBB) yang lebih adli dan merata serta kemudahan dalam pelayanan Wajib Pajak.</li>
            <li>Mendapatkan data mutakhir dan akurat yang meliputi besarnya NJOP serta biaya komponen bagunan sebagai dasar pengenaan PBB dan penerapan besarnya tarif PBB P2 yang lebih adil dan merata yang dapat mendekati nilai pasar wajar, sehingga hasil ketetapan PBB yang diteribikan dapat diterima oleh Wajib Pajak.</li>
            <li>Menyempurnakan Penggolongan Nilai Bumi dan Penentuan Zona Nilai Tanah dalam menentukan besarnya Nilai Jual Opjek Pajak sevagai Dasar Pengenaan PBB P2.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN003",
            "slug" => "pembuatan-peta-digital-objek-pbb-p2",
            "nama_produk" => "Pembuatan Peta Digital Objek Pajak Bumi dan Bangunan Pedesaan dan Perkotaan (PBB-P2)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa konsultasi untuk pembuatan peta dalam format digital yang dapat disimpan dan dicetak sesuai dengan keinginan pembuatnya baik dengan jumlah dan skala peta yang dihasilkan.  Saat ini pembuatan peta sudah menggunakan teknologi Sistem Informasi Geografis (SIG).",
            "image_produk" => "peta digital.png",
            "tujuan" => "<ol>
            <li>Pembuatan peda digital akan memberikan informasi yang mendekati kondisi dunia nyata serta memprediksi suatu hasil dan perencanaan strategis.</li>
            <li>Menyediakan peta dan informasi Pemerintah Daerah menggunakan aplikasi Sistem Informasi DIgital (SIG) yang disajikan berupa peta dan informasi digital.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN004",
            "slug" => "penilaian-individual-objek-pajak-pbb-non-standar",
            "nama_produk" => "Penilaian Individu Objek Pajak PBB Non Standar",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa konsultasi untuk Penilaian Individu Objek Pajak PBB Non Standar yang berupa pelaksanaan kegiatan yang diterapkan untuk Objek Pajak yang bernilai tinggi (tertentu), baik Objek Pajak khusus ataupun Objek Pajak umum yang telah dinilai dengan CAV namun hasilnya tidak mencerminkan nilai yang sebenarnya karena keterbatasan aplikasi program.",
            "image_produk" => "penilaian individu.jpg",
            "tujuan" => "<ol>
            <li>Memperoleh data Objek dan Subjek PBB yang lengkap, akurat, valid dan mutakhir dari Objek Bumi dan Bangunan Non Standar.</li>
            <li>Tersedianya data Objek Pajak Potensial berupa Objek Pajak Non Standar (objek-objek pajak yang mempunyai karakteristik khusu).</li>
            <li>Tersedianya Data Objek dan Subjek PBB Non Standar dan informasi nilai jual objek pajak yang akurat sebagai dasar pengenaan PBB.</li>
            <li>Peningkatan pokok dan penerimaan Pajak PBB P2.</li>
            <li>Pembentukan Basis Data dan peningkatan tertib administrasi PBB.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN005",
            "slug" => "kajian-potensi-pajak-daerah",
            "nama_produk" => "Kajian Potensi Pajak Derah",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa Konsultasi untuk Kajian Potensi Pajak Daerah. Kajian Potensi Daerah merupakan peluang untuk meningkatkan pendapatan asli daerah melalui Pajak Daerah, guna membiayai pelaksanaan Pemerintah Daerah.",
            "image_produk" => "diklat.jpg",
            "tujuan" => "<ol>
            <li>Menganalisis keadaan erekonomian daerah secara umum.</li>
            <li>Menganalisis pertumbuhan potensi penerimaan pajak daerah 5 tahun yang akan datang.</li>
            <li>Menganalisi dan memproyeksi penerimaan pajak daerah.</li>
            <li>Menganalisis fakitr-faktor ekonomi makro daerah yang mempengaruhi kontribusi Pajak Daerah.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN006",
            "slug" => "kajian-potensi-retribusi-daerah",
            "nama_produk" => "Kajian Potensi Retribusi Daerah",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa Konsultasi untuk Kajian Potensi Retribusi Daerah. Retribusi Daerah mempunyai jenis yang beragam, namun tidak semua retribusi tersebut potensial yang dalam artian memberikan konstribusi terhadap Pendapatan Asli Daerah secara signifikan.",
            "image_produk" => "diklat.jpg",
            "tujuan" => "<ol>
            <li>Menganalisis keadaan erekonomian daerah secara umum.</li>
            <li>Menganalisis pertumbuhan potensi penerimaan retribusi daerah 5 tahun yang akan datang.</li>
            <li>Menganalisis faktor-faktor ekonomi makro daerah yang mempengaruhi kontribusi Pajak Daerah.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN007",
            "slug" => "penyusunan-naskah-akademik-perda-pajak-retribusi-daerah",
            "nama_produk" => "Penyusunan Naskah Akademik PERDA Pajak/Retribusi Daerah",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Jasa konsultasi yang berupa kegiatan pembuatan peta dalam format digital yang dapat disimpan dan dicetak sesuai dengan keinginan pembuatnya baik dengan jumlah dan skala peta yang dihasilkan.",
            "image_produk" => "diklat.jpg",
            "tujuan" => "<ol>
            <li>Perbaikan pengelolaan Pajak dan Retribusi Kabupaten/Kota.</li>
            <li>Optimalisasi Pendapatan Daerah dalam pengelolaan Pemungutan Pajak dan Retribusi sebagai sumber Penerimaan Pendapaan Daerah.</li>
            <li>Penerapan Pengenaan tarif Pajak dan Retribusi yang lebih adil dan berimbang.</li>
            <li>Peningkatan Pendapatan Asli Daerah (PAD) yang bersumber dari Pajak dan Retribusi Dearah.</li>
            <li>Menyusun potensi Pajak dan Retribusi untuk 5 tahun yang akan datang.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN008",
            "slug" => "workshop-program-diklat-reguler",
            "nama_produk" => "Workshop Program Diklat Reguler",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Program Pendidikan dan Pelatihan Reguler dilaksanakan sesuai dengan Jadwal Program Workshop selama 1 tahun. Tempat pelaksanaan di Jakarta dengan minimal peserta 12 orang.",
            "image_produk" => "diklat.jpg",
            "tujuan" => "<ol>
            <li>Materi dapat dipilih dari pilihan Workshop yang disediakan, atau</li>
            <li>Materi dapat ditentukan oleh Peserta</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN009",
            "slug" => "workshop-program-diklat-group",
            "nama_produk" => "Workshop Program Diklat Group",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Program Pendidikan dan Pelatihan Group merupakan program Workshop yang diselenggarakan berdasarkan permintaan/kebutuhan Pemerintah Daerah Kabupaten/Kota maupun Swasta. Jika ingin menggunakan jasa kami, maka harus menginformasikan minimal 1 bulan sebelum kegiatan dimulai. Tempat pelaksanaan tersedia pilihan, yaitu Bandung, Yogyakarta, Malang, Lombok dan Bali dengan minimal peserta 15 orang.",
            "image_produk" => "diklat.jpg",
            "tujuan" => "<ol>
            <li>Materi dapat dipilih dari pilihan Workshop yang disediakan, atau</li>
            <li>Materi dapat ditentukan oleh Peserta</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN010",
            "slug" => "workshop-penilaian-individual-objek-non-standar-tingkat-dasar",
            "nama_produk" => "Workshop Penilaian Individual Objek Non Standar Tingkat Dasar (SPBU, TOWER, RUKO)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop yang diselenggarakan untuk meningkatkan kompetensi peserta pelatihan dengan memberikan pemahaman tentang teori penilaian Objek Pajak Non Standar dalam rangka menggali potensi PBB P2.",
            "image_produk" => "workshop penilaian massal & individu.jpg",
            "tujuan" => "<ol>
            <li>Pengantar Penilaian Individual dan Penyusunan Rencana Kerja.</li>
            <li>Tata cara Penilaian Individual Tanah dan Bangunan.</li>
            <li>Persiapan dan sumulasi pelaksanaan Penilaian Individual Objek Pajak Non Standar.</li>
            <li>Persiapan dan penilaian SPBU.</li>
            <li>Pendataan dan penilaian Tower.</li>
            <li>Pendataan dan penilaian Ruko.</li>
            <li>Hasil penyusunan laporan.</li>
            <li>Perhitungan dan penetapan pajak.</li>
            <li>Diskusi dan tanya jawab.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN011",
            "slug" => "workshop-map-info-terintegrasi-dengan-aplikasi-smart-map-pbb-p2",
            "nama_produk" => "Workshop Map Info Terintegrasi dengan Aplikasi Smart Map PBB P2",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop yang diselenggarakan untuk menyelaraskan pemeliharaan Basis Data antara Data Atribut dan Data Spasial, disertai modul-modul aplikasi Map Info yang siap pakai dan dapat disajikan secara grafis, sehingga dapat disajikan secara grafis yang nantinya akan sangat membantu bagi para perencana, pelaksana dan pengawas dalam pengelola PBB.",
            "image_produk" => 'SIG & Map Info.jpg',
            "tujuan" => "<ol>
            <li>Troubleshooting dan penyamaan pemahaman dasar terkait digitasi, editing peta.</li>
            <li>Cleaning dan porimizing data perta.</li>
            <li>Uji kualitas data (cek region).</li>
            <li>Membuat peta dengan menggunakan data dari perangkat lunak lain.</li>
            <li>Membuat peta tematik.</li>
            <li>Menggunakan Query dan SQL Select Query.</li>
            <li>Update Data Atribut dan mengkorelaskan dengan peta.</li>
            <li>Uji ketelitian Atribut Data Geospasial.</li>
            <li>Overview Smart Map.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN012",
            "slug" => "workshop-oracle-dalam-penerapan-sismiop-tingkat-dasar",
            "nama_produk" => "Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Dasar)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop yang diselenggarakan untuk meningkatkan sistem admisnitrator terhadap pengembangan sumber daya manusia yang berkualitas, khususnya bagi para penanggungjawab data elektronik dan operator dalam bidang Teknologi Informasi dan dapat menangani troubleshooting yang terjadi di daerah, khususnya mengenai penerapan Oracle.",
            "image_produk" => "workshop oracle dasar.jpg",
            "tujuan" => "<ol>
            <li>Pengenalan dasar-dasar Programming.</li>
            <li>Pengenalan Database Oracle 11g dan Run Time Oracle 6i.</li>
            <li>Pengenalan Form dan Report.</li>
            <li>Instalasi Aplikasi Oracle 11g dan 6i.</li>
            <li>Jaringan Oracle 11g dan 6i.</li>
            <li>Pengenalan TOAD dan instalasi TOAD.</li>
            <li>Penggunaan dan Pengoprasian TOAD.</li>
            <li>Export dan Import ke Database.</li>
            <li>Troubleshooting.</li>
            <li>Diskusi dan tanya jawab.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN013",
            "slug" => "workshop-oracle-dalam-penerapan-aplikasi-sismiop-tingkat-lanjutan",
            "nama_produk" => "Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Lanjutan)",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop ini merupakan lanjutan dari Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Dasar), yang diselenggarakan untuk meningkatkan sistem admisnitrator terhadap pengembangan sumber daya manusia yang berkualitas, khususnya bagi para penanggungjawab data elektronik dan operator dalam bidang Teknologi Informasi dan dapat menangani troubleshooting yang terjadi di daerah, khususnya mengenai penerapan Oracle",
            "image_produk" => "Oracle SISMIOP.jpg",
            "tujuan" => "<ol>
            <li>Pengenalan dasar-dasar Programming.</li>
            <li>Pengenalan Database Oracle 11g dan Run Time Oracle 6i.</li>
            <li>Pengenalan Form dan Report.</li>
            <li>Instalasi Aplikasi Oracle 11g dan 6i.</li>
            <li>Jaringan Oracle 11g dan 6i.</li>
            <li>Pengenalan TOAD dan instalasi TOAD.</li>
            <li>Penggunaan dan Pengoprasian TOAD.</li>
            <li>Export dan Import ke Database.</li>
            <li>Troubleshooting.</li>
            <li>Diskusi dan tanya jawab.</li>
            </ol>"
        ]);

        Detil::create([
            "id_produk" => "PN014",
            "slug" => "workshop-pemeriksaan-pajak-daerah",
            "nama_produk" => "Workshop Pemeriksaan Pajak Daerah",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop yang diselenggarakan untuk  memberi pengetahuan dan keterampilan teknis dalam hal pemeriksaan Pajak Daerah serta pelaporan berdasarkan peraturan Perundang-undangan yang berlaku sehingga peserta dapat menjalankan pemeriksaan Pajak Daerah secara efektif dan efesien.",
            "image_produk" => "pemeriksaan pajak.jpg",
            "tujuan" => "<ol>
            <li>Pengenalan dasar-dasar Programming.</li>
            <li>Pengenalan Database Oracle 11g dan Run Time Oracle 6i.</li>
            <li>Pengenalan Form dan Report.</li>
            <li>Instalasi Aplikasi Oracle 11g dan 6i.</li>
            <li>Jaringan Oracle 11g dan 6i.</li>
            <li>Pengenalan TOAD dan instalasi TOAD.</li>
            <li>Penggunaan dan Pengoprasian TOAD.</li>
            <li>Export dan Import ke Database.</li>
            <li>Troubleshooting.</li>
            <li>Diskusi dan tanya jawab.</li>
            </ol>"
        ]);


        Detil::create([
            "id_produk" => "PN015",
            "slug" => "workshop-penggalian-potensi-&-pengelolaan-piutang-pajak-daerah",
            "nama_produk" => "Workshop Penggalian Potensi & Pengelolaan Piutang Pajak Daerah",
            "singkatan_produk" => null,
            "deskripsi_produk" => "Workshop yang diselenggarakan dalam rangka perbaikan data Wajib Pajak Bumi dan Bangunan Pedesaan dan Perkotaan (PBB-P2), guna meningkatkan pendapatan asli daerah dari sektor PBB-P2 serta mendapatkan data mutakhir dan akurat yang meliputi antara lain besarnya NJOP sebagai dasar pengenaan PBB dan penerapan besarnya tarif PBB.",
            "image_produk" => "pemeriksaan pajak.jpg",
            "tujuan" => "<ol>
            <li>Isu permasalahan peralihan PBB P2 terkait pengelolaan PBB P2 dan piutang PBB P2.</li>
            <li>Penanganan piutang dan penghapusan piutang PBB melalui pemuktakhiran, validasi pitunga PBB.</li>
            <li>Kajian kebijakan regulasi piutang PBB.</li>
            <li>Diskusi dan tanya jawab.</li>
            </ol>"
        ]);
        

        Keunggulan::create([
            "keunggulan_id" => "PA001",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA001",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk dapat terintegrasi dengan Aplikasi SIMPBB/SISMIOP serta dengan Aplikasi pembayaran Online dengan Bank & BPN dengan metode Host to Host."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA002",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA002",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRARSI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dapat diintegrasikan dengan sistem pembayaran Bank dengan teknologi Web Service dan Standar ISO 8583 serta produk kami seperti e-BPHTB, Aplikasi SIMPBB dan Aplikasi Keuangan Daerah."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA003",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA003",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Sistem dapat melakukan upload/pengiriman data ke Aplikasi SIMPBB & dapat melakukan download data dari Aplikasi SIMPBB melalui Internet"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA004",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA004",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk dapat terintegrasi dengan beberapa Aplikasi seperti BPHTB, Sistem Informasi Geografis (SIG), SMS Gateway serta Aplikasi pembayaran secara ONLINE dengan Bank dengan model Host to Host (H2H)."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA005",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA005",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "SISTEM DAPAT DIOPERASIKAN SESUAI DENGAN SUMBER DAYA",
            "detil_keunggulan" => "Pihak Pemerintah Daerah dapat memilih konfigurasi yang sesuai dengan sumber daya yang ada serta meningkatkan fasilitas infrastruktur sistem secara bertahap."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA006",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA006",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "SISTEM DAPAT DIOPERASIKAN SESUAI DENGAN SUMBER DAYA",
            "detil_keunggulan" => "Pihak Pemerintah Daerah dapat memilih konfigurasi yang sesuai dengan sumber daya yang ada serta meningkatkan fasilitas infrastruktur sistem secara bertahap"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA007",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA007",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk mengintegrasi Ponsel dengan Komputer (PC) atau server Aplikasi SIMPATDA dan SIMPBB/SISMIOP."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA008",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA008",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk dapat terintegrasi dengan Aplikasi Simpatda/SIMPBB serta berbasis GIS."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA009",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA009",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk dapat terintegrasi dengan Aplikasi SIMPBB."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA010",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet"
        ]);
        
        Keunggulan::create([
            "keunggulan_id" => "PA010",
            "image_keunggulan" => "upload.png",
            "judul_keunggulan" => "DAPAT MELAKUKAN UPLOAD DOKUMEN",
            "detil_keunavnggulan" => "Sistem dapat melakukan upload/pengiriman data ke Aplikasi SIMPATDA & dapat melakukan download data dari Aplikasi SIMPATDA melalui Internet"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA010",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dirancang untuk dapat terintegrasi dengan Aplikasi pembayaran Online dengan Bank & BPN dengan metode Host to Host."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA011",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA011",
            "image_keunggulan" => "upload.png",
            "judul_keunggulan" => "DAPAT MELAKUKAN UPLOAD DOKUMEN",
            "detil_keunggulan" => "Sistem dapat melakukan upload/pengiriman data ke Aplikasi SIMPBB & dapat melakukan download data dari Aplikasi SIMPBB melalui Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA011",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "DAPAT TERINTEGRASI DENGAN APLIKASI LAIN",
            "detil_keunggulan" => "Dapat diintegrasikan dengan Aplikasi SIMPBB"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA012",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Pembayaraan PBB secara Online kapan saja dan dimana saja menggunakan komputer (PC) maupun secara mobile (HP/Gadget lain) yang terhubung Internet"
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA012",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "SPESIFIKASI",
            "detil_keunggulan" => "Membutuhkan Aplikasi Gateway yang menggunakan standar protokol ISO 8583 sesuai dengan ketentuan yang dipersyaratkan oleh Bank tentang standar transaksi pembayaran elektronik."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA013",
            "image_keunggulan" => "24jam.png",
            "judul_keunggulan" => "24 JAM ONLINE",
            "detil_keunggulan" => "Dapat diakses menggunakan komputer (PC) yang terhubung Internet."
        ]);

        Keunggulan::create([
            "keunggulan_id" => "PA013",
            "image_keunggulan" => "integrate.png",
            "judul_keunggulan" => "SPESIFIKASI",
            "detil_keunggulan" => "Perangkat yang dipergunakan dalam Aplikasi Monitoring Online Tapping Box tergantung dari tipe Wajib Pajak dan Bisnis Proses yang terjadi di Wajib Pajak yang akan dipantau transaksinya."
        ]);

        

        

    }
}
