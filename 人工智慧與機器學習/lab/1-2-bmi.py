#  BMI計算:  BMI = 體重 / 身高(公尺) ^2   正常為18.5≦BMI＜24
height = float(input("請輸入身高"))
weight = float(input("請輸入體重"))
bmi = weight / (height / 100) ** 2
print("身高為", height)
print("體重為", weight)
print("BMI為", bmi)

r = round(bmi, 2)
print("BMI四捨五入為", r)