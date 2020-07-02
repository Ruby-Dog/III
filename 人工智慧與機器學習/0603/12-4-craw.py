# 爬整年doodles 圖片, 每月分資料夾存放
from urllib.request import urlopen, urlretrieve
import json
import os

#  range(12) -> [0,1,2,3...,11]
for m in range(9, 12):
    url = "https://www.google.com/doodles/json/2018/" + str(m + 1) + "?hl=zh_TW"
    print("每月爬取的url:", url)
    response = urlopen(url)

    doodles = json.load(response)
    for d in doodles:
        url = "https:" + d["url"]
        print(d["title"], url)

        dirname = "doodles/" + str(m + 1) + "/"
        if not os.path.exists(dirname):
            os.mkdir(dirname)
        fname = dirname + url.split("/")[-1]
        urlretrieve(url, fname)


