<style>
    .judul-surat {
        text-decoration: underline;
        /* Membuat teks menjadi bergaris bawah */
        font-size: 1.2em;
        /* Ukuran teks judul */
        margin-bottom: 5px;
        /* Jarak antara judul dan nomor surat */
        line-height: 1;
        /* Mengatur jarak antarbaris menjadi lebih dekat */
    }

    .nomor-surat {
        font-size: 1em;
        /* Ukuran teks nomor surat */
        line-height: 1;
        /* Mengatur jarak antarbaris menjadi lebih dekat */
    }

    .isi-surat {
        font-size: 1.1em;
        text-align: justify;
    }

    .indent {
        text-indent: 3.5em;
    }

    /* .table{
        margin-left: 3.5em;
    } */
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

<x-layoutsurat>
    <x-slot:tabs>Cetak: Domisili</x-slot>
    <x-slot:judulsurat>{{ $judulsurat }}</x-slot>
    <x-slot:nomorsurat>No. {{ $daftarsurat->nomor_surat }}</x-slot>


    <div class="isi-surat">
        <p class="indent justify">Yang bertanda tangan dibawah ini Kepala Desa Muncang Kecamatan Bodeh Kabupaten
            Pemalang, menerangkan dengan sebenarnya bahwa :</p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td style="width: 25%;">Nama</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;"><strong>{{ $penduduk->nama }}</strong></td>
            </tr>
            <tr>
                <td style="width: 25%;">NIK</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->NIK }}</td>
            </tr>
            <tr>
                <td style="width: 25%;">Tempat/Tanggal Lahir</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>
            {{-- <tr>
                <td style="width: 25%;">Jenis Kelamin</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">
                    @if ($penduduk->jenis_kelamin == 'P')
                        Perempuan
                    @elseif($penduduk->jenis_kelamin == 'L')
                        Laki-laki
                    @else
                        {{ $penduduk->jenis_kelamin }} <!-- Tampilkan nilai langsung jika tidak ada kecocokan -->
                    @endif
                </td>
            </tr> --}}
            <tr>
                <td style="width: 25%;">Agama</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->agama }}</td>
            </tr>
            <tr>
                <td style="width: 25%;">Kewarganegaraan</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->kewarganegaraan }}</td>
            </tr>
            <tr>
                <td style="width: 25%;">Pekerjaan</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->pekerjaan }}</td>
            </tr>
            {{-- <tr>
                <td style="width: 25%;">Status Perkawinan</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">
                    @if ($penduduk->status_perkawinan == 'kawin')
                        Kawin
                    @elseif($penduduk->status_perkawinan == 'belum_kawin')
                        Belum kawin
                    @else
                        {{ $penduduk->status_perkawinan }} <!-- Tampilkan nilai langsung jika tidak ada kecocokan -->
                    @endif
                </td>
            </tr> --}}
            {{-- <tr>
                <td style="width: 25%;">Pendidikan Terakhir</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $penduduk->pendidikan }}</td>
            </tr> --}}
            <tr>
                <td style="width: 25%;">Alamat</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">RT {{ $penduduk->RT }}, RW {{ $penduduk->RW }}, Desa {{ $penduduk->dusun }}
                    Kec. Bodeh, Kab. Pemalang.</td>
            </tr>
            <tr>
                <td style="width: 25%;">Keterangan</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;" class="justify">Bahwa nama tersebut diatas adalah warga
                    kami dan benar-benar bertempat tinggal di
                    Desa Muncang sebagaimana alamat tersebut
                    diatas hingga saat sekarang.</td>
            </tr>
            {{-- <tr>
                <td style="width: 25%;">Keperluan</td>
                <td style="width: 3%;">: </td>
                <td style="width: 72%;">{{ $suratskd->keperluan }}</td>
            </tr> --}}
        </table>
        <p style="margin-top: 0">
            Demikian surat keterangan ini kami buat dengan sebenarnya untuk menjadikan periksa
            dan dapat dipergunakan sebagaimana mestinya.
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
