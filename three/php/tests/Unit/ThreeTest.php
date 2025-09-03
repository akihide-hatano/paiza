<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class ThreeTest extends TestCase
{
    #[DataProvider('validNumbersProvider')]
    public function testItReturnsCorrectPriceForValidInput(string $input, string $expected): void
    {
        $this->assertSame($expected, calculate_apple_price($input));
    }

    public static function validNumbersProvider(): array
    {
        return [
            '入力例1'        => ['3000',  '9000'],
            '入力例2'        => ['1100',  '3300'],
            '境界値（最小）' => ['0',     '0'],
            '境界値（最大）' => ['10000', '30000'],
        ];
    }

    #[DataProvider('invalidInputProvider')]
    public function testItReturnsErrorForInvalidInput(string $input, string $expectedError): void
    {
        $this->assertSame($expectedError, calculate_apple_price($input));
    }

    public static function invalidInputProvider(): array
    {
        return [
            '空白'   => ['',      'エラー:空白です。'],
            '文字列' => ['abc',   'エラー:数値を入力してください'],
            'マイナス値' => ['-10',   'エラー:0から10,000の範囲で入力してください。'],
            '範囲外' => ['15000', 'エラー:0から10,000の範囲で入力してください。'],
        ];
    }
}
