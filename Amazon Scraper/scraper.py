import requests
from bs4 import BeautifulSoup
import smtplib
import time

URL = 'https://www.amazon.in/Apple-MacBook-Pro-8th-Generation-Intel-Core-i5/dp/B07SDPTPC6/ref=sr_1_1?crid=2PHWED85NWOQS&dchild=1&keywords=apple+macbook+pro+16+inch&qid=1610694930&sprefix=apple+mac+book+pro%2Caps%2C534&sr=8-1'

headers = {"User-Agent" : 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36 Edg/87.0.664.75'}

def check_price():

    page = requests.get(URL , headers = headers)

    soup = BeautifulSoup(page.content,'html.parser')

    title = soup.find(id="productTitle").get_text()

    price = soup.find(id ="priceblock_ourprice").get_text()

    converted_price = price[2:10]

    final_price = int(converted_price.replace(',',""))

    print(final_price)

    print(title.strip())

    if(final_price > 150000):
        send_mail()


def send_mail():
    server = smtplib.SMTP('smtp.gmail.com' , 587)
    server.ehlo()
    server.starttls()
    server.ehlo()
    server.login('user@gmail.com' , 'wkvlpldwsxkrbbng')

    subject = "Price fell down!"

    body = "Check the product https://www.amazon.in/Apple-MacBook-Pro-8th-Generation-Intel-Core-i5/dp/B07SDPTPC6/ref=sr_1_1?crid=2PHWED85NWOQS&dchild=1&keywords=apple+macbook+pro+16+inch&qid=1610694930&sprefix=apple+mac+book+pro%2Caps%2C534&sr=8-1"

    msg = f"Subject : {subject}\n\n{body}"

    server.sendmail('user7@gmail.com' , 'user@gmail.com' , msg)

    print("HEY EMAIL HAS BEEN SENT!")

    server.quit()

check_price()
