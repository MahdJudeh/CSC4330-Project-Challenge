#**Software Requirements Specification for**

#**ChallengeMe**

#**Version 1.0**

##**Prepared by**  **Benjamin Bordelon, Blake Roussel, Mahdi Judeh, Alex Pagan, Harry Ly**

##**LSU**

##**October 21, 2016**

#**Table of Contents**

**Table of Contents**

**Revision History**

**1. Introduction**

1.1        Purpose

1.2        Document Conventions

1.3        Intended Audience and Reading Suggestions

1.4        Product Scope

1.5        References

**2. Overall Description**

2.1        Product Perspective

2.2        Product Functions

2.3        User Classes and Characteristics

2.4        Operating Environment

2.5        Design and Implementation Constraints

2.6        User Documentation

2.7        Assumptions and Dependencies

**3. External Interface Requirements**

3.1        User Interfaces

3.2        Hardware Interfaces

3.3        Software Interfaces

3.4        Communications Interfaces

**4. System Features**

**FR-1**               **Prompt Next Video**

| Summary | Upon video ending, the product should display a prompt for the user to move to the next video in the challenge&#39;s video reply list. |
| --- | --- |
| Rational | The prompt will allow the convenient transition from current video to next video at the pace the user desires. |
| Requirements | The user can click a button &quot;next&quot;, and in response, the system will show the next video in the list without playing it. The user can then click play. |











**FR-2                 Voting on Challenge**

| Summary | The system should allow the user to upvote and downvote challenges and store this data in the location of the specified challenge. Upvotes determine popularity of a challenge, and downvotes are used to purge the challenge list of unpopular or undesirable challenges. Upvoting increments the point value by one, and downvoting decrements the point value by one.   |
| --- | --- |
| Rational | System capability of determining popular challenges is essential to providing a positive user experience. Purging the list of unpopular videos will ensure that better content is being displayed to the user. |
| Requirements | The user can click upvote on any challenge and the system should increment the upvote number on the challenge by one and store that data as type int. This data will be run through two algorithms to determine the ranking of the specified challenge in both the system&#39;s trending and popular challenge lists. The user can click downvote, after which the system will increment the downvote number for the specified challenge. After reaching the arbitrary value of downvotes(10 downvotes), the challenge will be purged from the list and as a result deleted from the system. |

**FR-3**             **Display Video**

| Summary | The system will provide a feature to display videos via use of YouTube&#39;s embedded player. |
| --- | --- |
| Rational | The feature will be used by users to watch videos of other users attempting challenges. The main feature of the product is viewing video submissions for challenges, therefore it is essential that these videos behave as expected and without errors. |
| Requirements | The system should display a video from the challenge they were submitted to. The system will provide 2 filters to organize and view a challenge&#39;s video replies(most popular, newest). The system will default to showing the user the newest video submissions for the specified challenge. |



**FR-4                 Get Top Challenge List**

| Summary | The system should provide a means to display challenges in the order of most liked challenge to least liked challenge. |
| --- | --- |
| Rational | This feature will be used for viewing challenges in a certain order. It is desirable for users to view challenges based on which challenges are most popular.. |
| Requirements | The system should find and retrieve the challenges that are the most popular(most upvoted, second most upvoted, and so on) and put them in a list for viewing.With one click a user may navigate to any of the other tabs(hottest and newest). |



**FR-5                 Get Newest Challenge List**

| Summary  | The system should provide a means to display challenges in order of newest to oldest list form. |
| --- | --- |
| Rational  | This is vital to the system because it allows users to access the list of new challenges and vote on them. Going to the newest challenge tab will promote both the growth of challenges that have recently been submitted and the novelty of original and creative challenge submission. |
| Requirements | The system should display a list of challenges from newest to oldest. System would require a timestamp on each challenge to keep of when the challenge was submitted. With one click a user may navigate to any of the other tabs(hottest and top). |

**FR-6            Get Hot/Trending Challenge List**

| Summary | The system should allow the user to view challenges according to their &quot;trendiness.&quot; Trendiness is the relation between a challenge&#39;s popularity and the recentness of its submission. |
| --- | --- |
| Rational | Ensuring that the user can view challenges according to their recent popularity is vital to creating both a current and refreshing list of popular challenges and giving a positive user experience. |
| Requirements | The system should default to the hot tab. If not on the tab already, the user can click the &quot;Hot&quot; tab on the main page; in response, the system will show the user the appropriate list. This list ordering is based on using an algorithm that determines a challenge&#39;s popularity using a challenge&#39;s net votes in relation to recentness of submission of the challenge. The user can navigate to other filter tabs(hot, most popular) with one click. |

