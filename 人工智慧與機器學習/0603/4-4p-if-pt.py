# 練習：棒打老虎，雞吃蟲，讓我輸入 [0]棒 [1]老虎 [2]雞 [3]蟲，秀出我出、電腦出、誰贏
import random
trans = ["棒", "老虎", "雞", "蟲"]
my = int(input("請出手 [0]棒 [1]老虎 [2]雞 [3]蟲: "))
print("我出:", trans[my])

pc = random.randint(0, 3)
print("電腦出:", trans[pc])


if my == (pc + 1) % 4:
    print("我輸")
elif pc == (my + 1) %4:
    print("我贏")
else:
    print("平手")