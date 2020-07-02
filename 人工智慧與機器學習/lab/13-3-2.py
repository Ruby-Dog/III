from urllib.request import urlopen
from urllib.error import HTTPError
from bs4 import BeautifulSoup

page = 55
while True:
    url = "https://tabelog.com/tw/tokyo/rstLst/" + str(page) +"/?SrtT=rt"

    try:
        response = urlopen(url)
    except HTTPError:
        print("最後一頁")
        break

    print("正在爬第" + str(page) + "幾頁的url", url)
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
    page = page + 1
