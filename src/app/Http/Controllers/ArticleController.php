<?php
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * GET /api/articles
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Article::with('comments')->get());
    }

    /**
     * GET /api/articles/{id}
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id): \Illuminate\Http\JsonResponse
    {
        $article = Article::with('comments')->find($id);
        if (!$article) {
            return response()->json(['error' => 'Не найдено'], 404);
        }
        return response()->json($article);
    }


    /**
     * POST /api/articles
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $article = Article::create($validated);
        return response()->json($article, 201);
    }

    /**
     * POST /api/articles/{id}/comments
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function addComment(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        $article = Article::find($id);
        if (!$article) {
            return response()->json(['error' => 'Не найдено'], 404);
        }

        $comment = Comment::create([
            'article_id' => $id,
            'author_name' => $validated['author_name'],
            'content' => $validated['content'],
        ]);

        return response()->json($comment, 201);
    }
}

