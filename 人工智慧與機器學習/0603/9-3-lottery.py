# 對獎-樂透彩
import random
lottery = set()
while len(lottery) < 7:
    lottery.add(random.randint(1,48))
print("我買的樂透彩卷為: ", lottery)

prize = set()
while len(prize) < 7:
    prize.add(random.randint(1,48))
print("開獎號碼為: ", prize)

win = 0
for n in lottery:
    if n in prize:
        print(n, "中了")
        win = win + 1
print("總共中", win, "個號碼")