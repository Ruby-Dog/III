# 製作一副牌  洗牌  抽出第一張牌
all = []
for c in range(4):
    for n in range(13):
        card = (c, n)
        all.append(card)
print(all)

# google search unicode 特殊內碼符號表
transcolor = ["\u2660", "\u2661", "\u2662", "\u2663"]
transnum = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"]
print(transcolor)
c = all[13]
print(c)
print(c[0], c[1])
print(transcolor[c[0]], transnum[c[1]])

import random
# 直接寫回(覆蓋)
random.shuffle(all)
print(all)
c = all[0]
print(transcolor[c[0]], transnum[c[1]])