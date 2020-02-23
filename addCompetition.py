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
username = mycursor.fetchall()

print(username)

mycursor.execute('SELECT competition1 from members where username={tab}'.format(tab=username))
competition1 = mycursor.fetchall()
mycursor.execute('SELECT competition2 from members where username={tab}'.format(tab=username))
competition2 = mycursor.fetchall()
mycursor.execute('SELECT competition3 from members where username={tab}'.format(tab=username))
competition3 = mycursor.fetchall()
print(competition1)
print(competition2)
print(competition3)

competition_list = [competition1_value, competition2_value, competition3_value]
for item in competition_list:
  if item=="":
    found = True
    chosen_column = item
    break
  else:
    continue
if found==True:
  mycursor.execute('INSERT INTO ')