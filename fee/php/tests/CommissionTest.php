<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CommissionTest extends TestCase
{
    /** 共通: 実行コマンド（絶対パスで安定化） */
    private function cmd(): string
    {
        // tests/ から一つ上の階層にある commission.php を指す
        $script = __DIR__ . '/../commission.php';
        return 'php ' . escapeshellarg($script);
    }

    /** @test */
    public function test正しい貯金額を入力した場合に手数料が引かれた値が返されること()
    {
        $expected = "880\n";
        $actual = shell_exec("echo 1000 | " . $this->cmd());
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function test入力が空の場合にエラーメッセージが返されること()
    {
        $expected = "エラ:入力が空です。数値を入力してください。\n";
        $actual = shell_exec("echo '' | " . $this->cmd());
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function test入力が数値でない場合にエラーメッセージが返されること()
    {
        $expected = "エラ:入力値が不正です。数値を入力してください。\n";
        $actual = shell_exec("echo abc | " . $this->cmd());
        $this->assertEquals($expected, $actual);
    }
}
