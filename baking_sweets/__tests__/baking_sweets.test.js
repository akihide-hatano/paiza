const { execSync } = require('child_process');

describe('お菓子作り', () => {
  it('大さじ3杯が39グラムになること', () => {
    const input = '3';
    // 修正: テスト対象のファイル名を baking_sweets.js に変更
    const output = execSync(`echo ${input} | node baking_sweets.js`).toString();
    expect(output).toBe('39\n');
  });

  it('文字列を入力した場合にエラーとなること', () => {
    const input = 'hogehoge';
    try {
      // 修正: テスト対象のファイル名を baking_sweets.js に変更
      execSync(`echo ${input} | node baking_sweets.js`);
    } catch (error) {
      expect(error.stderr.toString()).toBe('エラー: 入力値が不正です。数値を入力してください\n');
    }
  });

  it('空白を入力した場合にエラーとなること', () => {
    const input = '';
    try {
      // 修正: テスト対象のファイル名を baking_sweets.js に変更
      execSync(`echo ${input} | node baking_sweets.js`);
    } catch (error) {
      expect(error.stderr.toString()).toBe('エラー: 入力してください\n');
    }
  });
});