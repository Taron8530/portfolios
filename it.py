import requests
from bs4 import BeautifulSoup
import pymysql
conn = pymysql.connect(host="localhost",user="root",password="kkyyjj246",db="userinfo",charset="utf8")
cur = conn.cursor()
titlelist = []
link = []
# rlrhks = []
# num = []
# date = []
# view = []
url = "http://www.koreaict.kr/bbs/board.php?tbl=ict_domestic"
webpage = requests.get(url)
webpage.raise_for_status()

soup = BeautifulSoup(webpage.content,"html.parser")
titles = soup.find_all("td",attrs={"class":"subject"})
link = soup.find_all("a",attrs={"class":"subject"})
# detail = soup.find_all("td",attrs={"class":"text-center"})
# for de in detail:
#     detailss = de.get_text().split("")
#     print(detailss[0])
    # num.append(detailss[0])
    # rlrhks.append(detailss[1])
    # date.append(detailss[2])
    # view.append(detailss[3])
commend = "delete from ict"
cur.execute(commend)
conn.commit()
for title in titles: #데베에 추가
    t = title.get_text()
    l = "http://www.koreaict.kr/"+title.find("a")["href"]
    sql = "insert into ict (title,link) values(%s, %s)"
    cur.execute(sql,(t,l))
    conn.commit()
# for i in range(len(titlelist)): 출력
#     print(titlelist[i])
#     print(link[i])

