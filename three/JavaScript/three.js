/**
 * Calculates the total price of three apples, with input validation.
 * @param {string} inputString - The price of a single apple as a string.
 * @returns {string} The total price or an error message.
 */

function calculateApplePrice(inputString){

    const s = inputString.trim();

    try{
        if( s === ""){
            throw new Error("空白です。数値を入力してください。");
        }
        if( isNaN(s)){
            throw new Error("数値を入力してください。");
        }

        const n = parseInt(s,10);
        if( n < 0 || n > 10000 ){
            throw new Error("0から10,000の範囲で入力してください。");
        }

        const result = n * 3;
        return String(result);
    }

    catch(error){
        return `エラー:${error.message}`;
    }
}

// Node.js環境でこの関数をエクスポートする
module.exports = { calculateApplePrice };