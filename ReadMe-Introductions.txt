*****---Welcome to Our Site - NSBM Community Portal----********


*****Introductions to Connect Database and visit the Website********

1.)First go to phpmyadmin and click new 
2.) then type "community_portal" in the database name field and press create (make sure your spelings in the words and underscore symbol *****community_portal********)
3.)then select the database community_portal in side panel.
4.)then click import button and choose the file 'community_portal.sql.gz' and press Go button in bottom right corner.

----if you getting error saying 'got a packet bigger than max allowd packet bytes' you have to increase max packet bytes
in your server----

---To do that go to Xampp shell and log to localhost(#mysql -h localhost -u root -p) and copy & paste below query
in the shell and press enter

**Query - SET GLOBAL max_allowed_packet=16777216; 


5.)There are two tables in the database, users and events. Make sure both tables and table data are imported successfully.

***now db import successful***

5)copy the folder called project and paste it on the htdocs folder in the xampp server folder
6) now open a web browswer and type the url- localhost/project


****done****



##********IMPORTANT************##

___Admin Account____

username-admin
password-admin12345
admin pin-12345


__test user accounts__

usernames - testuser1,testuser2,testuser3.....like that.
passwords - user1cp,user2cp,user3cp..........like that.

__other user Accounts__

other Accounts usernames are visible in admin panel and database.
other Accounts passwords- <firstname>12345 
example: rovindu12345, pramod12345, kithmi12345..........like that. 


Contact me - 0752960892 (if needed)
