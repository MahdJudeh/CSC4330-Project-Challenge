# Software Testing Document

### for

# ChallengeMe!

**Version 1.0 approved**

**Prepared by Benjamin Bordelon, Mahdi Judeh,                                              Harry Ly, Alex Pagan, Blake Roussel**

**LSU**

**November 21, 2016**













**Table of Contents**

Cover…………………………………………………………………………………………

Table of Contents……………………………………………………………………………

TC1 Video Scrolling…………………………………………………………………………




| Test Case #:    1.1  <br>                                       Test Case Name: Video  Scrolling     <br>                  System: Website    <br>                                    Subsystem: Home Page <br> Designed by: Harry Ly <br> Design Date: 11/21/16 <br> Executed by:                 <br>                            Execution Date: <br> Short Description: Moving to the next video in the website | 
| --- | 
| **Pre-conditions** | 
| The user needs access to the internet | 
| The user has to be on the website |

| **Step** | **Action** | **Expected System Response** | **Pass/Fail** | **Comment** |
| --- | --- | --- | --- | --- |
| 1 | Click on &quot;next&quot; video button | The system displays the next video in the challenge playlist. | ----- | ----- | 

<br>
| Test Case #: 1.2    <br>                                      Test Case Name: Video Scrolling        <br>  System: Website     <br>   Subsystem: Home Page <br> Designed by: Harry Ly      <br>Design Date: **11/21/16** Executed by:     <br>Execution Date: <br>
Short Description: Reached the end of the video list |
| --- |
| **Pre-conditions** |
|The user needs access to the internetThe user has to be on the website |

| **Step** | **Action** | **Expected System Response** | **Pass/Fail** | **Comment** |
| --- | --- | --- | --- | --- |
| 1 | Click on next video | The system displays a message saying there are no more videos  | -----  | ----- |

| **Post-conditions** |
| --- |
| 1. The same video is displayed on the screen with a message saying there are no more videos. |


<br>

| Test Case #: 2.1 <br>
Test Case Name: Voting on Challenge <br>
System: Website <br>
Subsystem: Home Page <br>
Designed by: Harry Ly <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date:  <br>
Short Description: Upvoting for challenges |
| --- |
| Pre-conditions |
| The user needs access to the internet |
| The user has to be logged into the website on their unique account |

| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click upvote button | The system adds one to the total amount of upvotes that the video already has. |   |   |

| Post-conditions |
| 1. The number of upvotes on the video increases by one. |
| --- |


<br>
| Test Case #: 2.2     <br>
Test Case Name: Voting on Challenge <br> 
System:  Website <br>
Subsystem: Home Page<br>
Designed by: Harry Ly <br>
Design Date: 11/21/16 <br>
Executed by:<br>
Execution Date: <br>
Short Description: Downvoting for challenges |
| --- |


| Pre-conditions | 
| The user needs access to the internet |
| The user has to be logged into the website on their unique account |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click downvote button | The system decrements the vote amount the video already has. The system displays the voters decremented by 1. |   |   |






| Test Case #: 3.1
Test Case Name: Display Video <br>
System: Website <br>
Subsystem: Home Page <br>
Designed by: Harry Ly <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Using YouTube to display videos on the website |
| --- |


| Pre-conditions |
| The user needs access to the internet |
| The user has to be on the website |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click on video | The system uses YouTube&#39;s embedded player to display videos onto the screen. |   |   |






| Test Case #: 4.1 <br>
Test Case Name: Top Challenges Tab <br>
System: Website <br>
Subsystem: Home Page <br>
Designed by: Harry Ly <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Sorting the challenges based on how many upvotes there are. |
| --- |


| Pre-conditions |
| The user needs access to the internet | 
| The user must be on the website |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click on top challenges button | The system retrieves the page of the top challenges with the challenges sorted by the votes, highest vote number being first. |   |   |






| Test Case #: 5.1   <br>
Test Case Name: Newest Challenges Tab <br>
System: Website <br>
Subsystem: Home Page Designed by: Harry Ly <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Sorting the challenges based on which videos were put up more recently. |
| --- |


