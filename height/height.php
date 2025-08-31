<?php
    //標準入入力からの読み込みと改行をトリム
    $height_input = trim(fgets(STDIN));

    if(is_numeric($height_input)){
        //数字の場合整数へ変換し10を足す
        $height = intval($height_input);
        echo $height+10;
    }else{
        echo "数字で入力してください。\n";
    }

?>