# planning-gh-issue

## Usage

```
/planning-gh-issue <issue-number>
```

## Description
`gh` コマンドを使用して、GitHub Issueの内容を取得して、修正計画を立てるためのコマンド


## Workflow

### 1. issueの内容を取得する

```
gh issue view <issue-number> --comments
```

### 2. プランモードに切り替えて修正計画を立てる

`EnterPlanMode` ツールを使用してプランモードに切り替える。
プランモードで、取得したissueの内容を分析して修正計画を立てる。

### 3. 修正計画を出力する

`doc/plan/<issue-number>_{修正計画のサマリしたタイトル}.md` に修正計画を出力する。

### 4. 修正に取り組むかアクションを確認する。

計画を実行する場合は、セッションの内容をクリアして実装を開始する。
計画を更につめたい場合は、セッションの内容をクリアせずに、計画をブラッシュアップする。

