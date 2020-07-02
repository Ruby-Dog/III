ns = {"陳", "林", "陳"}
print(ns, len(ns))

b = ns.add("王")
print(ns, b)

ns.discard("林")
print(ns)

ns.discard("黃")
print(ns)

print("================")

# union時不會覆蓋 有回傳
b = ns.union("李", "宋")
print(ns, b)

ns = ns.union("李", "宋")
print(ns)