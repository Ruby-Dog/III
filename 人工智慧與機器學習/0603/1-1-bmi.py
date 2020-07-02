#  BMI計算:  BMI = 體重 / 身高(公尺) ^2   正常為18.5≦BMI＜24
height = 175
weight = 70
bmi = weight / (height / 100) ** 2
print("身高為", height)
print("體重為", weight)
print("BMI為", bmi)

r = round(bmi, 2)
print(bmi, "BMI四捨五入為", r)