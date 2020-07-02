# 透過url 下載檔案存檔
from urllib.request import urlretrieve
url = "https://github.com/fxsjy/jieba/raw/master/extra_dict/dict.txt.big"
urlretrieve(url, "bigdict.txt")

f = open("f2.txt", "r", encoding="utf-8")
article = f.read()
f.close()
print("---原文章---\n", article)

import jieba
jieba.load_userdict("bigdict.txt")
jieba.load_userdict("mydict.txt")
words = jieba.cut(article)
res = " ".join(words)
print("---分詞結果---\n", res)

import jieba.analyse
keys = jieba.analyse.extract_tags(article, 5)
print("---關鍵詞---\n", keys)

from jieba import analyse
keys = analyse.extract_tags(article, 5)
print("---關鍵詞---\n", keys)

from jieba.analyse import extract_tags
keys = extract_tags(article, 5)
print("---關鍵詞---\n", keys)