**FR-7                Calculate Point Worth For Challenges**

| Summary | The system should provide a challenge&#39;s worth(in points) based on the amount of users that have voted upon it as well as the ratio of upvotes to downvotes. |
| --- | --- |
| Rational | If a user is determined to have successfully completed a challenge, then that user will be awarded points based on a ratio of users that have voted on the challenge&#39;s worth. |
| Requirements | The system will have a tracker for the amount of voters that have voted on a challenge compared to the total number of registered users. It will also have a tracker for how many upvotes and downvotes a challenge gets. A ratio will be computed for how many users have voted upon a challenge compared to how many active users on the site. An arbitrary algorithm calculates the point worth of a challenge. |

**FR-8               Determine Video Success/Failure**

| Summary | The system requires a feature through which a user succeeds(and is awarded points) or fails at a challenge based on the video they submit. |
| --- | --- |
| Rational | For a user to aquire points from the system, they must have more upvotes than downvotes on their video submission to a challenge. Other users view the video and determine whether or not the submitter succeeds or fails a challenge. |
| Requirements | This system needs a feature that allows users to vote up or down on a video, as well as a tracker to keep how many upvotes and downvotes a video gets. Video submissions must be stored in the database so the system can access them. |





**FR-9                 Entering and Storage of Video Submissions in Database**

| Summary | The system should transfer the user submitted video link from the GUI to the user database. |
| --- | --- |
| Rational | Storing a video submission relative to its challenge is essential to the user viewing the desired content. |
| Requirements | The user can click the &quot;submit&quot; button next to a certain challenge. Upon clicking said button, the system will prompt the user to enter a video link and displays a warning for submitting videos. The user can enter the link to the desired YouTube video to be uploaded in the previously mentioned user prompt. The user can click submit to send the link to be entered in the video database. |

**FR-10  **         **Entering and Storage of Challenges in Database**

| Summary | The system should store challenges and their attributes in the challenge database. |
| --- | --- |
| Rational | Storing a challenge in the database is essential to providing the user content to browse as well as listing the challenges according to desired filter. |
| Requirements | The user can click &quot;Challenge Other Players.&quot; Upon the user click, the system prompts the user to enter challenge title and description. The user can click &quot;Challenge Them!&quot; The system responds by transferring the new challenge data to the challenge database and displaying the challenge on web page. |

**FR-11                 Creation/Store New Users in Database**

| Summary | The user should be able to enter his personal information and submit it to the system. The system should store newly created user account information in the Database. |
| --- | --- |
| Rational | Growing the user base of the product is directly related to the success of the system. Therefore it is essential that users be able to create an account and use it immediately. |
| Requirements | The user will have the option to click on the create new account button. If clicked, the system should prompt the user for a user name, email address, age, and password. The user needs to verify that their chosen username is not taken. The user can then click create to &quot;submit&quot; the information. The system should store all user information in the database. The system will create and set a point value of 0 for the newly created user. Also the system will store the date of account creation |



**FR-12                 Return Errors For Invalid Inputs**

| Summary | The system should recognize both when a user is under the age of 18 to participate and when invalid characters are used in usernames and challenge titles. Invalid YouTube video links must also be rejected by the system. |
| --- | --- |
| Rational | The safety of minors trying to participate in the product community is reliant on the system&#39;s ability to recognize an underage user(assuming user honesty). In order to maintain readability of challenge titles and usernames, the use of special characters[!,@,#,$,%,^,&amp;,\*,(,),etc.] will be largely disallowed: challenge titles will be allowed to use a select few special characters[! , &quot; , ( , ) , . , : , ; and ,]. Descriptions of challenges might need special characters to convey information to the user, so special characters entry will be allowed for challenge descriptions. |
| Requirements | The user can enter text/video links on various parts of the website. After user submission of data, the system will recognize any underage users or invalid characters in usernames in the account creation scenario as well as invalid characters pertaining to a challenge&#39;s title in the challenge creation scenario. The system can verify if submissions for video links are in fact links to YouTube videos. |

**FR-13                 Login/Logout**

| Summary | The system should provide a login and logout feature for users who have accounts to get access to user restricted features. |
| --- | --- |
| Rational | A login system is necessary to allow the user access to his account&#39;s video submissions as well as the points they have gained from the  videos. |
| Requirements | A database to store all user information is necessary. A verification feature is required to check whether or not a user&#39;s login information is correct and matches his password. If a user is already logged in, instead of a button for logging in a button for logging out should be displayed. |



**FR-14           Adds Restrictions to Unregistered Users**

