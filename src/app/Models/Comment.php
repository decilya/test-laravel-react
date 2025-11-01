<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Carbon;


/**
 * Класс Comment
 *
 * @package App\Models
 * @property int $id Первичный ключ записи
 * @property int $article_id Внешний ключ, ссылающийся на статью
 * @property string $author_name Имя автора комментария
 * @property string $content Текст комментария
 * @property Carbon $created_at Дата создания записи
 * @property Carbon $updated_at Дата обновления
 * @property-read \Illuminate\Database\Eloquent\Relations\BelongsTo article() статьи
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
class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['article_id', 'author_name', 'content'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
