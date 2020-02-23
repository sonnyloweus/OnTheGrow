import mysql.connector
import json
import sys
import os
import operator
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

username_var = mycursor.fetchall()[0][0]
counter = 0

#Public Competition Sort

mycursor.execute('SELECT location from members where username = "{tab}"'.format(tab=username_var))
city = mycursor.fetchall()[0][0].lower()
users_points = {}
mycursor.execute('SELECT username from {tab}'.format(tab=city))
users = mycursor.fetchall()
for user in users:
   mycursor.execute('SELECT points from members where username = "{tab}"'.format(tab=user[0]))
   points = mycursor.fetchall()
   users_points[user] = points
users_points = dict(sorted(users_points.items(), key=operator.itemgetter(1),reverse=True))
ordered_user_list = []
for item in users_points:
   ordered_user_list.append(item)
stringappend = ""
stringappend = stringappend+city+":"
for ordered_user in ordered_user_list:
  if counter<5:
    counter+=1
    stringappend = stringappend+ordered_user[0]+","
print(stringappend[:-1])
mycursor.close()
mydb.commit()
