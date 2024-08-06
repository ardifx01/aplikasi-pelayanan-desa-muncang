<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduks';
    protected $primaryKey = 'NIK';
    public $incrementing = false;

    protected $fillable = [
        'NIK',
        'kk',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'status_perkawinan',
        'shdk',
        'pendidikan',
        'pekerjaan',
        'nama_ayah',
        'nama_ibu',
        'dusun',
        'RT',
        'RW',
        'kewarganegaraan',
        'umur',
        'kartu_sehat'
    ];

    protected $appends = ['umur_calculated']; // Untuk menghitung umur secara dinamis

    public function getUmurCalculatedAttribute()
    {
        if ($this->tanggal_lahir) {
            return Carbon::parse($this->tanggal_lahir)->age;
        }
        return null;
    }


}