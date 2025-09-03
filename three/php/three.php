<?php
// three.php

// ロジックを独立した関数として定義
function calculate_apple_price(string $input_string): string
{
    $s = trim($input_string);

    try {
        if ($s === "") {
            throw new Exception("空白です。");
        }
        if (!is_numeric($s)) {
            throw new Exception("数値を入力してください");
        }
        $n = intval($s);
        if ($n < 0 || $n > 10000) {
            throw new Exception("0から10,000の範囲で入力してください。");
        }
        $result = $n * 3;
        return (string)$result;
    } catch (Exception $e) {
        return "エラー:" . $e->getMessage();
    }
}