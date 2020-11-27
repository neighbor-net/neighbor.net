<?php

namespace Tests\Feature\Todo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Corp\Common\Account;
use Tests\TestCase;

class SearchTest extends TestCase
{
    public function test_NG_検索条件を指定しない()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/search');
        $response->assertStatus(422);
    }

    public function test_NG_検索条件が5文字未満()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/search', ['criteria'=>'abcd']);
        $response->assertStatus(422);
    }

    public function test_NG_検索条件が10文字を超える()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/search', ['criteria'=>'abcdefghijk']);
        $response->assertStatus(422);
    }

    public function test_OK_検索条件が5文字以上10文字以下()
    {
        //post exam again
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/search', ['criteria'=>'abcdef']);
        $response->assertStatus(200);
    }
}
