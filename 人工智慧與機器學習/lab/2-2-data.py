x = "good good good"
y = x.replace("good", "bad")
print("舊名:", x)
print("新名:", y)
print("新名2:", x.replace("good", "bad"))
z = x.replace("good", "bad", 1)
print("只取代幾個:", z)

x = x.replace("good", "bad")
print("覆蓋x:", x)
###
print("轉成大寫", "good".upper())
print("轉成小寫", "BAD".lower())
###
a = "aaa \
bbb"
print(a)

b = "aaa\nbbb"
print(b)