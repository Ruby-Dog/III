import glob
import jieba
import jieba.analyse

jieba.load_userdict("bigdict.txt")

print(glob.glob("news/*.txt"))

for t in glob.glob("news/*"):
    f = open(t, "r", encoding="utf-8")
    article = f.read()
    f.close()

    keys = jieba.analyse.extract_tags(article, 6)
    print("---檔名---\n", t)
    print("---關鍵詞---\n", keys)
