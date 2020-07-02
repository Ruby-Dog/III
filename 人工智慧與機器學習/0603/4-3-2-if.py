import random
my = int(input("請出拳 [0]剪刀 [1]石頭 [2]布"))

# 引述random.py執行檔 [.]的
pc = random.randint(0, 2)

trans = ["剪刀", "石頭", "布" ]
print("我出:", trans[my])
print("電腦出:", trans[pc])

if my == pc:
    print("平手")
elif my == (pc + 1) % 3:
    print("我贏")
else:
    print("我輸")