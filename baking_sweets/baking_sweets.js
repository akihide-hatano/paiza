'use strict';

// 標準入力から1行読み込むためのモジュール
const fs = require('fs');

// 同期的に標準入力からデータを読み込み、文字列に変換
const input = fs.readFileSync('/dev/stdin', 'utf8');

try {
  // 入力文字列の改行と空白を削除
    const input_str = input.trim();

  // 入力が空かどうかをチェック
    if (input_str === '') {
        throw new Error('入力してください');
    }

  // 入力値が数値かどうかを検証
    if (isNaN(input_str) || !/^-?\d+(\.\d+)?$/.test(input_str)) {
        throw new Error('入力値が不正です。数値を入力してください');
    }

  // 文字列を数値に変換
    const n = parseInt(input_str, 10);

  // グラム数を計算
  const grams = n * 13;

  // 結果を出力
    console.log(grams);
} catch (e) {
  // エラーメッセージを出力
    console.error(`エラー: ${e.message}`);
}