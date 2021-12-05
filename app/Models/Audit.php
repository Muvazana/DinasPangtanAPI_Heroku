<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Audit extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    protected $table = 'tb_audit';
    protected $primaryKey = 'audit_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'kelurahan_id', 'date', 'kelompok_id', 'date_tanam',
        'luas_vol_tanam', 'date_panen', 'luas_vol_panen', 'provitas_panen',
        'produksi_panen', 'date_pengolahan', 'vol_pengolahan', 'total_nilai_harga', 'keterangan',
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function tb_komoditas()
    {
        //Many to many (Classtujuan, 'relantion_table', 'parent_id', 'id_tujuan')
        return $this->belongsToMany(Komoditas::class, 'tb_audit_komoditas', 'audit_id', 'komoditas_id');
    }

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
    
    public function tb_audit_file()
    {
        return $this->hasMany(AuditFile::class, 'audit_id', 'audit_id');
    }
}
