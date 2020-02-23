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


mycursor.execute('SELECT competition1 from members where username= "\"" + {tab2} + "\"" '.format(tab2=username))
competition_1 = mycursor.fetchall()
mycursor.execute('SELECT competition2 from members where username= "\"" + {tab} + "\"" '.format(tab=username))
competition_2 = mycursor.fetchall()
mycursor.execute('SELECT competition3 from members where username= "\"" + {tab3} + "\"" '.format(tab3=username))
competition_3 = mycursor.fetchall()

competition_list = [competition_1, competition_2, competition_3]
for item in competition_list:
  if item=="":
    found = True
    chosen_column = item.replace("_", "")
    break
  else:
    continue
if found==True:
  mycursor.execute('UPDATE members SET "\"" + {tab} + "\"" = "\"" + {tab2} + "\"" where username = "\"" + {tab3} + "\""'.format(tab = chosen_column, tab2 = username, tab3 = username))