| Summary | Users that are not logged into their accounts have restricted access to the website. |
| --- | --- |
| Rational | Users that are anonymous should not have the ability to vote or submit videos. |
| Requirements | The systems should detect that there is no account logged in. If the user clicks on a vote button or tries to submit a video, a pop up with come up and prompts the user to log in. |

**FR-15                 User Can Access Their Account Information**

| Summary | The system should allow users to view the amount of points they achieved as well as the video submissions for challenges they have completed. |
| --- | --- |
| Rational | Users should have an account that shows their current lifetime point total in order to gauge their progress. |
| Requirements | The system should have a database with users&#39; accounts and their information. The system should be displayed as a pop up after the information button is clicked that displays the user&#39;s video submissions, and current lifetime point total. |

**FR-16**             **Prompt Login/Signup**

| Summary | The system should allow users to log in to their accounts or create accounts to gain access to voting and submission and to user account info. The accounts should be unique with individual statistics within them. |
| --- | --- |
| Rational | Voting and challenge submission is only available to registered and logged in users. The user should have an account that is accessible to him and only him. |
| Requirements | The system should prompt the user to log in to their account. If the user doesn&#39;t have an account yet, the system would prompt the user to create one. The user can enter his information regarding age, username, e-mail address, and password. User can click &quot;Create.&quot; Once created, the system will prompt the user to log in again. Once the user logs in, the system should access the database and retrieve all the information related to that account. The user&#39;s account information should be saved once the account is logged out or when the page is closed. |

**FR-17           User Can Report Dangerous/Illegal Challenges/Ideas**

| Summary | The system should allow users to report any challenges or ideas that are physically dangerous to the users, sexually inappropriate, illegal, invoke harm to another human, either physically or emotionally. |
| --- | --- |
| Rational | If any challenges or ideas meet the descriptions above, stakeholders could be held liable, so we would like to take care of anything that could potentially harm stakeholders. |
| Requirements | The system should allow the user to click on a button to report the challenge/idea with a description of the reason why it should be reported. |

**FR-18**           **Moderators Can Remove Challenges/Videos**

| Summary | The system should allow moderators to delete challenge ideas and submitted videos. |
| --- | --- |
| Rational | The system will be used to allow moderators to delete videos if they fit the descriptions they were reported for. |
| Requirements | The system should prompt the moderators to see if they would like to delete the video. The system should find the video in the database and then delete it. |

**FR-19                  Users Can Retract Video Submissions After Point of Submission**

| Summary | The system should allow users to remove videos after they submit it. |
| --- | --- |
| Rational | The system will be used to help users delete videos if they accidentally submit a video or regret posting a video. |
| Requirements | The system should prompt the user to see if they would like to delete their video. The system should find the video in the database and then delete the link to it. |

**FR-20 Users Can Access a User Leaderboard**

| Summary | The system should allow users to view their community rank in relation to other users. |
| --- | --- |
| Rational | Allowing users to view their current leaderboard position as well as the positions of the top users is essential to provide incentive for users to complete challenges. |
| Requirements | The user can click the &quot;Leaderboard&quot; button. The system will redirect the user to the leaderboard page and display the leaderboard list in the UI. The user can click the &quot;Top Players&quot; tab. The system will display the 15 users with the most points in the community. The user can click the &quot;my rank&quot; tab. The system will display the 7 other users directly above the user in rank, the user, and the 7 other users directly below the user in rank. The leaderboard page will default to the &quot;top&quot; tab. |

**5. Other Nonfunctional Requirements**

5.1        Performance Requirements

5.2        Safety Requirements

5.3        Security Requirements

5.4        Software Quality Attributes

5.5        Business Rules

**6. Other Requirements**

**Appendix A: Glossary**

**Appendix B: Analysis Models**

**Appendix C: To Be Determined List**

**Revision History**

| **Name** | **Date** | **Reason For Changes** | **Version** |
| --- | --- | --- | --- |
|   |   |   |   |
| Mahdi Judeh | 10/20/16 | Adding the External Interface requirements | 1.0 |
| Benjamin Bordelon | 10/20/16 | Adding &quot;Other Nonfunctional Requirements&quot; | 1.1 |
| Alex Pagan| 10/20/16 | Added function Requirements | 1.2 |
| Harry Ly| 10/20/16 | Added Introduction | 1.3 |
| Blake Rousell | 10/21/16 | Reviewed and Edited Document | 1.4 |
| Benjamin Bordelon, Mahdi Judeh, Harry Ly, Alex Pagan, Blake Rousell | 10/21/16 | Reviewed and Edited Document Created Functional Requirements | 2.0 |


**1. Introduction**

**1.1 Purpose**

