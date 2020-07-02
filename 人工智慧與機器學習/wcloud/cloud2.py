from PIL import Image
import numpy as np
import matplotlib.pyplot as plt
import jieba
from wordcloud import WordCloud

f = open("./a.txt", "r", encoding = "utf-8")
article = f.read()
f.close()

image_path = "./twitter.png"

mask = np.array(Image.open(image_path))
stopwords = {'的', '了', '和'}

wc = WordCloud(font_path="NotoSansTC-Black.otf", background_color="white",
               max_words=2000, mask=mask, stopwords=stopwords, contour_width=3, contour_color='blue')

article = " ".join(jieba.cut(article))
wc.generate(article)

wc.to_file("wordcloud.png")

# interpolation 是指邊緣稍微模糊化  axis off 不需要有x 軸y 軸的文字
plt.imshow(wc, interpolation='bilinear')
plt.axis("off")
plt.show()