| Pre-conditions |
| The user needs access to the internet | 
| The user must be on the website |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click on &quot;Newest&quot; button. | The system retrieves the page of newest challenges based on the time that they were submitted and displays them in the appropriate order according to recentness of submission. |   |   |






| Test Case #: 6.1
Test Case Name: Hot Tab <br>
System: Website <br>
Subsystem: Home Page  <br>
Designed by: Ben Bordelon <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Sorting the challenges according to how &quot;hot&quot; they are. |
| --- |


| Pre-conditions |
| The user needs access to the internet. |
| The user must be on the home page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Hot&quot; tab | The system displays the challenges on the home page in list form sorted by their trendiness. |   |   |


<br>


| Test Case #: 7.1
Test Case Name: Entering a Video Submission(logged in, valid link) <br>
System: Website <br>
Subsystem: Challenges <br>
Designed by: Ben Bordelon <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Submitting a video with a valid YouTube link by a logged in user. |
| --- |


| Pre-conditions |
| The user needs access to the internet. |
| The user must be logged in(not a guest). |
| The user must have a challenge opened. |
| The user must have a valid YouTube link to submit(ex. www.YouTube.com/h3ds7). |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Submit a Video&quot; button | Submission pop-up window comes up asking for video link. |   |   |
| 2 | Enter valid YouTube link and click submit | System confirms video submission, enters video into database. |   |   |


