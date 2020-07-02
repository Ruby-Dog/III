#終極密碼
import random
low = 1
high = 100
ans = random.randint(low, high)
while True:
    i = int(input("請輸入[" + str(low) + "-" + str(high) + "範圍中的數]: " ))
    if i == ans:
        print("你猜對了")
        break
    elif i < ans:
        print("你猜小了")
        low = i
    elif i > ans:
        print("你猜大了")
        high = i





