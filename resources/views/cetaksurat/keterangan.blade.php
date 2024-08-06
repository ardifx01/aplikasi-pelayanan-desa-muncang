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
        width: 3%;
    }

    .table-borderless td:nth-child(3) {
        width: 77%;
    }
</style>

<x-layoutsurat>
    <x-slot:tabs>Cetak: Keterangan Beda Alamat</x-slot>
    <x-slot:judulsurat>SURAT KETERANGAN</x-slot>
    <x-slot:nomorsurat>{{ $daftarsurat->nomor_surat }}</x-slot>

    <div class="isi-surat">
        <p class="indent justify">Yang bertanda tangan dibawah ini kami :</p>
        <table class="table table-borderless table-sm" style="width: 100%;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><strong>{{ $penduduk->nama }}</strong></td>
            </tr>
            {{-- <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $penduduk->NIK }}</td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $penduduk->tempat_lahir }},
                    {{ \Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('d-m-Y') }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    @if ($penduduk->jenis_kelamin == 'P')
                        Perempuan
                    @elseif($penduduk->jenis_kelamin == 'L')
                        Laki-laki
                    @else
                        {{ $penduduk->jenis_kelamin }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $penduduk->agama }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td>{{ $penduduk->kewarganegaraan }}</td>
            </tr> --}}
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ $penduduk->umur_calculated }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $penduduk->pekerjaan }}</td>
            </tr>
            {{-- <tr>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>
                    @if ($penduduk->status_perkawinan == 'kawin')
                        Kawin
                    @elseif($penduduk->status_perkawinan == 'belum_kawin')
                        Belum kawin
                    @else
                        {{ $penduduk->status_perkawinan }}
                    @endif
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>{{ $penduduk->pendidikan }}</td>
            </tr> --}}
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $suratsk->alamat }}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td class="justify">Menerangkan dengan sebenarnya bahwa nama {{ strtoupper($penduduk->nama) }}
                    alamat {{ $suratsk->alamat_lama }} yang tertera pada Kartu Indonesia
                    Sehat No {{ $penduduk->kartu_sehat }} sudah berpindah alamat ke {{ $suratsk->alamat_baru }}
                    Rt.{{ $penduduk->RT }}/ Rw.{{ $penduduk->RW }} Bodeh Pemalang.</td>
            </tr>
        </table>
        <p style="margin-top: 0">
            Demikian surat keterangan ini kami buat dengan sebenarnya, dan
            untuk dapat dipergunakan seperlunya.</p>
    </div>

    <x-ttdkades>
        <x-slot:tanggalsurat>{{ $tanggal_surat }}</x-slot>
        {{-- <x-slot:namakades>Mashuri Rachmadi</x-slot>
        <x-slot:nipkades>24060121130043</x-slot> --}}
    </x-ttdkades>
</x-layoutsurat>
