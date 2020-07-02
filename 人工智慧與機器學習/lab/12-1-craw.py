# 爬doodles圖片
from urllib.request import urlopen
import json
url = "https://www.google.com/doodles/json/2018/12?hl=zh_TW"
response = urlopen(url)

doodles = json.load(response)
print(doodles)