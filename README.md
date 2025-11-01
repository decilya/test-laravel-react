# Тестовое задание

После скачивания проекта запустите бэк: 

```bash
$ make install

http://localhost
```

бэк:
http://localhost

Для запуска фронта используйте:

```bash
$ cd blog-frontend
$ npm install axios react-router-dom
$ npm start

http://localhost:3000
```

фронт: http://localhost:3000


Миграции и сидеры:
```bash
docker compose exec app php artisan migrate:fresh --seed
# или
docker compose exec app php artisan db:seed --class=ArticlesTableSeeder
docker compose exec app php artisan db:seed --class=CommentsTableSeeder
```

Описание задачи: 
```bash
Задача: Разработка простого блога с комментариями
Требования к функционалу:
1. Backend (Laravel):
o REST API для статей (CRUD):
 Просмотр списка статей (GET /api/articles).
 Просмотр одной статьи (GET /api/articles/{id}).
 Добавление статьи (POST /api/articles, авторизация не требуется).
 Добавление комментария к статье (POST /api/articles/{id}/comments).
o Модели:
 Article (поля: id, title, content, created_at).
 Comment (поля: id, article_id, author_name, content, created_at).
o Миграции и сидер для заполнения тестовыми данными (3–5 статей).
2. Frontend (React):
o Страница со списком статей (заголовок, дата, краткое содержание).
o Страница статьи с комментариями и формой добавления нового
комментария.
o Форма добавления новой статьи (простая, без WYSIWYG).
3. Docker:
o Контейнеризация приложения (Laravel + MySQL + Nginx/Apache).

Как сдавать:
1. Репозиторий на GitHub/GitLab с полным кодом.
2. README.md с инструкцией по запуску (включая команды для миграций и сидов).
```

код фронта:
```bash
cd src/blog-frontend
```