<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\Find as Request;
use App\UseCases\Todo\Find as UseCase;

class Find extends Controller
{
    public function __invoke(Request $request, UseCase $useCase)
    {
        // Usecase：Todoを取得する
        $dataList = $useCase($request);
        // ビジネスロジックに乗らない何らかの処理
        // 取得したTodoをJOSN形式で返す
        return response()->json($dataList);
    }
}
