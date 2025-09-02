<?php
    // 標準入力から1行読み込み
    $s = trim(fgets(STDIN));

try{
    //入力値が空白であるか確認
    if( $s === ""){
    //空白であれば例外を投げる
    throw new Exception("空白です。");
    }
    //入力値が数値であるか確認
    if( !is_numeric($s)){
    //数値でなければ例外を投げる
    throw new Exception("数値を入力してください");
    }
    //文字列を数値に変換
    $n = intval($s);

    //問題の条件を満たしているか確認
    if( $n < 0  || $n > 10000){
        throw new Exception("0から10,000の範囲で入力してください。");
    }
    //3倍して入力
    echo $n *3;
}catch(Exception $e){
    //例外が発生した場合、エラーメッセージを表示
    echo "エラー:" .$e->getMessage();
}
?>