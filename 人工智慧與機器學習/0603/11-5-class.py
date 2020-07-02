class Person:
    def __init__(self, n, h, w):
        self.name = n
        self.height = h
        self.weight = w

    def cbmi(self):
        return self.weight / (self.height / 100) ** 2

p1 = Person("john", 175, 70)
print(p1.name, p1.cbmi())

p2 = Person("mary", 170, 70)
print(p2.name, p2.cbmi())
