# 費氏數列
a = 0
b = 1
count = 0
while count < 10:
    if count == 0:
        c = 0
    elif count == 1:
        c = 1
    else:
        c = a + b
        a = b
        b = c
    print("第", count + 1, "次:", c)
    count = count + 1

