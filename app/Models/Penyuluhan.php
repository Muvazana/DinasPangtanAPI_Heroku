<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Penyuluhan extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    protected $table = 'tb_penyuluhan';
    protected $primaryKey = 'penyuluhan_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'kelurahan_id', 'date', 'kelompok_id', 'jumlah_anggota',
        'kegiatan', 'teknis', 'sosial', 'ekonomi',
        'masalah', 'pemecahan_masalah'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function tb_users()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function tb_kelompok()
    {
        return $this->belongsTo(Kelompok::class, 'kelompok_id', 'kelompok_id');
    }

    public function tb_kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'kelurahan_id');
    }
    
    public function tb_penyuluhan_file()
    {
        return $this->hasMany(PenyuluhanFile::class, 'penyuluhan_id', 'penyuluhan_id');
    }
}
