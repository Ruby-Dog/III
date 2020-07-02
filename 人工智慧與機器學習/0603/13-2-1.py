from urllib.request import urlopen
from bs4 import BeautifulSoup

url = "https://tabelog.com/tw/tokyo/rstLst/?SrtT=rt"
print("處理url", url)
response = urlopen(url)
html = BeautifulSoup(response)
# print(html)

res = html.find_all("li", class_="list-rst")
for r in res:
    ja = r.find("small", class_="list-rst__name-ja")
    en = r.find("a", class_="list-rst__name-main")
    ratings = r.find_all("b", class_="c-rating__val")
    # print(en)
    print(ratings[0].text,
          ja.text, en.text, en["href"])