The product is a web based application that allows users to create and view different challenges created by other users. It would also allow the users to submit the videos of them attempting the challenges.

 **1.2 Document Conventions**

This document will be following the default typographical conventions of the_ _IEEE Std 830-1998.




 **1.3 Intended Audience and Reading Suggestions**

The intended audience is anyone above the age of 18 that wants to do challenges and compete against other users. The audience is also consisted of users who would like the see challenges in a singular location. The rest of the SRS document contains the overall description, external interface requirements, system features, other nonfunctional requirements and is organized based on the table of contents, in numerical order.


 **1.4 Product Scope**


Challenge Me is a website that allows users to vote on, participate in, and submit challenges. Challenge Me aims to be a website that provides users with a location to show off their skills and talents to thiers friends and people around the world. The website will frequently update with user submitted challenges and developer submitted challenges in order to constantly supply users with challenges to watch and participate in.

 **1.5 References**


**2. Overall Description**

 **2.1 Product Perspective**

The software that is being developed is a web-based, video sharing, platform that allows users to submit and respond to challenges that are communally created. The website is the first of its kind because no other site focuses solely on challenges. The website relies on a web host and domain to host the site and a server to hold the database that stores information such as usernames, password, as well as other user data. The software combines elements of both a social media application and a game application that relies on users to function properly.


 **2.2 Product Functions**

·         Users can create an account that tracks users post, points and submission and stores them in a database.

·         Users can post a challenge to other users of the site.

·         Keeps track of a challenges popularity in the form of points voted by user base.

·         Users can upvote or downvote on challenges that are displayed on a &quot;Hot&quot;, &quot;Top&quot;, or &quot;New&quot; page.

·         Accepts text input from users posting a challenge and organizes the challenge based on the number of upvotes.

·         System accepts a video submission to a challenge in the form of a hyperlink and displays them via youtube embedded system.

·         System must track if a submission video is worthy of challenge description by keeping track of a satisfaction value as voted by users.

·        System should be able to play submission videos and prompt the user to continue to the next submission.
·        System should determine if the user has an account and add restrictions accordingly.






 **2.3 User Classes and Characteristics**

The Challenge Me site only has two basic user classes, a user with an account and a user without an account. A user with an account has access to all of the features the site has to offer such as uploading, voting, and responding. A user with an account is the primary user that the sysytem is developed around.. On the other hand a user without an account can access and read challenges as well as view submitted responses, but cannot vote on any challenges or submit anything on the site.  



 **2.4 Operating Environment**

System can function using any web browser using a windows, mac, or linux machine. This make the system in development accessable to a large number of people. This also means that users do not need to have outstanding machines to properly use the system to it fullest. 



 **2.5 Design and Implementation Constraints**

The most restrictive constraint that affects the implementation of the system is time. Because the time to complete to system is so limited, is system will not be as detailed as desired. Another constraint on the design of the system is language requirements. Majority of the development team is not fluent in SQL, Javascript, bootstrap, and HTML.

 **2.6 User Documentation**

The goal of the system is to use familiar and intuitive design and layout. It follows basic design layout that you may find on any social media website. The website also features all out its features on one page which eleminates the need to constantly navigate to different pages, and makes the site more consise. 



 **2.7 Assumptions and Dependencies**

The system assumes that the user has a stable internet connection and has basic knowledge on internet useage. The system also relies on the input of the users to function as described. If the users do not give their input the site may not display the most appropiate challenges or submission videos properly. In addition the system assumes the user base will be honest in regards to upvoting and downvoting, but will have a system in place to combat dishonest users. If the users aren&#39;t honest it may result in an inflation in the point system. For example, if users decide to accept another user&#39;s video submission that doesn&#39;t meet challenge requirements then it results in users getting undeserved points.  


 **3. External Interface Requirements**
 
   **3.1 User Interfaces**

The user interface will be a web page accessible from any web browser. Users will be presented a webpage with a multiple buttons and tabs on a single page, allowing the user to navigate the site. The user will have the ability to click on challenges that are displayed on the main page. The main web page will also have tabs to allow you to sort challenges by different parameters. There will be button to allow the user to vote on the challenges and videos, as well as buttons to allow the user to login and logout. The user interface shall be implemented in HTML, CSS, BootStrap, and JS.


 **3.2 Hardware Interfaces**


The user interface requires the user to have access to a device with the ability to connect to the internet. The user&#39;s device must also have a way to display the web page, typically by a screen.


 **3.3 Software Interfaces**

