score = float(input("請輸入成績:"))
if score >= 60:
    print("PASS")
else:
    print("FAIL")

if  score > 90:
    print("A")
elif score > 80:
    print("B")
elif score > 70:
    print("C")
else:
    print("D")

print("結束")