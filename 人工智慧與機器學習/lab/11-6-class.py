import random
class PassMachine:
    def __init__(self, l, h):
        self.low = l
        self.heigh = h
        self.ans = random.randint(l, h)
    def guess(self, g):
        if g == self.ans:
            return True
        elif g > self.ans:
            self.heigh = g
            return False
        else:
            self.low = g
            return False

p1 = PassMachine(1, 100)
while True:
    c = int(input("請輸入" + str(p1.low) + "-" + str(p1.heigh) + "間的數字"))
    if p1.guess(c) == True:
        print("猜對了")
        break




