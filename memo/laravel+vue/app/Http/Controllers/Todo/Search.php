<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\Search as Request;
use App\UseCases\Todo\Search as UseCase;

class Search extends Controller
{
    public function __invoke(Request $request, UseCase $useCase)
    {
        // Usecase：Todoリストを検索する
        $dataList = $useCase($request);
        // ビジネスロジックに乗らない何らかの処理
        // 取得したTodoリストをJOSN形式で返す
        return response()->json($dataList);
    }
}