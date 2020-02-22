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

print("hi")

# cities = []
# users = []
# competitions = []
# competition_users = []

# #CREATES CITY TABLE WITH COLUMNS COMPETITION AND TYPE(PUBLIC/PRIVATE)
# mycursor.execute("SELECT Location FROM members")
# for select_city in mycursor.fetchall():
#     if select_city[0].lower().replace(" ", "_") not in cities:
#         cities.append(select_city[0].lower().replace(" ", "_"))
#         table_name = select_city[0].lower().replace(" ", "_")
#         print('CREATE TABLE {tab} (competition varchar(255), type varchar(255))'.format(tab=table_name))
#         #mycursor.execute('CREATE TABLE {tab} (competition varchar(255), type varchar(255))'.format(tab=table_name))

# #INSERTS CITY COMPETITION INTO CITY TABLE WITH TYPE PUBLIC
# '''for item in cities:
#   mycursor.execute('INSERT INTO {tab} ({tab2}, "public")'.format(tab = item, tab2 = item))'''

# #APPENDS ALL USERNAMES IN DATABASE TO USERNAME LIST
# mycursor.execute("SELECT username FROM members")
# for username in mycursor.fetchall():
#   users.append(username[0].lower().replace(" ", "_"))

# #CREATES TABLE FOR EACH CITY COMPETITION
# for city in cities:
#     mycursor.execute('SELECT competition from {tab}'.format(tab=city))
#     for select_competition in mycursor.fetchall():
#         if select_competition[0].lower.replace(" ", "_") not in competitions:
#             competitions.append(select_competition[0].lower.replace(" ", "_"))
#             #mycursor.execute('CREATE TABLE {tab} (city varchar(255), user varchar(255), points varchar(255))'.format(tab=select_competition[0].lower.replace(" ", "_")))

# #ADDS USERS TO CITY COMPETITION TABLES BASED ON LOCATION AND WHETHER THEY ARE ALREADY IN IT
# for user in users:
#   user_city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user))[0].lower().replace(" ", "_")
#   mycursor.execute('SELECT user from {tab}'.format(tab = user_city))
#   for any_username in mycursor.fetchall():
#     competition_users.append(any_username[0])
#   if user not in competition_users:
#     mycursor.execute('INSERT INTO {tab} ({tab2}, {tab3}, 0)'.format(tab = user_city, tab2 = user_city, tab3 = user))
#   competition_users = []

#   #USERS CREATING COMPETITIONS - PRIVATE COMPETITIONS

#   ###buttonclicked = yes
#   ###competition_name=input
#   ### user who clicked = user
#   ###competition_name = competition input
# if buttonclicked:
#   city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user[0].lower().replace(" ", "_")))[0].lower().replace(" ", "_")
#   mycursor.execute('INSERT INTO {tab} ({tab2}, "private")'.format(tab = city, tab2 = competition_name[0].lower().replace(" ", "_")))
#   competitions.append(competition_name[0].lower().replace(" ", "_"))