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
found = False
chosen_column = None
mycursor = mydb.cursor()

mycursor.execute('SELECT username from currentUser')

username = mycursor.fetchall()[0][0]

#Competition1/Competition2/Competition3

start = None

competition1 = (mycursor.execute('SELECT competition1 FROM members WHERE username = {tab}'.format(tab = username)))[0]
print(competition1)
for i in range(0, len(competition1), 1):
  if competition1[i] == ":":
    start = i+1
    break
users = []
competition1 = competition1[start:]
for j in competition.split(","):
  users.append(j)
user_points = {}
for user in users:
    points = int(mycursor.execute('SELECT points FROM members WHERE username = "\"" + {tab} + "\""'.format(tab = user)))[0]
    user_points[user]=points
user_points = dict(sorted(user_points.items(), key=operator.itemgetter(1),reverse=True))
response = ""
for item in user_points:
    response = response+item+","
print(response[:-1])