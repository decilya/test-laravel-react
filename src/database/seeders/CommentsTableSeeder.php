<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        // Массив с тестовыми данными комментариев
        $comments = [
            [
                'article_id' => 1,
                'author_name' => 'Алексей',
                'content' => 'Отличная статья! Всё чётко и по делу.'
            ],
            [
                'article_id' => 1,
                'author_name' => 'Мария',
                'content' => 'Спасибо за полезную информацию!'
            ],
            [
                'article_id' => 2,
                'author_name' => 'Дмитрий',
                'content' => 'Есть пара вопросов по теме, но в целом всё понятно.'
            ],
            [
                'article_id' => 3,
                'author_name' => 'Елена',
                'content' => 'Очень интересно, жду продолжения!'
            ],
            [
                'article_id' => 4,
                'author_name' => 'Сергей',
                'content' => 'Не согласен с некоторыми тезисами, но статья заставила задуматься.'
            ],
            [
                'article_id' => 5,
                'author_name' => 'Анна',
                'content' => 'Коротко и ёмко. Спасибо за статью!'
            ],
        ];

        // Создаём комментарии
        foreach ($comments as $commentData) {
            Comment::create($commentData);
        }
    }
}
