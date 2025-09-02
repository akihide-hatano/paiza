'use strict';

const { error } = require('console');
// 標準入力から1行読み込むためのモジュール
const fs = require('fs');

// 同期的に標準入力からデータを読み込み、文字列に変換
const input = fs.readFileSync('/dev/stdin', 'utf8');

try{
    const input_str = input.trim();
    //空白かどうかを判定
    if(input_str === "" ){
        throw new Error('入力してください');
    }
  // 入力値が数値かどうかを検証
  if (isNaN(input_str) || !/^-?\d+(\.\d+)?$/.test(input_str)) {
    throw new Error('入力値が不正です。数値を入力してください');
    }

    //数値を整数にする
    const n = parseInt(input_str,10);
    //グラム数を計算
    const gram = n * 13;
    //結果を出力
    console.log(gram);

    }catch(e){
        console.error(`エラー:${e.message}`);
}