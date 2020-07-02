a = "good good"
b = a.replace("good", "bad")
print(a, b)
print("=============")
# search『python list method』點list.append
nl = ["john", "mary", "coco", "john"]
new = nl.append("david")
print(nl)
print(new)
print("=============")

del nl[1]
print(nl)
nl.remove("john")
print(nl)