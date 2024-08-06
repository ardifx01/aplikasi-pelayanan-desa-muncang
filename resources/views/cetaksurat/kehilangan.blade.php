<style>
    .judul-surat {
        text-decoration: underline;
        font-size: 1.2em;
        margin-bottom: 5px;
        line-height: 1;
    }

    .nomor-surat {
        font-size: 1em;
        line-height: 1;
    }

    .isi-surat {
        font-size: 1.1em;
        text-align: justify;
    }

    .indent {
        text-indent: 3.5em;
    }

    .table-borderless td:nth-child(1) {
        width: 25%;
    }

    .table-borderless td:nth-child(2) {
        width: 3%;
    }

    .table-borderless td:nth-child(3) {
        width: 72%;
    }

    .signature-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        /* Mengatur elemen dalam satu baris */
        margin-top: 20px;
        margin-left: auto;
        /* Menempatkan tanda tangan di sisi kanan */
        margin-right: 0;
        /* Memastikan elemen ke tepi kanan */
        width: 200px;
        /* Mengatur lebar kolom agar tetap konsisten */
    }

    .signature-container p {
        margin: 0;
        text-align: left;
        /* Menjaga teks agar rata kiri */
    }

    .signature-container img {
        max-width: 75%;
        height: auto;
    }
</style>

<x-layoutsurat>
    <x-slot:tabs>Cetak: SKK</x-slot>
    <x-slot:judulsurat>{{ $judulsurat }}</x-slot>
    <x-slot:nomorsurat>{{ $daftarsurat->nomor_surat }}</x-slot>

    <div class="isi-surat">
        <p class="indent justify">Yang bertanda tangan di bawah ini Kepala Desa Muncang, Kecamatan Bodeh, Kabupaten
            Pemalang, menerangkan dengan sebenarnya bahwa :</p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td><strong>{{ $penduduk->nama }}</strong></td>
            </tr>
            <tr>
                <td>NIK / No KTP</td>
                <td>: </td>
                <td>{{ $penduduk->NIK }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>: </td>
                <td>{{ $penduduk->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Alamat / Tempat Tinggal</td>
                <td>: </td>
                <td class="justify">{{ $penduduk->dusun }}, RT {{ $penduduk->RT }}, RW {{ $penduduk->RW }}, Kecamatan
                    Sragi, Kab. Pekalongan, Jawa Tengah</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: </td>
                <td>{{ $penduduk->pekerjaan }}</td>
            </tr>
        </table>
        <p class="indent justify">Orang tersebut adalah benar-benar warga Desa Muncang Kecamatan Bodeh Kabupaten
            Pemalang dengan data seperti di atas.</p>
        <p>Orang tersebut telah datang kepada kami untuk melapor dan mengaku telah kehilangan benda sebagai berikut:</p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td>Rincian</td>
                <td>: </td>
                <td>{{ $suratkehilangan->keperluan }}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>: </td>
                <td>{{ $suratkehilangan->keterangan }}</td>
            </tr>
        </table>
        <p class="indent justify">
            Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.
        </p>
    </div>

    <body>
        <div class="container mt-2">
            <div class="signature-container">
                <p>Muncang, {{ $tanggalsurat }}</p>
                <p>Kepala Desa Muncang</p>
                <img src="/img/ttd_akmal.png" alt="ttd kades" height="10">
                <p style="text-decoration: underline;"><strong>MASHURI RACHMADI</strong></p>
            </div>
        </div>
    </body>

</x-layoutsurat>
