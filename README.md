Title : Web Application to STORE and RETRIEVE the User Data.
Description : This Web Application is designed to let the user enter their details to store the data and can retrieve the ssame data whenever they want. 
Index.html : This file is the GO-to file. Open this file in any browser of your choice. A HTML web page is displayed on the screen, which asks you to enter the details like Name, Email, Age, DateOfBirth. Validation is performed for Email, Age fields. Email is specified as a required field. If you enter any invalid email, then validation is performed and an error message specifying the error is popped-up. If Age given is negative number, then popup is displayed saying 'Age shoulld be a positive Number'. 
After entering all the details(Name, Email, Age, DateOfBirth), you have to click on 'submit' button to submit the details.
ProcessForm.php : This file contains PHP code. In general, PHP is used to link the html web page input with the Database, such as to store data, retrieve data, validate data, etc.,
Whenever user enters the data through HTML web page, the PHP code ensures that the entered data is stored in the Database. And vice versa,i.e., retrieving data is performed by selecting the data from the database and displaying it on the Front end.
SqlQuery.sql : This is the major file which contains all the entered data and retrieves the data whenever a request is sent by the user.
Table.html : This file also contains the HTML code, but this is for displaying the output.
Data is retrieved from the database and displaying on the HTML web page.
