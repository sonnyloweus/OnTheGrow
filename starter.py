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

cities = ['san_jose', 'palo_alto', 'cupertino', 'san_francisco', 'fremont']
users = []
competitions_added = []
competition_users = []
competition_location = {}

mycursor.execute("SELECT username FROM members")
for username in mycursor.fetchall():
  users.append(username[0].lower().replace(" ", "_"))

mycursor.execute('CREATE TABLE competitions(competition, city, type)')

for city in cities:
  mycursor.execute('INSERT INTO competitions({tab}, {tab}, "public")'.format(tab=city))