#文字
x = "hello"
x = x + "python"
print(x)

# hellopython
print(x[0], x[-1], len(x), x[len(x) - 1])
# h n 11 n

# x[1:4] ,1-4的字元不包含4 -> 1,2,3
print(x[1:4], x[0:4], x[:4], x[1:])
# ell hell hell ellopython

# 後面的:2為跳躍幾個
print(x[:], x[::2], x[1::2])
# hellopython hloyhn elpto