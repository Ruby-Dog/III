# 定義物件, 物件名稱通常會第一個字會大寫
class Person:
    name = None
    height = None
    weight = None

    # 定義物件的功能
    def cbmi(self):
        return self.weight / (self.height / 100) ** 2

p1 = Person()
p1.name = "john"
p1.height = 175
p1.weight = 70
print(p1.name, p1.cbmi())

p2 = Person()
p2.name = "mary"
p2.height = 170
p2.weight = 70
print(p2.name, p2.cbmi())
