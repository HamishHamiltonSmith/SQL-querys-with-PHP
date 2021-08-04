# SQL-querys-with-PHP

This is a PHP script I wrote which takes data (in this case an user-id number) submited on a html page and forms a SQL query based on the data, it then sends this to a database which returns info on the user whos id matches the one submitted. Finally this info will be printed to a web page.

Important: I made this system intentionally vulnerable to SQL injection attacks (eg: OR 1=1). If you want to use this code make sure you validate input before submitting it to the database.
