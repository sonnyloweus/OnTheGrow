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

#APPENDS ALL USERNAMES IN DATABASE TO USERNAME LIST
mycursor.execute("SELECT username FROM members")
for username in mycursor.fetchall():
  users.append(username[0].lower().replace(" ", "_"))

#CREATES COMPETITIONS TABLE
mycursor.execute('CREATE TABLE competitions(competition, city, )')

#CREATES ALL CITY COMPETITIONS - NEEDS TO BE RUN ONLY ONCE!!!!
for city in cities:
  mycursor.execute('INSERT INTO competitions({tab}, {tab}, "public")'.format(tab=city))

USERS CREATING COMPETITIONS - PRIVATE COMPETITIONS

buttonclicked = yes
competition_name=input
user who created = user
competition_name = competition input

if buttonclicked:
  city = mycursor.execute("SELECT Location FROM members where username = {tab}".format(tab = user[0].lower().replace(" ", "_")))[0].lower().replace(" ", "_")
  mycursor.execute('INSERT INTO competitions ({tab}, {tab2}, "private")'.format(tab = competition_name[0].lower().replace(" ", "_"), tab2 = city))
  competition_location[competition_name[0].lower().replace(" ", "_")] = city

#CREATES TABLE FOR EACH COMPETITION
for competition in competitions:
    mycursor.execute('SELECT competition from competitions')
    for select_competition in mycursor.fetchall():
        if select_competition[0].lower.replace(" ", "_") not in competitions_added:
            competitions_added.append(select_competition[0].lower.replace(" ", "_"))
            mycursor.execute('CREATE TABLE {tab} (city varchar(255), user varchar(255), points varchar(255))'.format(tab=select_competition[0].lower.replace(" ", "_")))

#ACCEPT PRIVATE COMPETITION REQUEST
###competition = competition
###username = username

mycursor.execute("INSERT INTO {tab} ({tab2}, {tab3}, 0)".format(tab = competition.lower().replace(" ", "_"), tab2 = competition_location[competition], tab3 = username.lower().replace(" ", "_")))

#LEAVE COMPETITION
###competition = competition name
###username = username

mycursor.execute("DELETE FROM {tab} where user = {tab2}".format(tab=competition, tab2=username))

ORDER LEADERBOARDS

##competition = competition to be ordered
mycursor.execute('SELECT * from {tab} order by points'.format(tab=competition))
for order in mycursor.fethcall():
  print(order)