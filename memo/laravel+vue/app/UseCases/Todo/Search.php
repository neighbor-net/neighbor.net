<?php

namespace App\UseCases\Todo;

use App\Models\Corp\Business\Todo;

class Search
{
    public function __invoke($request)
    {
        // 検索条件を取得
        $criteria = $request->input('criteria');
        // 本当はここでデータの検索処理
        return Todo::all();
    }
}
