# clrhtokyo9
CLR/H Tokyo #9で使ったあれこれです。

# XSSについて
いわゆる典型的なXSS脆弱性。
GETでname=なんとか　という文字列を渡しているので、
「なんとか」の部分に適当なJavaScriptの文字列を渡せばすべて実行されます。
最低限の対策として、まずはhtmlspecialcharsを使い、特別な意味を持つ文字列をすべてエスケープしています。

# SQLinjectionについて
これまた典型的なSQLインジェクション。
とりあえずバインドしとけ。