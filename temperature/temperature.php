<?php
    //標準入入力からの読み込みと改行をトリム
    $t = trim(fgets(STDIN));
    //取得した文字列を整数に整える
    $t = intval($t);

    //気温が30度以上か判定
    if($t >= 30){
        echo "DANGER\n";
    }else{
        echo $t ."\n";
    }

?>