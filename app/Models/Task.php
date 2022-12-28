<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    /**
     * Массово присваиваемые атрибуты.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'user_id',
        'created_at'
    ];

    /**
    * Получить пользователя - владельца данной задачи
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
