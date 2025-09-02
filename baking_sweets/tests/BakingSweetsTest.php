<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class BakingSweetsTest extends TestCase
{
    /**
     * @test
     */
    public function test大さじ3杯が39グラムになること()
    {
        $command = "php baking_sweets.php";
        $input = "3";
        $expectedOutput = "39\n";

        $output = shell_exec("echo {$input} | {$command}");

        $this->assertEquals($expectedOutput, $output);
    }
    /**
     * @test
     */
    public function test文字列を入力した場合にエラーとなること()
    {
        $command = "php baking_sweets.php";
        $input = "hogehoge";
        // 期待する出力を修正
        $expectedOutput = "エラー入力値が不正です。数値を入力してください\n";

        $output = shell_exec("echo {$input} | {$command}");

        $this->assertEquals($expectedOutput, $output);
    }
    
    /**
     * @test
     */
    public function test空白を入力した場合にエラーとなること()
    {
        $command = "php baking_sweets.php";
        $input = "";
        // 期待する出力を修正
        $expectedOutput = "エラー入力してください\n";

        $output = shell_exec("echo {$input} | {$command}");

        $this->assertEquals($expectedOutput, $output);
    }
    
    /**
     * @test
     */
    public function test全角数字を入力した場合にエラーとなること()
    {
        $command = "php baking_sweets.php";
        $input = "１０";
        // 期待する出力を修正
        $expectedOutput = "エラー入力値が不正です。数値を入力してください\n";

        $output = shell_exec("echo {$input} | {$command}");

        $this->assertEquals($expectedOutput, $output);
    }
}