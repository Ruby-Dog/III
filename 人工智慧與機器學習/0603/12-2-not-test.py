from urllib.request import urlopen
import json
url = "https://www.google.com/doodles/json/2018/12?hl=zh_TW"
response = urlopen(url)

doodles = json.load(response)
for d in doodles:
    url = "https:" + d["url"]
    print(d["title"], url)

    response = urlopen(url)
    img = response.read()

    fname = "doodles/" + url.split("/")[-1]

    f = open(fname, "wb")
    f.write(img)
    f.close()




