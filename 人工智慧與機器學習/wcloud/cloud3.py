from PIL import Image
import numpy as np
import matplotlib.pyplot as plt
import jieba
from wordcloud import WordCloud, ImageColorGenerator

f = open("./a.txt", "r", encoding = "utf-8")
article = f.read()
f.close()

image_path = "./tw.jpg"

mask = np.array(Image.open(image_path))
colors = ImageColorGenerator(mask)

stopwords = {'的', '了', '和'}

wc = WordCloud(font_path="NotoSansTC-Black.otf", background_color="white",
               max_words=5000, mask=mask, stopwords=stopwords)

article = " ".join(jieba.cut(article))
wc.generate(article)
wc.to_file("wordcloud.png")


# interpolation 是指邊緣稍微模糊化  axis off 不需要有x 軸y 軸的文字
plt.imshow(wc, interpolation='bilinear')
plt.axis("off")
plt.show()

wc.recolor(color_func = colors)
result = Image.blend(wc.to_image().convert("RGB"),
                     Image.open(image_path).convert("RGB"), alpha = 0.3)
result.save("blend.png")

plt.imshow(result, interpolation='bilinear')
plt.axis("off")
plt.show()

# for jupyter nb 讀出圖檔
#from IPython.display import Image
#Image(filename="wordcloud.png")
#Image(filename="blend.png")