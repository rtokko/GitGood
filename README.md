
# GitGood
Git Good Respository
eSports Assistant (final branch)

index.php is the login page the user must in order to use the service. The user may register by clicking on the register button

One example of a valid login is
Username: gitgood
Password: 1234

Once logged in the user will be directed to the home page (appropriately named home.php).
Here, there are several options present.

The "calendar" option will display a calendar that features upcoming events. Clicking on an event allows you to freely control your google calendar 

The "message board" option will take the user to our forum pages, which are powered by phpBB***.

The "upcoming tournaments" option will take to a page where the user will be able to see a list of future tournaments. The information on these tournaments are retrieved in real time from the smash.gg API.

The "Player Showcase" is an exhibit featuring players from many different games in the eSports community. Some of the features include a picture of each player embedded twitch streaming, youtube playlists of popular matches played.

The logout option will bring you back to index.php and you would have to log back in.


The sql dump needed to house the table used for our service is located in the SQL folder

***The phpBB3 file in the FrontEnd folder must be unzipped before attempting to test the service.
