# word count
article = """昆凌與老公周杰倫帶著孩子，返回澳洲老家度假，不時會在IG上分享美照，而這次她分了自己頂著素顏逛夜市的照片，獲得網友的好評。\

昆凌5日在IG上分享逛夜市的照片，只見素顏的她穿著一件無袖的連身洋裝，開心的在夜市裡拍照，看起來宛如清純的少女一般，而大家也紛紛推測照片應該是周杰倫拍的，這幾張老公視角的照片，被網友們大讚「攝影師很會拍喔」，網友們也對素顏的昆凌大讚「太美了」、「少女感100%」、「素顏完全就是個女孩子，哪裡像個媽媽了」。"""

print("新聞:", article)

#for c in article:
#    print(c)

output = {}
for c in article:
    if not c in output:
        # 新增一筆 key value到output dictionary
        output[c] = 1
    else:
        output[c] = output[c] + 1
print("數完的結果是:", output)
print("的出現幾次:", output["的"])
