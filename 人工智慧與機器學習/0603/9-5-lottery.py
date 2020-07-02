#  def 函式定義  樂透彩
import random

def new_ticket():
    t = set()
    while len(t) < 7:
        t.add(random.randint(1, 48))
    return t

prize = new_ticket()
print("開獎號碼為: ", prize)

count = 0
while True:
    lottery = new_ticket()
    print("我買的樂透彩卷為: ", lottery)
    count = count + 1

    win = 0
    for n in lottery:
        if n in prize:
            print(n, "中了")
            win = win + 1
    print("總共中", win, "個號碼")

    if win >= 4:
        print("總共買", count, "張樂透")
        break