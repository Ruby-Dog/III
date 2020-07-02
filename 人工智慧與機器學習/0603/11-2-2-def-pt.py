def calbmi(height, weight):
    return weight / (height / 100) ** 2

h = float(input("請輸入身高:"))
w = float(input("請輸入體重:"))
print(calbmi(h,w))

