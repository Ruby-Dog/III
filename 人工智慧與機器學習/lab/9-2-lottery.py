# 買一張 7 個號碼的樂透
import random
lottery = set()

while len(lottery) < 7:
    lottery.add(random.randint(1,48))
print("我買的樂透彩卷為: ", lottery)

