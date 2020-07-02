# 爬 12月doodles圖片
from urllib.request import urlopen, urlretrieve
import json
url = "https://www.google.com/doodles/json/2018/12?hl=zh_TW"
response = urlopen(url)

doodles = json.load(response)
for d in doodles:
    url = "https:" + d["url"]
    print(d["title"], url)

    # 請先建立doodles資料夾
    # print(url.split("/")[-1])

    fname = "doodles/" + url.split("/")[-1]
    urlretrieve(url, fname)




