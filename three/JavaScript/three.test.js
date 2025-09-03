
// テスト対象の関数を three.js からインポート
const { calculateApplePrice } = require('./three');

// describe() でテストグループを定義
describe('calculateApplePrice', () => {

  // test.each() で複数の有効なテストデータをまとめてテスト
  test.each([
    ['3000', '9000'],
    ['1100', '3300'],
    ['0', '0'],
    ['10000', '30000'],
  ])('有効な入力値 "%s" に対して正しい結果を返す', (input, expected) => {
    // calculateApplePrice() を実行し、期待される値と一致するか検証
    expect(calculateApplePrice(input)).toBe(expected);
  });

  // test.each() で複数の無効なテストデータをまとめてテスト
  test.each([
    ['', 'エラー:空白です。数値を入力してください。'],
    ['abc', 'エラー:数値を入力してください。'],
    ['-10', 'エラー:0から10,000の範囲で入力してください。'],
    ['15000', 'エラー:0から10,000の範囲で入力してください。'],
  ])('無効な入力値 "%s" に対してエラーメッセージを返す', (input, expectedError) => {
    expect(calculateApplePrice(input)).toBe(expectedError);
  });
});