I am Aryak Kumar, 
I have used a local MySql Server for my project.

To setup and access the MySql Database, use the phpMyAdmin web interface:
1. Log in to cPanel.
2. Click phpMyAdmin.
3. Create a new database with the name of Project.
4. Click the Import tab.
5. Under File to Import, click Browse, and then select the Project.sql file from the Database Folder.
6. Click Go. The import process runs.

To run the main page of the website:
1. Go to your local Xampp server preferably (localhost:8080/)
2. and then type the location of index.php
	If index.php is stored in htdocs of Xampp, 
	the index page will be at (localhost:8080/login/index.php)



The features which my program features are listed as follows-
1. Main Page -	Done
2. Login Page  -Done
3. Register Page  -Done
4. Question Detail Page -Done
5. New Question Page  -Done 

Here are list of all the features that i have completed 
Database
- Sort questions by the date by default. The newest question is on the top. - When click the "Hot" button in the top bar, sort the question by the number 
of votes. If the questions are filtered by space or words, then sort the filtered question only. 
 Show the number of upvotes and answers near the "upvote" and "answer" 
buttons.
When click the "Home" button or System Name label ("Ques" at the top left for our example), list all questions that sorted by the date. 
- When click the "Ask Question" button or the "What is your question" label: direct to the New Question Page. 
- Filter and search: - When click one of the spaces on the left bar, filter the questions by the space  - Search the question title through words in the search textbox (case insensitive), 
Answer: - When click the title of the question: 
- direct to the Question Detail Page. - When click the "Answer" button in the question box, 
-  list all the answers to this question and 
-  a new answer box where the user can answer the question directly
- ( if click the "Answer" button again or click the "Answer" button of another question box, close those answer boxes of this question (and show the answers to the other question). 

"Show more": - If the content is more than three lines, show only the first three lines with a "show 
more" button. -  If the user clicks the "show more" button, all the content of the question will appear 

- If there is an error, alert this message and clear the password. 
- Check whether the user has registered in the database; if not, respond "User is not registered". 
- Check whether the password is matched; if not, respond "Unauthorized access". 
-  If log in successfully, direct to the main page. 

-  Submit the information to the server when the "register" button is clicked; if the user registers successfully, direct to the main page. - Check whether every textbox is filled. - Check whether the confirmation password is the same as the password. - Check whether the email conforms to the standard email format "xx@xx.xx". - (0.1 points) Check whether the email is in the database; if so, respond "Duplicated user's email address". 

- Delete question: -  Delete the question and corresponding answers. 
-  If the event is deleted successfully, direct to the main page. 
- Edit question: -  When click the "Edit" button, present the corresponding textboxes and "Submit" 
button -  Show the original title, space, and content in the corresponding input boxes. -  Check whether every textbox is filled. -  Click the "Submit" button, save the edited question. 

Answer boxes: -  Sort the answers by the date. The newest answer is on the bottom. 
- Delete Answer: - Delete the corresponding answer. 
- Add New Answer: - When click the "Post your new Answer" label, present a textbox, "Submit" and "Cancel" 
buttons
- Click the "Cancel" button, ignore this answer. -  Check whether the textbox is filled before submission. -Click the "Submit" button, post the new answer as Figure 15 shows. 

- Check whether every textbox is filled. -  If the new question is published successfully, direct to the main page. 



 






