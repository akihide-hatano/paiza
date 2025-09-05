function eveDay(input){
    // 1. 入力が空かどうかを先にチェックする
    if (input === "") {
        return "エラー: 空文字ではなく、数値を入力してください。";
    }

    // 2. 数値であるかをチェックする
    if (isNaN(input)) {
        return "エラー: 入力値が不正です。数値を入力してください。";
    }

    const num = Number(input);

    // 3. 範囲外チェック
    if (num < 2 || num > 31) {
        return "エラー: 入力値は2から31の範囲外です。";
    }

    // 正常時：1日前の日付を返す
    return String(num - 1);
}

// Node.js の標準入力から受け取る処理
if (require.main === module) {
    const fs = require("fs");

    const input = fs.readFileSync(0, "utf8").trim(); // 標準入力
    console.log(eveDay(input));
}

// Jest から読み込むための設定
module.exports = { eveDay };