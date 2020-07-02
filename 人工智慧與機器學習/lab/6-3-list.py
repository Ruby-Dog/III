# 3 doors question
import random
doors = ["羊", "羊"]
a = random.randint(0, 2)
doors.insert(a, "車")
print(doors)

# 若一定要換 ,刪除我的選擇
my = random.randint(0, 2)
del doors[my]
print(doors)

# 刪除主持人的羊
doors.remove("羊")
print(doors)

if doors == ["車"]:
    print("贏")
else:
    print("輸")