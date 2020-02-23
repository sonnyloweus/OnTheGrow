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


city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user[0].lower().replace(" ", "_")))[0].lower().replace(" ", "_")
mycursor.execute('INSERT INTO competitions ({tab}, {tab2}, "private")'.format(tab = competition_name[0].lower().replace(" ", "_"), tab2 = city))