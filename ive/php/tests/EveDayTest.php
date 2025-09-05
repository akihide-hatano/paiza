<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class EveDayTest extends TestCase
{
    private function cmd(): string
    {
        // tests/ から一つ上の階層にある ive.php を指す
        $script = __DIR__ . '/../eve.php';
        return 'php ' . escapeshellarg($script);
    }

    /** @test */
    public function test正しい入力で1日前の日付が返されること()
    {
        $expected = "24\n";
        $output = shell_exec("echo 25 | " . $this->cmd());
        $this->assertEquals($expected, $output);
    }

    /** @test */
    public function test不正な入力でエラーメッセージが返されること()
    {
        $expected = "エラー: 数値を入力してください。\n";
        $output = shell_exec("echo abc | " . $this->cmd());
        $this->assertEquals($expected, $output);
    }

    /** @test */
    public function test範囲外の入力でエラーメッセージが返されること()
    {
        $expected = "エラー: 入力値は2から31の範囲外です。\n";
        $output = shell_exec("echo 1 | " . $this->cmd());
        $this->assertEquals($expected, $output);
    }
}
