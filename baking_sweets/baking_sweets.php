<?php
    try{

        //標準入力を確定
        $input_str = trim(fgets(STDIN));
        //入力されてた値のvalidation
        if(!is_numeric($input_str))
        {
            throw new Exception('入力値が不正です。数値を入力してください');
        }
        //文字列を数値に変更
        $n = (int)$input_str;
        $gram = $n * 13;
        echo $gram . PHP_EOL;
    }
    catch(Exception $e){
        echo "エラー" .$e->getMessage() . PHP_EOL;;
    }
?>