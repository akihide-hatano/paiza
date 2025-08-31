// 標準入力からデータを読み込み、文字列として取得
const input = require('fs').readFileSync('/dev/stdin', 'utf8');

// 取得した文字列の末尾の改行を削除し、数値に変換
const t = Number(input.trim());

//気温が30度以上であるか
if( t >= 30){
    console.log("DANGER");
}else{
    console.log(t);
}