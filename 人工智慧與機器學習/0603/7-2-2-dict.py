f = open("f1.txt", "r", encoding="utf-8")
article = f.read()
f.close()

output = {}
for c in article:
    if not c in output:
        output[c] = 1  #加入dictionary
    else:
        output[c] = output[c] + 1  #修改值
print("數完的結果是:", output)
print("的出現次數為:", output["的"])
