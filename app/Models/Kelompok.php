<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Kelompok extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;
    protected $table = 'tb_kelompok';
    protected $primaryKey = 'kelompok_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kelompok', 'rt_rw', 'wilayah_id'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function tb_kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'kelurahan_id');
    }

    public function tb_penyuluhan()
    {
        return $this->hasMany(Penyuluhan::class, 'kelompok_id', 'kelompok_id');
    }

    public function tb_audit()
    {
        return $this->hasMany(Audit::class, 'kelompok_id', 'kelompok_id');
    }
}
