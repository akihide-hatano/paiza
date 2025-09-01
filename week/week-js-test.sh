# テストケースを配列で定義
test_cases=(
    "2025-09-01 月曜日"
    "2025-09-07 日曜日"
    "2025-01-01 水曜日"
    "invalid-date 無効な日付形式です。"
)

echo "--- JavaScriptテスト開始 ---"

for case in "${test_cases[@]}"; do
    input=$(echo "$case" | awk '{print $1}')
    expected_output=$(echo "$case" | awk '{$1=""; print $0}' | xargs)

    # Node.jsスクリプトを実行
    actual_output=$(echo "$input" | node week.js | tr -d '\n')
    
    if [ "$actual_output" == "$expected_output" ]; then
        echo "✅ OK: 入力 '$input' -> 期待: '$expected_output' / 実際: '$actual_output'"
    else
        echo "❌ NG: 入力 '$input' -> 期待: '$expected_output' / 実際: '$actual_output'"
    fi
done

echo "--- JavaScriptテスト終了 ---"