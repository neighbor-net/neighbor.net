<?php

namespace App\UseCases\Todo;

use App\Models\Corp\Business\Todo;

class Find
{
    public function __invoke($request)
    {
        // 検idを取得
        $id = (int) $request->input('id');
        // データの検索処理
        return Todo::find($id);
    }
}
