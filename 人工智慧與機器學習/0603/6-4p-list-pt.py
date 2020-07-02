# 練習：三門問題，讓我輸入猜幾次，秀出總共贏幾次並幫我算出贏的機率為%?
import random
win = 0
total = int(input("請輸入猜幾次: "))
for n in range(0, total):
    doors = ["羊", "羊"]
    a = random.randint(0, 2)
    doors.insert(a, "車")
        # 若一定要換 ,刪除我的選擇
    my = random.randint(0, 2)
    del doors[my]
    # 刪除主持人的羊
    doors.remove("羊")
    if doors == ["車"]:
        win = win + 1
print("總共贏:", win, "次")
print("贏的機率是: ", win / total * 100, "%")