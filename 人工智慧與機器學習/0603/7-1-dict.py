#  dictionary
person = {"name":"pinju", "hight":175, "weight":70}
print(person)
print(person["hight"])

#不存在的key為新增
person["gender"] = "M"
print(person)

# 已存在的key為修改 value
person["weight"] = 69
print(person)

# 設回去
person["weight"] = person["weight"] + 5
print(person)

#刪除
del person["gender"]
print(person)

for key in person:
    print("-", key, person[key])