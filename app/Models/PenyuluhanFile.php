<?php   
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class PenyuluhanFile extends Model{
    use Authenticatable, Authorizable, HasFactory;
    protected $table = 'tb_penyuluhan_file';
    protected $primaryKey = 'penyuluhan_file_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'penyuluhan_id', 'file_name'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    
    public function tb_penyuluhan()
    {
        return $this->belongsTo(Penyuluhan::class, 'penyuluhan_id', 'penyuluhan_id');
    }
}