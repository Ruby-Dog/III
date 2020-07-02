# list
nl = ["john", "mary", "coco", "john"]
print(nl)
print(nl[1])
print(nl[-1])
print(nl[1:3])
nl = nl + ["david", "mary"]
print(nl)

for n in nl:
    print("-", n)

#  range(0, 10) -> [0, 1, 2, 3...9]
for n in range(0, 10):
    print(n)

# 1加到10 使用 for in
sum = 0
for n in range(0, 10):
    sum = sum + (n + 1)
print(sum)

sum = 0
for n in range(10):
    sum = sum + (n + 1)
print(sum)