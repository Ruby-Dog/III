# 練習：剪刀石頭布，誰先贏3次就跳出
import random
mywin = 0
pcwin = 0
while True:
    my = int(input("請出拳 [0]剪刀 [1]石頭 [2]布"))
    pc = random.randint(0, 2)
    trans = ["剪刀", "石頭", "布" ]
    print("我出:", trans[my])
    print("電腦出:", trans[pc])
    if my == pc:
        print("平手")
    elif my == (pc + 1) % 3:
        print("我贏")
        mywin = mywin + 1
        if mywin == 3:
            print("我贏3次, 電腦贏", pcwin, "次")
            break
    else:
        print("我輸")
        pcwin = pcwin + 1
        if pcwin == 3:
            print("電腦贏3次, 我贏", mywin, "次")
            break