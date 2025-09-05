// js/__tests__/eve.test.js
const { eveDay } = require("../eve");

describe("eveDay", () => {
  test("正しい入力で1日前が返る", () => {
    expect(eveDay("25")).toBe("24");
    expect(eveDay(10)).toBe("9");
  });

  test("数値でない入力はエラー", () => {
    expect(eveDay("abc")).toBe("エラー: 入力値が不正です。数値を入力してください。");
    expect(eveDay("")).toBe("エラー: 空文字ではなく、数値を入力してください。");
  });

  test("範囲外(1,32)はエラー", () => {
    expect(eveDay("1")).toBe("エラー: 入力値は2から31の範囲外です。");
    expect(eveDay("32")).toBe("エラー: 入力値は2から31の範囲外です。");
  });
});
