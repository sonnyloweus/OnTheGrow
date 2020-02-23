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

print("chickenBut\";")

# '''mycursor.execute("SELECT Location FROM members")
# for select_city in mycursor.fetchall():
#     if select_city[0].lower().replace(" ", "_") not in cities:
#         cities.append(select_city[0].lower().replace(" ", "_"))
#         table_name = select_city[0].lower().replace(" ", "_")
#         print('CREATE TABLE {tab} (competition varchar(255), type varchar(255))'.format(tab=table_name))
#         #mycursor.execute('CREATE TABLE {tab} (competition varchar(255), type varchar(255))'.format(tab=table_name))'''
# '''#CREATES USER CITY COMPETITION TABLES BASED ON LOCATION AND WHETHER THEY ARE ALREADY IN IT
# for user in users:
#   user_city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user))[0].lower().replace(" ", "_")
#   mycursor.execute('SELECT user from {tab}'.format(tab = user_city))
#   for any_username in mycursor.fetchall():
#     competition_users.append(any_username[0])
#   if user not in competition_users:
#     mycursor.execute('INSERT INTO {tab} ({tab2}, {tab3}, 0)'.format(tab = user_city, tab2 = user_city, tab3 = user))
#   competition_users = []'''

# mycursor = mydb.cursor()

# cities = ['san_jose', 'palo_alto', 'cupertino', 'san_francisco', 'fremont']
# users = []
# competitions_added = []
# competition_users = []
# competition_location = {}

# #APPENDS ALL USERNAMES IN DATABASE TO USERNAME LIST
# mycursor.execute("SELECT username FROM members")
# for username in mycursor.fetchall():
#   users.append(username[0].lower().replace(" ", "_"))

# #CREATES COMPETITIONS TABLE
# mycursor.execute('CREATE TABLE competitions(competition, city, type)')

# #CREATES ALL CITY COMPETITIONS - NEEDS TO BE RUN ONLY ONCE!!!!
# for city in cities:
#   mycursor.execute('INSERT INTO competitions({tab}, {tab}, "public")'.format(tab=city))

# #USERS CREATING COMPETITIONS - PRIVATE COMPETITIONS

# ###buttonclicked = yes
# ###competition_name=input
# ### user who created = user
# ###competition_name = competition input

# if buttonclicked:
#   city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user[0].lower().replace(" ", "_")))[0].lower().replace(" ", "_")
#   mycursor.execute('INSERT INTO competitions ({tab}, {tab2}, "private")'.format(tab = competition_name[0].lower().replace(" ", "_"), tab2 = city))
#   competition_location[competition_name[0].lower().replace(" ", "_")] = city

# #CREATES TABLE FOR EACH COMPETITION
# for competition in competitions:
#     mycursor.execute('SELECT competition from competitions')
#     for select_competition in mycursor.fetchall():
#         if select_competition[0].lower.replace(" ", "_") not in competitions_added:
#             competitions_added.append(select_competition[0].lower.replace(" ", "_"))
#             mycursor.execute('CREATE TABLE {tab} (city varchar(255), user varchar(255), points varchar(255))'.format(tab=select_competition[0].lower.replace(" ", "_")))

# #ACCEPT PRIVATE COMPETITION REQUEST
# ###competition = competition
# ###username = username

# mycursor.execute("INSERT INTO {tab} ({tab2}, {tab3}, 0)".format(tab = competition.lower().replace(" ", "_"), tab2 = competition_location[competition], tab3 = username.lower().replace(" ", "_")))

# #LEAVE COMPETITION
# ###competition = competition name
# ###username = username

# mycursor.execute("DELETE FROM {tab} where user = {tab2}".format(tab=competition, tab2=username))