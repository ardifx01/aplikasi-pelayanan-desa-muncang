<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Penghasilan</title>
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
            width: 20%;
        }

        .table-borderless td:nth-child(2) {
            width: 50%;
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
</head>

<body>
    <x-layoutsurat>
        <x-slot:tabs>Cetak: SKP</x-slot>
        <x-slot:judulsurat>{{ $judulsurat }}</x-slot>
        <x-slot:nomorsurat>No. {{ $daftarsurat->nomor_surat }}</x-slot>

        <div class="isi-surat">
            <p class="indent justify">Yang bertanda tangan dibawah ini Kepala Desa Muncang Kecamatan
                Bodeh Kabupaten Pemalang, menerangkan dengan sebenarnya bahwa :</p>
            <table class="table table-borderless table-sm" style="width: 100%;">
                <tr>
                    <td style="width: 25%;">Nama</td>
                    <td style="width: 3%;">: </td>
                    <td style="width: 72%;"><strong>{{ $penduduk->nama }}</strong></td>
                </tr>
                <tr>
                    <td style="width: 25%;">Umur</td>
                    <td style="width: 3%;">: </td>
                    <td style="width: 72%;">{{ $penduduk->umur_calculated }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Pekerjaan</td>
                    <td style="width: 3%;">: </td>
                    <td style="width: 72%;">{{ $penduduk->pekerjaan }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Alamat</td>
                    <td style="width: 3%;">: </td>
                    <td style="width: 72%;" class="justify">{{ $penduduk->dusun }}, RT {{ $penduduk->RT }}, RW
                        {{ $penduduk->RW }}, Kecamatan Bodeh, Kab. Pemalang, Jawa Tengah</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Keterangan</td>
                    <td style="width: 3%;">: </td>
                    <td style="width: 72%;" class="justify">
                        Orang tersebut diatas benar-benar penduduk kami dan berpenghasilan Rp.
                        {{ number_format($suratpenghasilan->penghasilan) }}, per bulan
                        dengan jumlah tanggungan ... (...........) orang.
                    </td>
                </tr>
            </table>
            <p style="margin-top: 0">
                Demikian Surat Keterangan ini kami buat agar dapat dipergunakan sebagaimana mestinya.
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
</body>

</html>
