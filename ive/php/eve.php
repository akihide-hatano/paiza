<?php

function getEveDay($date) {
    // 入力が空かどうかを検証
    if (empty($date)) {
        throw new Exception('入力値が空です。');
    }

    // 入力が数値であるかを検証
    if (!is_numeric($date)) {
        throw new Exception('数値を入力してください。');
    }

    $n = (int)$date;

    // 入力値が2から31の範囲内か確認
    if ($n < 2 || $n > 31) {
        throw new Exception('入力値は2から31の範囲外です。');
    }

    // 日付を1日前にする
    return $n - 1;
}

try {
    // 標準入力から値を取得
    $input_line = trim(fgets(STDIN));

    // 関数を呼び出して結果を取得
    $result = getEveDay($input_line);

    // 結果を出力
    echo $result . PHP_EOL;

} catch (Exception $e) {
    echo "エラー: " . $e->getMessage() . PHP_EOL;
}