This system will operate with an SQL database. The database will send to the system the challenges and links to the videos currently trending, as well as the links to the top videos of all time, and links to newly added videos. If the user is requesting to login the system will pull from the database the associated password with the user’s account. The system will send the submitted challenges and videos to the database. The system will recieve design aspects from the Bootstrap framework. The system will retrieve videos from Youtube.


 **3.4 Communications Interfaces**

_The system shall use HTTP for communication over the internet._

**4. System Features**



   
**5. Other Nonfunctional Requirements**

 **5.1 Performance Requirements**

  **1. Updating Database**

Both the data entered by the user for their account and the integer number for upvotes/downvotes must be stored in the database and usable within a reasonable amount of time. Ideally the system should update the database in under 10 seconds after data submission.

  **2.  Calculating and Allotting Point Worth**

The system must be able to calculate the worth of a challenge through a specified algorithm and allot the appropriate points to users who successfully complete a challenge, all within a reasonable amount of time. The user should be able to view their updated current point total(including the  specified challenge’s calculated point worth) within 10 seconds of being awarded the points.


 **5.2 Safety Requirements**

  **5.2.1. Dangerous/Inappropriate Challenges**

If a user submits a dangerous/inappropriate challenge, users attempting to complete the challenge could hurt themselves in their attempt. Therefore, challenge submissions must be moderated to address challenges deemed too dangerous or inappropriate.

  **5.2.2. Age Requirement**

In order to ensure that all users of the program use good judgement to prevent injury/loss when submitting/completing challenges, an age requirement of 18 will be implemented in order to create an account. This will be described in the user agreement.

  **5.2.3. Property Damage/Loss**

If a user submits a challenge involving an individual&#39;s property or public property, damage or loss of said property could be a result. Therefore, our program will present an agreement to the user upon creating an account regarding possible loss, damage, or harm to an individual or property that could result from the use of our program. This will shift liability to the user upon agreement.

  **5.2.4. DMCA(Digital Millennium Copyright Act) Violation**
  
  If a dishonest user desires to gain user points in an unfavorable way, it is possible that video links(other than ones owned by the user) could be submitted plagiaristically. Guidelines for participating in the product community  will be presented to the user upon account creation to shift liability of plagiarism to the user.

 **5.3 Security Requirements**

  **5.3.1. Account Security**

Due to sensitive information being contained within the user database, it must be ensured that each user is the only user able to access his own account. The user login feature will ensure a user’s information remains private by requiring validation of a user’s username and password. In order to prevent access from unwanted users(possibly on a public computer).



 **5.4 Software Quality Attributes**

  **5.4.1. Usability**

Product usability is essential to the success of our product. Navigating the UI(User Interface) of the product should be easy, simple, and intuitive. We will implement a home page(with tabs for newest, hot, and most popular challenge) and a user account page for each user. These pages should each be able to be accessed in 1 click, assuming the user is already logged in to his account. This requires “Home” and “My Account” buttons to be available to the user from any location on the website that redirects the user to the appropriate page.

  **5.4.2. Availability**

The program excluding the user database(written in SQL) will be written in HTML. This allows the development team to utilize live updates, thereby minimizing product downtime. Since altering structure of the database is the only scenario where the server would experience scheduled downtime, it is estimated that the product can expect about 99% availability. In other words, the user should expect server downtime due to an update about once every 3 months or immediately required under the condition that a bug arises.

  **5.4.3. Robustness**

In accordance with the 18+ age policy implemented for the product, the user must provide his age when he creates an account in the user database. Assuming the user is entering his true age, the safety of underage users rely on the robustness of the software. The prevention of identical usernames is also relevant when considering software robustness. To ensure our system operates appropriately when given invalid or unacceptable input, the developers should utilize fuzz testing when coding the user database, the account creation module, and challenge creation module.

  **5.4.4. Interoperability**

The product utilizes an SQL database to store user information, and transfers this information in real time to a website. Therefore it is essential that these two major software components are able to cooperate in a way that minimizes user inconvenience. Updating user/vote/challenge data should be done quickly(in under 10 seconds).


 **5.5 Business Rules**

  **5.5.1. Guest User**

Guest users will not have all of the same available actions that product members will receive. Guests users are able to watch video submissions in reply to challenges and navigate the home page to choose whichever challenge thread is desired.

  **5.1.2. Member User**

Member users will be able to explore the home page and watch video submissions for challenges just as guest users can do. In addition, members can themselves create and submit challenges and upload video submissions in reply to challenges. Members will be able to take part in the voting system regarding challenges and video submissions.


 **6. Other Requirements**


**Appendix C: To Be Determined List**
.  Allowing users to visit other user’s page. 
.  User ranking system(user titles; NOT the same as leaderboard)

