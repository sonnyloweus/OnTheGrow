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


mycursor.execute('SELECT competition1 from members where username= "{tab2}" '.format(tab2=username))
competition_1 = mycursor.fetchall()
mycursor.execute('SELECT competition2 from members where username= "{tab}" '.format(tab=username))
competition_2 = mycursor.fetchall()
mycursor.execute('SELECT competition3 from members where username= "{tab3} " '.format(tab3=username))
competition_3 = mycursor.fetchall()

def listToString(s, str):  
    for ele in s:  
        str += ele   
    return str

competition1 = listToString(competition_1[0], "")
competition2 = listToString(competition_2[0], "")
competition3 = listToString(competition_3[0], "")

competition_list = [competition1, competition2, competition3]
for item in range(0, len(competition_list), 1):
  if competition_list[item]=="":
    found = True
    chosen_column = "competition" + str((item+1))
    break
  else:
    continue
if found==True:
  #print('SELECT newSubmition from members WHERE username= "\"" + {tab} + "\"" '.format(tab=username))
  mycursor.execute('SELECT newSubmition from members WHERE username="{tab}"'.format(tab=username))
  new_entry = mycursor.fetchall()[0][0]
  statement = 'UPDATE members SET {tab} = "{tab2}"  where username =  "{tab3}"   '.format(tab = chosen_column, tab2 = new_entry, tab3 = username)
  mycursor.execute(statement)

print(found)
print(chosen_column)
mycursor.close()
mydb.commit()