<?php
function get_day_of_week(string $dateString): string
{
    try {
        $date = new DateTime($dateString);
        // DateTimeオブジェクトから曜日を数字（0=日, 1=月...）で取得
        $day_number = $date->format('w');

        switch ($day_number) {
            case 0:
                return "日曜日";
            case 1:
                return "月曜日";
            case 2:
                return "火曜日";
            case 3:
                return "水曜日";
            case 4:
                return "木曜日";
            case 5:
                return "金曜日";
            case 6:
                return "土曜日";
            default:
                // この分岐は通常発生しませんが、念のため
                return "エラー";
        }
    } catch (Exception $e) {
        // 無効な日付形式が入力された場合に、例外を捕捉してメッセージを返す
        return "無効な日付形式です。";
    }
}

// ここからが実行部分です。
// コマンドラインからの引数を取得する
$dateInput = trim(fgets(STDIN)); // 標準入力から1行読み込む
if (!empty($dateInput)) {
    $result = get_day_of_week($dateInput);
    echo $result . "\n";
} else {
    echo "使用方法: echo [日付文字列] | php week.php\n";
    echo "例: echo 2025-09-01 | php week.php\n";
}
?>