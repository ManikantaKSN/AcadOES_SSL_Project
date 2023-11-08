                                                                          |-------------------------------------|
                                                                          | AcadOES(Academic Online Examination)|
                                                                          |-------------------------------------|
				

Introduction:
----------------
>> Now-a-days, Online examination system has become popular for competitive examinations because 
     of its unique features such as auto-evaluation, speed and accuracy. Moreover, it also helps environments 
     by reducing the use of paper.These are some reasons which motivated us to create "AcadOES".
    In "AcadOES", students are asked to select answers from multiple options given for a single question. 

Features:
------------
Two types of people will be using this: Admin/Course Instructor and Student

>>Admin/Instructor:
	1)The Admin/Instructor can register himself and log-in to his home page for the course.
	2)He can view details of students registered.
	3)He can create or delete an exam,modify or delete questions.Question limit is restricted to 10.
	4)He can set timer to notify students that the alloted time has been completed.
	5)He can check the rankings of students based on the marks secured.

>>Student:
	1)The Student can register himself and log-in to his home page(registered for all courses).
	2)He then chooses the course to either write exam or check rankings/marks secured in previous tests.
	3)He gets 10 questions to answer in the exam.He should already be logged-in before the admin enters
	the test number in his page .He can write the exam after admin gives the number.
	4)He can see his result right after the test ends.He can see the rankings after all have given their test.
	5)He is registered for all 5 pre-decided courses.He can write exams for all 5 courses.

Instructions:
---------------

>>For Admin/Instructor:
	1)After downloading the zip file, extract the files and place in a new folder in htdocs folder in xampp folder
                 (If you are using xampp) inside Local Disk (C:).Now run xampp from your computer and start 'Apache' and 'MySQL'.
	2)Now, open a browser and type localhost/foldername/  and click enter  .Login-page for admin opens.
	3)Click on register button, give the required details and come back and log-in to go to the homepage.
	4)In the homepage, click on 'StudentList' button to view details of student registered. 
	5)Click on 'To Exam Page' and enter your coursecode(code designated for your course). 'Invalid code' will be 
	shown for entering wrong code.On enterting correct code, click the 'Go To Course Page' button that takes you to 
	course-details page.Enter exam number to create a new exam or view result of previous exams.
	6)Now, in the shown page , Enter the question no.s,questions,options and the correct option and click on 'submit' to 
	add the question.Like that add 10 questions in total and not more.You can delete an exam or also delete or modify 
	a question from the same page.After giving all questions, click on "To Course Page" button to go back to course-details page.
	7)Now, before any exam , the students should be ready,i.e, already logged-in .Then give the exam number to provide
	questions from that exam and also starts the timer(give end-time for test).
	8)Now, after the students have given the test, go to homepage, click on "To Exam Page" , enter correct coursecode 
	and then click on "Go To Course Page" that takes you to course-details page and enter exam-number in the
	view-result row to view the results(rankings) of students .

>>For Student:
	 1)After downloading the zip file, extract the files and place in a new folder in htdocs folder in xampp folder
                  (If you are using xampp) inside Local Disk (C:).Now run xampp from your computer and start 'Apache' and 'MySQL'.
	2)Now, open a browser and type localhost/foldername/ and click enter. Click on 'GoTo-Student' button.
	3)Click on register button, give the required details and come back and log-in to go to the homepage.
	4)There, select the course for which you want to either write a new exam or check result of previous tests.
	5)If you want to view result of previous tests, in the page shown, enter exam-number of the test whose result you want to see,
	in view-results column and click submit.Click on ' ' button to go back to previuos page
	6)In the same page , if you want to write exam, first wait for the instructor/admin to enter exam number ,
	then click on start exam to write the exam. You will have 10 questions to answer.
	7)Now, exam starts with timer shown at the top. Type the option you chose in the space provided and click on 'Submit&next'
	to save your answer and it will take you to next question, click on 'previous' button to go to the previous questions and
	click on 'reset' button (if you want) to reset your answer and type in the new option in the space and click on the
 	'Submit&next' button to save again. After you click on 'Submit&next' in the 10th question, all saved answers will be submitted
	8)After answers are submitted, you will taken to a page showing the answers/options you chose and correct options too.
	Click on '' button to view the marks you secured.

Constraints:
---------------

>>Admin/Instructor:
	1)Admin should only give 10 questions with question number given for each in order only,i.e 1,2,3,4,.....10 .
	2)To create a new exam, Admin should delete the previous exam but should give a different exam number and not the 
	same as any of the previous ones.
	3)To prevent student from attending a test more than one time, admin should delete test as soon as the timer ends and all
	students have completed giving the test.

>>Student:
	1)Student can only see results of previous tests but not the questions and answers fom those tests.
	2)As soon as timer ends, the test won't expire on its own, so the student should stop answering and click on 'Submit&next'
	for all the remaining questions.
	3)Student can attend a test multiple times before its deleted but he/she should attend it only once.

Credits:
----------

>>This website has been designed by the following undergraduate students from IIT Dharwad:
	1)P.Gangadhar - 210010036@iitdh.ac.in
	2)P.Ramesh - 210010039@iitdh.ac.in
	3)V.Yashwanth - 210010057@iitdh.ac.in
	4)Amaan Khan - 210010023@iitdh.ac.in
	5)K.S.N Manikanta - 210010050@iitdh.ac.in