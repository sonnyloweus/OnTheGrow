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

counter = 0

#Public Competition Sort

mycursor.execute('SELECT Location from members where username = "{tab}"'.format(tab=username))
city = mycursor.fetchall()[0][0].lower()
mycursor.execute('SELECT username from {tab} ORDER BY points'.format(tab=city))
stringappend = ""
stringappend = stringappend+city+":"
for ordered_user in mycursor.fetchall() and counter<5:
  counter+=1
  stringappend = stringappend+ordered_user[0]+","
print(stringappend[:-1])
mycursor.close()
mydb.commit()