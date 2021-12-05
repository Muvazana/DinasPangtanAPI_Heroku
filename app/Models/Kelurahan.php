<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Kelurahan extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    protected $table = 'tb_kelurahan';
    protected $primaryKey = 'kelurahan_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kelurahan', 'kecamatan_id'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function tb_kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'kecamatan_id');
    }

    public function tb_kelompok()
    {
        return $this->hasMany(Kelompok::class, 'kelurahan_id', 'kelurahan_id');
    }

    public function tb_penyuluhan()
    {
        return $this->hasMany(Penyuluhan::class, 'kelurahan_id', 'kelurahan_id');
    }

    public function tb_audit()
    {
        return $this->hasMany(Penyuluhan::class, 'kelurahan_id', 'kelurahan_id');
    }
}
