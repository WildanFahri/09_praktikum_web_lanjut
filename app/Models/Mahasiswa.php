<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Mahasiswa extends Model{
    protected $table = "mahasiswa"; // Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswa
    protected $primaryKey = 'nim'; // Memanggil isi DB dengan primary key

    /**
     * The attributes that are mass assignable. *
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'no_handphone',
        'tgl_lahir',
        'email',
        'featured_image',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }

}
