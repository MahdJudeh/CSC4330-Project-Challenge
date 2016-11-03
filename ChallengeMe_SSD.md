# **Software Design Specification**
# **for**
# **ChallengeMe!**
### **Version 1.0 approved**
### **Prepared by Benjamin Bordelon, Blake Roussel, Mahdi Judeh, Harry Ly, and Alexander Pagan**
### LSU
### November 2, 2016
=====================================================================================================
# **Table of Contents**
Table of Contents	
[Revision History](#Revision)
<ol>
<li> <a href="#intro">Introduction</a>
	<ol>
	   <li> <a href="#purpose">Purpose of this Document</a> </li>
	   <li> <a href="#scope">Scope of the Development Project</a> </li>
	   <li> <a href="#references">References</a></li>
	   <li> <a href="#docOverview">Overview of Document</a></li>
	</ol>
   </li>
<li> <a href="#mainSys">Main System Architecture (Logical View)</a>
   <ol>
       <li> <a href="#compOverview">Complete System Overview</a> </li>
       <li> <a href="#appUse">Application Use Case</a> </li>	
   </ol>
</li>
<li> <a href="#subSys">Sub-systems Architecture</a>	
   <ol>
   	<li> <a href="#database">Database</a> </li>
   	<li> <a href="#webdata">Web-application-data</a> </li>
   	<li> <a href="#updateD">Update Database</a> </li>
  	<li> <a href="#updateV">Update View</a></li>
   	<li> <a href="#submit">Submit</a> </li>
   	<li> <a href="#vote">Vote</a> </li>
   	<li> <a href="#delete">Delete</a> </li>
   	<li> <a href="#account">Account</a> </li>
   </ol>
</li>
<li> <a href="#rationale">Rationale for each Architectural Choice</a></li>
<li> <a href="#developView">Development View</a></li>
<li> <a href="#physView">Physical View</a></li>
<li> <a href="#databaseView">Database View</a></li>
<li> <a href="#workView">Work-assignment View</a></li>
<li> <a href="#elementCatalog">Element Catalog</a>
    <ol>
	<li> <a href="#logicalC">Logical View Diagram</a></li>
   	<li> <a href="#physC">Physical View Diagram</a></li>
   	<li> <a href="#developC">Development View Diagram</a></li>
   	<li> <a href="#workC">Work-Assignment View Diagram</a></li>
   	<li> <a href="#userC">User Interface Diagram</a></li>
   	<li> <a href="#databaseC">Database Diagram</a></li>
   </ol>
</li>
<li> <a href="#UI">User Interfaces</a>
    <ol>
    	<li> <a href="#UIDes">User Interface Description</a></li>
    	<li> <a href="#UIDia">User Interface Diagram</a></li>
    </ol>
</li>
</ol>
====================================================================================================================    



##  Revision History <a name="Revision"></a> 

| Name	| Date	| Reason For Changes	| Version |
| ----------------------------- | ------------- | ---------------------------- | ---------- |
| Mahdi Judeh	| 11/2/16	| Worked on introduction and main architecture |	0.1 |
| Ben Bordelon	| 11/2/16	| Began writing “7. Database View” |	0.2 |
| Harry Ly	| 11/2/16	| Worked on User Interfaces |	0.3 |
| Blake Roussel & Alex Pagan	| 11/2/16	|Use case diagram |	0.4 |
| Mahdi Judeh	| 11/2/16	| Began writing subsystems architecture |	0.5 |
| Alex Pagan	| 11/2/16	| Wrote parts of catalog |	0.6 |


=================================================================================================================
## 1.	Introduction <a name="intro"></a> 
   1.	Purpose of this Document <a name="purpose"></a> 
The purpose of this document is to describe the implementation of the ChallengeMe! website based on the description of the site given by the software requirements specification(SRS) document. Its main purpose is to provide a framework for the classes and functions that we may need.
   2.	Scope <a name="scope"></a> 
ChallengeMe is a website that allows users to vote on, participate in, and submit challenges. Challenge Me aims to provide users with a medium to show off their skills and talents to their friends and people around the world. The website will frequently update with user-submitted challenges and developer submitted challenges in order to constantly supply users with challenges to watch and participate in.
   3.	References <a name="references"></a> 
IEEE Standard 1016 : Software design Specification https://www.ieee.org/ 
ChallengeMe! Software Requirements Specifications Document	
   4.	Overview of Document <a name="docOverview"></a> 
        1. Introduction: Gives a brief introduction to the project including its purpose,scope, references and overview of the total document. 
        2. Main System Architecture: Gives a view of the design of the main system, \subsystems, and how they relate in the case of the final product. 
        3. Sub¬systems Architecture: Describes the design of each individual subsystem. 
        4. Rationales for Choices: This section discusses the reasons and thought behind the design of each subsystem within the application. 
        5. Development View: Provides the general layout for the organization of the project. 
        6. Physical View: Gives an example of how the system will be set up.
        7. Database View: Gives an example of how the database is set up and the tables used in it
        8. Work Assignment View: This section presents each major task in the application and which developers have been tasked with completing it.
        9. Element Catalog: This section is a reference for all symbols used within the document. 
        10. User Interface: This section visually represents and describes each important aspect in the design of the graphical user interface. 
======================================================================================================================================
## 2.	Main System Architecture <a name="mainSys"></a> 
   1.	Complete System Overview <a name="compOverview"></a> 
        1.	Overview
ChallengeMe! is a project which at its center desires to be a location for users to participate in challenges and submit challenges for others to complete in an internet community. It is intended to be simple to navigate and have a user interface that does not require over 10 minutes to learn. The website will provide a view of all of the available challenges and allow users to sort between challenges based on their popularity, newness, or trendiness. The user can click on a challenge to view it. The user can sign up to gain the ability to vote on challenges and submit challenges, as well as vote on videos and submit videos. Once logged in, the user will have the previously mentioned features as well the ability to logout and view their account information. If the user sees an illegal post that user can report that challenge/video. Moderator users should be able to purge posts with a click and the system should remove the post from a database. The user will also have the option to compare their total points against other users to check their ranking.
        2.	View
This will provide the entire graphical user interface. These are the subsystems used: view, submit challenge, submit video, vote challenge, vote video, login, logout, signup, report, delete, and sort challenges(hot, top, new).  
        3.	Model
This will store all of the information relevant to the how the view is displayed. This will contain all of the user’s account information in our service, all of the challenges submitted to the website, and all of the videos submitted. This will also contain the html and css of the webpage.
        4.	Controller
This architectural component will make the calls for data to update the view and take inputs from the view to update the model.
   2.	Application Use Case <a name="appUse"></a> 
The ChallengeMe! website will have three types of users; a user that is not logged in, a user that is logged in, and a Moderator. A guest user has the ability to view challenges and watch submission videos.  A user with an existing account is the primary user and will be able to post and vote on challenges and videos, and be able to log out. A logged in user also inherits all of the abilities of a non-logged in user. The moderator will have all of the abilities of a user with an account as well as the ability to terminate users, challenges, and video submissions.  
3.	Sub-systems Architecture <a name="subSys"></a> 
    1.	Database
This subsystem is used by the Model component of our main architecture. This will store a user table, challenge table, and video table. See 7.1 for a visual representation of this component and the contents of each table in the database.
    2.	Web-application Data
This subsystem contains the html and css used to style the view.
    3.	Update Database
This subsystem is part of the Controller component of our main architecture. This is called whenever the view tells the controller that the user has made a request that requires one of the tables in the database to be updated.
    4.	Update View
This is also part of the Controller component of our main architecture. After a database has been updated the 
    5.	Submit
This subsystem is responsible for all the submits sent from the view to the controller requesting an update/action. This will include the classes for submitting challenges, submitting videos.
    6.	Vote
This subsystem is part of the view and it is responsible for locally incrementing the vote values and letting the controller know that changes have occurred in the view that require changes in the database.
    7.	Delete
This subsystem is part of the view and it is responsible for removing challenges, users, and videos. Once a user completes a delete action the view will let the database 
    8.	Account
Part of the view and is responsible for allowing users to signup, login, and logout. Once a user makes any of these actions inform the controller that the user’s account information needs to be saved or verified depending on the action that is taken.
4.	Rationale for each Architectural Choice <a name="rationale"></a> 
The reason we picked a model-view-controller architecture is because our system is not complex and this system describes it efficiently. Our web application would be a semi dynamic website. At any point in time if multiple users all arrive to a site at the exact same moment they will all see the same web page. If a any of these users vote or submit a challenge then the web page will update for any user who now makes a request for our webpage.
5.	Development View <a name="developView"></a> 
6.	Physical View <a name="physView"></a> > 
The ChallengeMe! website is presented to the user through the use of personal devices such as computers, smart phones, and tablets. The website also utilizes a database containing user, challenge, and video information in order to present it to the user. The website’s database will make use of Google’s Cloud SQL Platform for hosting purposes.
7.	Database View <a name="databaseView"></a> 
The application will utilize a database created in MySQL in order to keep track of all user account information(MySQL encrypts password data), video and challenge submissions, and users’ votes. The database will be hosted online using Google’s Cloud SQL Platform. In order for the user to be able to access and alter information contained in the database, an internet connection is required. This means that the application cannot be used in an offline environment. The purpose of the database is enable users to create their own user accounts, allowing them to submit and store both challenges for other users and video replies to said challenges, in a secure and reliable fashion. 
 
Any attributes labeled “(hidden)” are not going to be viewable by users and are solely for organizational purposes.	
8.	Work Assignment View <a name="workView"></a> 
	
Front End(website) / User interface / HTML	Harry Ly, Mahdi Judeh
Backend / Database / Server / SQL	Ben Bordelon, Blake Roussel, Alexander Pagan

Work for the system has been assigned based on team members familiarity with technologies used for a certain aspect of the build. The front end of the system, having to do with UI, was assigned to Mahdi, who has experience with web development. Harry took interest in designing the front end and wanted to take the opportunity to learn web design. Ben was assigned to back-end systems wirtten in PHP and SQL. Blake was also tasked with databases because he has experience with SQL. Alexander helped with designing the database and documentation.
9.	Element Catalog <a name="elementCatalog"></a> 
    1.	Logical View Diagram <a name="developView"></a> 
    Element	Description
 	Box to describe entities such as Model, Controller, and View
 	Arrow to describe the logical flow
 	Ellipses to describe actions invoked by entities
	Bullets to describe subsystems
    2.	Physical View Diagram <a name="physC"></a> 
Element	Description
 	Box to describe devices, servers, databases, and platforms
                         	Pointer to link boxes
 	Represents the database
 	Represents the Web Application
 	Represents the devices used to access the application
 	Represents Google’s SQL Cloud Platform
    3.	Development View Diagram<a name="developC"></a> 
Element	Description
folder	A directory/file
 	Contains relationship
    4.	User Interface Diagram <a name="userC"></a> 
Element	Description
             	Actor/User of the web application
                    	Action pointer 
            	Class to describe each UI
    5.	Database Diagram <a name="databaseC"></a> 
Element	Description
 	Boxes indicates data tables
Bolded Underlined Words	Indicates primary keys
 	Arrows to indicate relationship between primary and foreign keys
10.	User Interfaces <a name="UI"></a> 
    1.	User Interface Description <a name="UIDes"></a> 
	When the user visits our web domain they will be presented with the main webpage. 
They would have the option of logging into their already made account, sign up for a new account, or continue as a guest with certain features unavailable. If the user has to sign up, they would be asked to create a username, password, and verify their password. If the user logs in, they would be prompted to enter their username and password. Logging into their account gives them the ability to like or dislike videos and submit videos as well as challenge ideas.  If the user continues as guest, they would be limited on the amount of features available to them. They would only be able to browse the site.
    2. 	User Interface Diagram <a name="UIdia"></a> 
 
	


