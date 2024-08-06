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
</style>

<x-layoutsurat>
    <x-slot:tabs>Cetak: SKTMS</x-slot>
    <x-slot:judulsurat>{{ $judulsurat }}</x-slot>
    <x-slot:nomorsurat>{{ $daftarsurat->nomor_surat }}</x-slot>

    <div class="isi-surat">
        <p class="indent justify">Yang bertanda tangan dibawah ini Kepala Desa Muncang Kecamatan Bodeh
            Kabupaten Pemalang, menerangkan dengan sebenarnya bahwa :</p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td><strong>{{ $penduduk->nama }}</strong></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>: </td>
                <td>{{ $penduduk->umur_calculated }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: </td>
                <td>{{ $penduduk->pekerjaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: </td>
                <td class="justify">{{ $penduduk->dusun }}, RT {{ $penduduk->RT }}, RW
                    {{ $penduduk->RW }}, Kec. Bodeh, Kab. Pemalang, Jawa Tengah</td>
            </tr>
        </table>
        <p style="margin-top: 0">
            Nama tersebut diatas adalah orangtua dari :
        </p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td>Nama</td>
                <td>: </td>
                <td><strong>{{ $murid->nama }}</strong></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>: </td>
                <td>{{ $murid->tempat_lahir }}, {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->format('d-m-Y') }}
                </td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td>: </td>
                <td>{{ $suratsktms->asal_sekolah }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: </td>
                <td class="justify">{{ $murid->dusun }}, RT {{ $murid->RT }}, RW
                    {{ $murid->RW }}, Kec. Bodeh, Kab. Pemalang, Jawa Tengah</td>
            </tr>
        </table>
        <p style="margin-top: 10px;" class="indent justify">
            Orang tersebut diatas benar-benar penduduk kami yang keadaan ekonominya tidak mampu dalam kehidupan
            sehari-hari, Mohon agar dibebaskan dari kewajiban iuran uang gedung.
        </p>
        <p style="margin-top: 10px;" class="indent justify">
            Demikian surat keterangan ini kami buat agar dapat dipergunakan seperlunya.
        </p>
    </div>

    <div style="margin-top: 10px">
        <x-ttdkades>
            <x-slot:tanggalsurat>{{ $tanggal_surat }}</x-slot>
            @foreach ($ttd as $ttd)
                <x-slot:nama_gambar>{{ $ttd->nama_gambar }}</x-slot>
                <x-slot:nama_kades>{{ $ttd->nama_kades }}</x-slot>
            @endforeach
            <x-slot:ttdlain></x-slot>
        </x-ttdkades>
    </div>
</x-layoutsurat>
