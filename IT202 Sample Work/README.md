This is some sample work done in my IT202 course that may assist us in creating an authentication system.

The main (prototype 3) uses the (private!) information from account.php to pass the credentials into mysqli.

If a connection to MySQL is successful, then the prototype 3 program receives data from the user and passes the data to the program-defined function "authenticate," which is located inside the myfunctions.php file.

The authenticate function reads the user data, and uses this data to create an SQL statement that will select this data from the "users" table (a table created in mysql during the 1st week of the semester). 

If rows from the table are called, then the function returns true, allowing the rest of the main prototype 3 program to carry on, with a brief statement saying that the crediantials are valid.
