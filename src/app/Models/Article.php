<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Carbon;

/**
 * Класс Article
 *
 * @package App\Models
 * @property int $id Первичный ключ записи
 * @property string $title Заголовок статьи
 * @property string $content Текст статьи
 * @property Carbon $created_at Дата создания записи
 * @property Carbon $updated_at Дата обновления
 * @property-read \Illuminate\Database\Eloquent\Relations\HasMany comments() Комментарии, связанные с данной статьёй.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|static query()
 * @method static \Illuminate\Database\Eloquent\Builder|static where(string $column, mixed $operator = null, mixed $value = null)
 * @method static \Illuminate\Database\Eloquent\Builder|static find(int|string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|static findOrFail(int|string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|static create(array $attributes)
 * @method static \Illuminate\Database\Eloquent\Builder|static first()
 * @method static \Illuminate\Database\Eloquent\Builder|static firstOrFail()
 * @mixin \Illuminate\Database\Eloquent\Model
 */
class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
    ];

    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
