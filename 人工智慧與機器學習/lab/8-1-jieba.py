f = open("f2.txt", "r", encoding="utf-8")
article = f.read()
f.close()
print("---原文章---\n", article)

import jieba
words = jieba.cut(article)

#print("/".join(["2019", "1", "1"]))
#print(" ".join(["2019", "1", "1"]))

res = " ".join(words)
print("---分詞結果---\n", res)

import jieba.analyse
keys = jieba.analyse.extract_tags(article, 5)
print("---關鍵詞---\n", keys)

