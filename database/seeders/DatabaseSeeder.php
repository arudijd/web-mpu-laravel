<?php

namespace Database\Seeders;

use App\Models\Detil;
use App\Models\Keunggulan;
use App\Models\Produk;
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
            "slug" => "e-bphtb"
        ]);
        Produk::create([
            "id_produk" => "PN001",
            "nama_produk" => "Pendataan Massal Objek Pajak PBB P2",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "pendataan massal.png",
            "slug" => "pendataan-massal-objek-pajak-pbb-p2"
        ]);
        Produk::create([
            "id_produk" => "PN002",
            "nama_produk" => "Penyempurnaan Zona Nilai Tanah (ZNT)",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "pendataan massal.png",
            "slug" => "penyempurnaan-zona-nilai-tanah-(znt)"
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
            "id_produk" => "PA006",
            "nama_produk" => "Workshop Program Diklat Reguler",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "workshop-program-diklat-reguler"
        ]);
        Produk::create([
            "id_produk" => "PA007",
            "nama_produk" => "Kajian Potensi Retribusi Daerah",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "kajian-potensi-retribusi-daerah"
        ]);
        Produk::create([
            "id_produk" => "PA008",
            "nama_produk" => "Workshop Program Diklat Group",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "workshop-program-diklat-group"
        ]);
        Produk::create([
            "id_produk" => "PA009",
            "nama_produk" => "Workshop Penilaian Individual Objek Non Standar Tingkat Dasar",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "workshop penilaian massal & individu.jpg",
            "slug" => "workshop-penilaian-individual-objek-non-standar-tingkat-dasar"
        ]);

        Produk::create([
            "id_produk" => "PN010",
            "nama_produk" => "Penyusunan Naskah Akademik PERDA Pajak/Retribusi Daerah",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "diklat.jpg",
            "slug" => "penyusunan-naskah-akademik-perda-pajak/retribusi daerah"
        ]);

        Produk::create([
            "id_produk" => "PN011",
            "nama_produk" => "Workshop Map Info Terintegrasi dengan Aplikasi Smart Map PBB P2",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "SIG & Map Info.jpg",
            "slug" => "workshop-map-info-terintegrasi-dengan-aplikasi-smart-map-pbb-p2"
        ]);
        Produk::create([
            "id_produk" => "PN012",
            "nama_produk" => "Workshop Oracle dalam Penerapan Aplikasi SISMIOP (Tingkat Dasar",
            "jenis_produk" => "Non Aplikasi",
            "image_produk" => "workshop oracle dasar.jpg",
            "slug" => "workshop-oracle-dalam-penerapan-sismiop-(tingkat-dasar)"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.|
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.|
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB|
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan|
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan|"
        ]);

        Detil::create([
            "id_produk" => "PA006",
            "slug" => "e-dashboard",
            "nama_produk" => "Elektronik Dashboard",
            "singkatan Produk" => "e-Dashboard",
            "deskripsi_produk" => "E-Dashboard merupakan aplikasi berbasis Web yang digunakan untuk menampilkan visualisasi sebuah data mengenai kinerja suatu instansi, sehingga didapatkan gambaran mengenai bagaimana sebuah organisasi ataupun bagian dari instansi mengalami perubahan pada kinerja yang sedang berjalan.",
            "image_produk" => "edit dashboard.png",
            "tujuan" => "Memudahkan monitoring informasi penting di lingkunagan Bapenda/BPPRD yang merupakan indikator kinerja.|
            Meningkatkan aspek kegunaan data penerimaan pajak.|
            Meningkatkan kualitas proses pengambilan keputusan|
            Memperoleh informasi Wajib Pajak dan mengolahnya sebagai data potensi perpajakan|"
        ]);

        Detil::create([
            "id_produk" => "PA008",
            "slug" => "e-potensi",
            "nama_produk" => "Elektronik Potensi",
            "singkatan Produk" => "e-Potensi",
            "deskripsi_produk" => "E-Potensi merupakan aplikasi berbasis Web yang digunakan untuk mengelola potensi objek Pajak Daerah yang ada dengan menggunakan Teknologi Informasi. E-Potensi berbasis GIS sehingga membantu Fiscus untuk mengetahui potensi dari sisi objek maupun lokasinya sehingga dapat memudahkan dalam melakukan pelaksanaan intensifikasi, ekstensifikasi maupun proses penyusunan target anggaran, yang dapat mengetahui potensi dari sisi objek maupun lokasinya",
            "image_produk" => "edit potensi.png",
            "tujuan" => "Meningkatkan kinerja dan kontribusi sektor Pajak Daerah dalam pos Pendapatan Asli Daerah melalui penggalian pontensi dan pengembangan terhadap potensi obyek Pajak Daerah melalui badan terkait/Satuan Kerja Perangkat Daerah (SKPD) dengan memanfaatkan Teknlogi Informasi|
            Memudahkan Fiscus dalam mengetahui potensi dari sisi objek maupun lokasi objek sehingga dapat menghemat waktu dalam pelaksanaan intensifikasi, ekstensifikasi maupun proses penyusunan target anggaran|
            Mengembangkan mekanisme baru dalam interaksi antara sumber-sumber pendapatan dengan pihak yang membutuhkan akses data dan informasi secara cepat dan akurat|"
        ]);

        Detil::create([
            "id_produk" => "PA005",
            "slug" => "e-retribusi",
            "nama_produk" => "Elektronik Retribusi",
            "singkatan Produk" => "e-Retribusi",
            "deskripsi_produk" => "E-Retribusi merupakan sistem elektronik Aplikasi yang mengelola administrasi Pendapatan Daerah, khususnya Retribusi Daerah guna meningkatkan kapasitas administrasi pemungutan Retribusi Daerah yang diharapkan dapat meningkatkan penerimaan Pendapatan Daerah.",
            "image_produk" => "edit retribusi.png",
            "tujuan" => "Tersedianya Aplikasi yang sesuai dengan peraturan dan perundang-undangan yang berlaku.|
            Terciptanya tertib administrasi dalam pengelolaan Retribusi Daerah.|
            Menerapkan sistem informasi yang fleksibel dan dapat dikembangkan, sehingga bisa diakses dengan berbagai macam perangkat komunikasi digital.|
            Memenuhi kebutuhan informasi serta memiliki jangkauan yang luas bagi Wajib Retribusi maupun Fiscus.|
            Terciptanya media informasi layanan masyarakat yang dapat diakses oleh Wajib Retribusi yang membutuhkan informasi layanan.|
            Terbangunnya Digital Information Center sebagai saran pendukung pelayanan kepada masyarakat.|"
        ]);

        Detil::create([
            "id_produk" => "PA009",
            "slug" => "e-sig-pbb-p2",
            "nama_produk" => "Elektronik Sistem Informasi Geografis Pajak Bumi dan Bangunan Perdesaan dan Perkotaan",
            "singkatan Produk" => "e-SIG PBB P2",
            "deskripsi_produk" => "E-SIG PBB P2 merupakan perangkat lunak yang mengolah data spasial yang dirancang secara efisien untuk memperoleh, menyimpan, memperbaharui, memanipulasi, menganalisis, dan menampilkan semua bentuk informasi yang bereferensi geografi dari sebuah Objek Pajak.",
            "image_produk" => "edit sig pbb.png",
            "tujuan" => "Mempermudah pengambilan keputusan|
            Memperbaharui data spasial sehingga Database PBB P2 dapat mendekati kondisi di lapangan yang sebenarnya|
            Memuktahirkan data-data Objek Pajak PBB P2, seperti Peta Desa, Peta Blok dan Peta ZNT serta dengan penerapan sinkronisasi SIG dengan SIMPBB melalui pemetaan, identifikasi, pengukuran, pendataan dan registrasi terhadap objek pajak PBB P2|
            Diharapkan dapat meningkatkan penerimaan daerah sektor PBB P2 dari pembaharuan dan pemeliharaan Basis Data SIMPBB dengan SIG,"
        ]);

        Detil::create([
            "id_produk" => "PA002",
            "slug" => "e-simpatda",
            "nama_produk" => "Elektronik Sistem Informasi Manajemen Pendapat Daerah",
            "singkatan Produk" => "e-SIMPATDA",
            "deskripsi_produk" => "e-SIMPATDA merupakan aplikasi berbasis Web yang dapat digunakan untuk mengelola administrasi Pajak Daerah dengan sistem yang dapat dioperasikan sesuai ketersedian sumber daya yang ada. Selain itu, produk ini juga sudah kami kembangkan dengan adanya aplikasi tambahan, yaitu e-SPTPD yang dapat digunakan oleh Wajib Pajak untuk melaporkan pajaknya secara online.",
            "image_produk" => "edit simpatda.png",
            "tujuan" => ""
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Detil::create([
            "id_produk" => "PA001",
            "slug" => "e-bphtb",
            "nama_produk" => "Elektronik Bea Perolehan Hak atas Tanah dan Bangunan",
            "singkatan Produk" => "e-BPHTB",
            "deskripsi_produk" => "e-BPHTB merupakan sistem aplikasi yang dapat digunakan untuk mengelola proses Bea Perolehan Hak Atas Tanah dan Bangunan guna membantu Fiscus untuk melakukan proses pelayanan kepada Wajib Pajak BPHTB.",
            "image_produk" => "edit bphtb.png",
            "tujuan" => "Menyediakan akses secara online kepada PPAT/Notaris untuk melakukan transaksi BPHTB.,
            Memberikan akses kepada BPN untuk melakukan monitoring mengenai keabsahan atas pembayaran BPHTB yang dilakukan oleh Wajib Pajak.,
            Menyediakan Aplikasi yang dapat membantu proses validasi BPHTB menjadi lebih akurat sesuai dengan ketentuan, serta meningkatkan pelayanan kepada masyarakat yang mengurus BPHTB,
            Mempercepat pencarian data untuk pelayanan kepada Wajib Pajak BPHTB yang mengajukan keberatan serta pengecekan ke lapangan,
            Mempercepat penyajian laporan realisasi penerimaan BPHTB dan tunggakan, sehingga akan mengingkatkan,"
        ]);

        Keunggulan::create([

        ]);
  
    }
}
