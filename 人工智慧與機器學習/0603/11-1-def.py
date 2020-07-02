# def 自訂函式
def add(n1, n2):
    return n1 + n2

print(add(3, 5))
print(add("hello", "python"))

# 不定義幾個參數
def add_multi(alist):
    result = 0
    for n in alist:
        result = result + n
    return result
print(add_multi([1, 2, 3, 4]))

# * 會自動加[]
def add_multi(*alist):
    result = 0
    for n in alist:
        result = result + n
    return result
print(add_multi(1, 2, 3, 4))
print("================")

def test1(kvargs):
    print(kvargs)
test1({"a":2, "b":3})

# **會自動加{}  要把: 換成 =
def test2(**kvargs):
    print(kvargs)
test2(a=2, b=3)

# 定義預設值
def add_adv(n1, n2, n3=1, n4=1):
    return (n1 + n2) * n3 / n4

print(add_adv(2, 3))
print(add_adv(2, 3, 2))
print(add_adv(2, 3, 2, 2))
print(add_adv(2, 3, n4 = 2))