| Post-conditions |
| 1. A video object with link &quot; [YouTube.com/h3ds7](http://www.youtube.com/h3ds7)&quot; is created and storded in database. |
| --- | 


<br>
| Test Case #: 7.2 <br>
Test Case Name: Entering a Video Submission(guest user) <br>
System: Website <br>
Subsystem: Challenges <br>
Designed by: Ben Bordelon <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Submitting a video with a guest user. |
| --- |


| Pre-conditions |
| The user needs access to the internet. | 
| The user must be logged in(not a guest). | 
| The user must have a challenge opened. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Submit a video&quot; button | &quot;Not logged in&quot; error message displayed in pop up window, prompts account login/account creation. |   |   |


<br>


| Test Case #: 7.3 <br>
Test Case Name: Entering a Video Submission(logged in, invalid video link) <br> 
System: Website <br>
Subsystem: Challenges <br>
Designed by: Ben Bordelon <br>
Design Date: 11/21/16 <br>
Executed by: <br> 
Execution Date: <br>
Short Description: Submitting a video with an invalid YouTube link by a logged in user. |
| --- |


| Pre-conditions | 
| The user needs access to the internet. |
| The user must be logged in(not a guest). | 
| The user must have a challenge opened. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;submit a video&quot; button | Submission pop-up window comes up asking for video link. |   |   |
| 2 | Enter invalid YouTube video link | &quot;Invalid YouTube link&quot; displayed in red text on same pop up. |   |   |


<br>


| Test Case #: 8.1 <br>
Test Case Name: Entering a Challenge Submission(Logged in) <br>
System: Website <br>
Subsystem: Challenges Designed by: Ben Bordelon <br> 
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Submitting a challenge by a logged in user. | 
| --- |


| Pre-conditions |
| The user needs access to the internet. |
| The user must be logged in(not a guest). |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Challenge other players!&quot; button | Submission pop-up window comes up asking for challenge title, description |   |   |
| 2 | Enter challenge title, description and click submit. | System confirms challenge submission, enters challenge into database. |   |   |






| Post-conditions |
| 1. A challenge object with the correct title and description is created and stored in database. |
| --- |






| Test Case #: 8.2 <br>
Test Case Name: Entering a Challenge Submission(Guest User) <br>
System: Website <br>
Subsystem: Challenge Page <br>
Designed by: Ben Bordelon <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description:  Attempting to submit a challenge by a guest user. |
| --- |


| Pre-conditions |
| The user needs access to the internet. |
| The user is a guest user. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Challenge other players!&quot; button | &quot;Not logged in&quot; pop-up window comes up, prompts login/account creation. |   |   |






|  Test Case #: 9.1 <br>
Test Case Name: Create New User <br>
System: ChallengeMe <br>                             
Subsystem: Account <br>
Designed by: Alex Pagan <br>                         
Design Date: 11/21 <br>
Executed by:  <br>                           
Execution Date: <br>
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions |
| The user has arrived at the system main page |
| The username &#39;bob5&#39; does not exist |
| The user has a valid email &#39; [robert10@website.com](mailto:robert10@website.com) |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in password and re-enter passwordEnter 01/01/90 for birthday | The system displays a message of success The system directs user to main page with account privileges. |   |   |


| Post-conditions |
| 1. The new user name &#39;bob5&#39; is saved in the database with the password &#39;1234&#39; and email &#39;robert10@website.com |
| --- |


<br>


| Test Case #: 9.2 <br>
Test Case Name: Create New user/fail <br>
System: Website <br>
Subsystem: Account <br>
Designed by: Alex Pagan <br>
Design Date:11/21 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions |
| The user has a valid email | 
| The user name &#39;bob5&#39; does not exist | 
| The system displays main page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in passwordEnter &#39;1235&#39; in re-enter passwordEnter 01/01/90 for birthday | The system displays an error message &quot;The passwords do not match&quot;The system re-prompts user to enter their information |   |   |
<br>


| Test Case #: 9.3 <br>
Test Case Name: Create New user/fail <br>
System:ChallengeMe <br>
Subsystem: Account <br>
Designed by: Mahdi Judeh <br>
Design Date:11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions |
| The user&#39;s email is already in the system |
| The user name &#39;bob5&#39; does not exist |
| The system displays main page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in passwordand re-enter passwordEnter 01/01/90 for birthday | The system displays an error message &quot;The email is already in the system&quot;The system re-prompts user to enter their information |   |   |
<br>


| Test Case #: 9.4 <br>
Test Case Name:Create New user/fail <br>
System: Website <br>
Subsystem:Account Designed by: Mahdi Judeh <br>
Design Date:11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions |
| The user&#39;s email is not in the system |
| The user name &#39;bob5&#39; already exists |
| The system displays main page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in passwordand re-enter passwordEnter 01/01/90 for birthday | The system displays an error message &quot;The username is already in the system&quot;The system re-prompts user to enter their information |   |   |


<br>






| Test Case #: 9.5
Test Case Name: Create New user/fail
System: Website
Subsystem: Account
Designed by: Mahdi Judeh
Design Date:11/21/16
Executed by:
Execution Date:
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions The user&#39;s email is not in the systemThe user name &#39;bob5&#39; does not existThe system displays main page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in passwordand re-enter passwordEnter 01/01/00 for birthday | The system displays an error message &quot;The user is too young cannot&quot;The system re-prompts user to enter their information |   |   |


| Post-conditions   |
| --- |






| Test Case #: 9.6 <br>
Test Case Name: Create New user/fail <br>
System: Website <br>
Subsystem:Signup <br>
Designed by: Mahdi Judeh <br>
Design Date:11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Test the ChallengeMe user creation |
| --- |


| Pre-conditions |
| The robert10@website.com is already in the system |
| The user name &#39;bob5&#39; does exist |
| The system displays main page. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &#39;Sign Up&#39; button | The system displays a message asking user the to enter a valid email,  username, password, and re-enter the password |   |   |
| 2 | Enter &#39;robert10@website.com &#39; in EmailEnter &#39;bob5&#39; in usernameEnter &#39;1234&#39; in passwordEnter &#39;1235&#39; in re-enter passwordEnter 01/01/00 for birthday | The system displays an error message &quot;That email is already in the system.&quot;The system re-prompts user to enter their information |   |   |


<br>


| Test Case #:   10.1 <br>
Test Case Name:  Logout <br>
System: Challenge <br>
Subsystem: Login <br>
Designed by:  Blake Roussel <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description:  User can logout of their account | 
| --- |


| Pre-conditions: |
| User is logged in. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | User clicks &quot;Logout&quot; Button. | System logs the user out and reverts him to a guest user. |   |   |


| Post-conditions |
| User is now considered a guest user. |
| --- |


<br>
| Test Case #: 11.1 <br>
Test Case Name: Entering a Challenge Submission(Logged in) <br>
System: Website <br>
Subsystem: Challenge Page <br>
Designed by: Blake Roussel <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: Submitting a challenge by a logged in user. |
| --- |


| Pre-conditions: |
| The user needs access to the internet. |
| The user must be logged in(not a guest). |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;Challenge other players!&quot; button | Submission pop-up window comes up asking for challenge title, description |   |   |
| 2 | Enter challenge title, description and click submit. | System confirms challenge submission, enters challenge into database. |   |   |


| Post-conditions |
| 1. A challenge object with the correct title and description is created and stored in database. |
| --- |


<br>


| Test Case #: 12.1 <br>
Test Case Name: User Viewing Account Information <br>
System: Website <br>
Subsystem: Account <br>
Designed by: Blake Roussel <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description: User can view his own account information(total points, video submissions) |
| --- |


| Pre-conditions: |
| The user needs access to the internet. |
| The user must be logged in(not a guest). |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | Click the &quot;My Account&quot; button | The system gets information about the unique account from the database and displays in a pop up window. |   |   |






| Test Case #:   13.1 <br>
Test Case Name: Prompt Login (Username) <br>
System:  Website <br>
Subsystem:  Login <br>
Designed by: Blake Roussel <br>
Design Date: 11/21/16 <br>
Executed by: <br>
Execution Date: <br>
Short Description:  The system should allow users to log in to their accounts. |
| --- |


| Pre-conditions |
|User visits site and has an account |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | User click &quot;login&quot; Button. | Prompts user for login information. |   |   |
| 2 | User types an existent username with incorrect password. | System checks given information with database and system responds with &quot;Incorrect login information&quot; message. |   |   |


<br>


| Test Case #: 13.2  <br>                             
Test Case Name: Prompt Login (Password)  <br>          
System: ChallengeMe             <br>                 
Subsystem: Login <br>
Designed by: Blake Roussel      <br>                
Design Date: 11/21/16 <br>
Executed by:                 <br>                            
Execution Date: <br>
Short Description:  The system should allow users to log in to their accounts or create accounts to gain access to voting and submission and to user account info. |
| --- |


| Pre-conditions |
|User visits site and has an account |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | User click &quot;login&quot; Button. | Prompts user for login information. |   |   |
| 2 | User types a non-existent username. | System checks given information with database and system responds with &quot;User does not exist&quot; message. |   |   |


<br>


| Test Case #: 14.1   <br>                              
Test Case Name:  Report challenge      <br>                        
System:   Challenge Me     <br>                                   
Subsystem: Challenge <br>
Designed by:   Blake Roussel     <br>             
Design Date: 11/21/16 <br>
Executed by:    <br>                                         
Execution Date: <br>
Short Description: User can report challenges that do not meet guidelines. |
| --- |
| Pre-conditions | 
| User is logged in and voting on a Challenge |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | User click &quot;Report Challenge&quot; Button. | System stores the flag in the challenge database and responds with a Challenge reported message. |   |   |


| Post-conditions |
| 1. User continues to review challenges. |
| --- |


<br>


| Test Case #: 15.1 <br>                                
Test Case Name:  Remove video. <br>               
System: ChallengeMe  <br>                          
Subsystem: User stats. <br>
Designed by: Blake Roussel  <br>                 
Design Date: 11/21/16 <br>
Executed by:    <br>                                         
Execution Date: <br>
Short Description:  The system should allow users to remove videos after they submit it. |
| --- |
| Pre-conditions |
| User is logged in and is viewing their video submissions. |
| --- |


| Step | Action | Expected System Response | Pass/Fail | Comment |
| --- | --- | --- | --- | --- |
| 1 | User clicks &quot;Remove Video&quot; Button. | System deletes video and all corresponding data, and removes video from list. |   |   |






