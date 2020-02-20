import mysql.connector
import json
import sys
import os

mydb = mysql.connector.connect(
  host="localhost",
  user="sonny",
  passwd="Igacgecko@2k19",
  database="learn"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM members")

myresult = mycursor.fetchall()

for row in myresult:
  print(row)

