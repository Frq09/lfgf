<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    use HasFactory;
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
    'user_id',
    'game_title',
    'recruitment_type',
    'playstyle',
    'body'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chats()
    {
        return $this->belongsTo(Chat::class);
    }
}
