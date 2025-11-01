<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Класс User
 *
 * @package App\Models
 * @property int $id Первичный ключ записи
 * @property string $name Имя пользователя
 * @property string $email Электронная почта пользователя
 * @property \Illuminate\Support\Carbon|null $email_verified_at Дата подтверждения email
 * @property string $password Зашифрованный пароль
 * @property string|null $remember_token Токен для функции «Запомнить меня»
 * @property \Illuminate\Support\Carbon $created_at Дата создания записи
 * @property \Illuminate\Support\Carbon $updated_at Дата обновления
 * @method static \Illuminate\Database\Eloquent\Builder|static query()
 * @method static \Illuminate\Database\Eloquent\Builder|static where(string $column, mixed $operator = null, mixed $value = null)
 * @method static \Illuminate\Database\Eloquent\Builder|static find(int|string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|static findOrFail(int|string $id)
 * @method static \Illuminate\Database\Eloquent\Builder|static create(array $attributes)
 * @method static \Illuminate\Database\Eloquent\Builder|static first()
 * @method static \Illuminate\Database\Eloquent\Builder|static firstOrFail()
 * @method mixed sendEmailVerificationNotification()
 * @method \Illuminate\Database\Eloquent\Relations\MorphMany notifications()
 * @method \Illuminate\Database\Eloquent\Relations\MorphOne verifications()
 * @mixin \Illuminate\Database\Eloquent\Model
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
