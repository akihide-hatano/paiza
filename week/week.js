const fs = require("fs");

function getDayOfWeek(dateString) {
    try {
        const date = new Date(dateString);

        // Dateオブジェクトが無効な日付を返すかチェック
        // "Invalid Date"はDateオブジェクトの無効な状態
        if (isNaN(date)) {
            return "無効な日付形式です。";
        }

        // 曜日を数字（0=日, 1=月...）で取得
        const dayNumber = date.getDay();

        switch (dayNumber) {
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
                return "エラー";
        }
    } catch (e) {
        // 例外処理（通常は発生しないが念のため）
        return "無効な日付形式です。";
    }
}

// コマンドラインからの標準入力を取得
const dateInput = fs.readFileSync(0, "utf8").trim();

if (dateInput) {
    const result = getDayOfWeek(dateInput);
    console.log(result);
} else {
    console.log("使用方法: echo [日付文字列] | node week.js");
    console.log("例: echo 2025-09-01 | node week.js");
}