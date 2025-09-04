<?php
        try{
            //標準入力から貯金額をとってくる
            $savings_str = trim(fgets(STDIN));
            //空白が空かどうかを確認
            if(empty($savings_str)){
                throw new Exception('入力が空です。数値を入力してください。');
            }
            // 入力が数値かどうかをチェック
            if (!is_numeric($savings_str)) {
                throw new Exception('入力値が不正です。数値を入力してください。');
            }

            $savaings = (int)$savings_str;
            $fee = 120;

            //計算を実行し、手数料を引いた値を算出
            $final_savings = $savaings - $fee;
            echo $final_savings . PHP_EOL;

        }
        catch(Exception $e){
            echo "エラ:" . $e->getMessage() . PHP_EOL;
        }

?>