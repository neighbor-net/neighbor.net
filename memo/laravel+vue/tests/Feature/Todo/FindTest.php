<?php

namespace Tests\Feature\Todo;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Corp\Common\Account;
use Tests\TestCase;

class FindTest extends TestCase
{
    public function test_NG_idを指定しない()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/find');
        $response->assertStatus(422);
    }

    public function test_NG_idが数値以外()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/find', ['id'=>'abc']);
        $response->assertStatus(422);
    }

    public function test_NG_idが0()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/find', ['id'=>'0']);
        $response->assertStatus(422);
    }

    public function test_NG_idがマイナス()
    {
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/find', ['id'=>'-2']);
        $response->assertStatus(422);
    }

    public function test_OK_idが0以上の整数値()
    {
        //post exam again
        $response = $this->actingAs(Account::find(1))->json('GET', 'todo/find', ['id'=>'35']);
        $response->assertStatus(200);
    }
}
