# **Software Requirements Specification**

#
## for

# ChallengeMe

**Version 1.0**

**Prepared by**  **Benjamin Bordelon, Blake Roussel, Mahdi Judeh**

**LSU**

**October 21, 2016**

**Table of Contents**

**Table of Contents       **

**Revision History       **

**1.        Introduction       **

1.1        Purpose

1.2        Document Conventions

1.3        Intended Audience and Reading Suggestions

1.4        Product Scope

1.5        References

**2.        Overall Description       **

2.1        Product Perspective

2.2        Product Functions

2.3        User Classes and Characteristics

2.4        Operating Environment

2.5        Design and Implementation Constraints

2.6        User Documentation

2.7        Assumptions and Dependencies

**3.        External Interface Requirements       **

3.1        User Interfaces

3.2        Hardware Interfaces

3.3        Software Interfaces

3.4        Communications Interfaces

**4.        System Features       **

4.1        System Feature 1

4.2        System Feature 2 (and so on)

**5.        Other Nonfunctional Requirements       **

5.1        Performance Requirements

5.2        Safety Requirements

5.3        Security Requirements

5.4        Software Quality Attributes

5.5        Business Rules

**6.        Other Requirements       **

**Appendix A: Glossary       **

**Appendix B: Analysis Models       **

**Appendix C: To Be Determined List       **

**Revision History**

| **Name** | **Date** | **Reason For Changes** | **Version** |
| --- | --- | --- | --- |
|   |   |   |   |
| Mahdi Judeh | 10/20/16 | Adding the External Interface requirements | 1.0 |
| Benjamin Bordelon | 10/20/16 | Adding &quot;Other Nonfunctional Requirements&quot; | 1.1 |



**1. Introduction**
   **1.1 Purpose**

_The product is a web based application that allows users to create and view different challenges created by other users. It would also allow the users to submit the videos of them attempting the challenges._

   **1.2 Document Conventions**

_This document will be following the default typographical conventions of the_ _IEEE Std 830-1998._

_Italicized red will be used to address our documentation._


   **1.3 Intended Audience and Reading Suggestions**

_The intended audience is anyone above the age of 18 that wants to do random challenges for self satisfaction or to show their friends. The rest of the SRS contains the overall description, external interface requirements, system features, and other nonfunctional requirements and is organized based on the table of contents, in numerical order._


   **1.4 Product Scope**


_Challenge Me is a web-based service that allows users to interact and have fun with random challenges. Challenge Me aims to be a website that people would frequently check whenever they&#39;re bored or want to do something with their friends._

  **1.5 References**


**2. Overall Description**
   **2.1 Product Perspective**

_The software that is being developed is a web-based social media game that allows users to submit and respond to challenges that are communally created. The website is a standalone entity and is the first of its kind. The website relies on a web host and domain to host the site and a server to hold the database that stores information such as usernames, password, as well as other user data. The software combines elements of both a social media application and a game application_


   **2.2 Product Functions**

·         _Users can create an account that tracks users post, points and submission and stores them in a database._

·         _Users can post a challenge to other users of the site._

·         _Keeps track of a challenges popularity in the form of points voted by user base._

·         _Users can upvote or downvote on challenges that are displayed on a &quot;Hot&quot;, &quot;Top&quot;, or &quot;New&quot; page._

·         _Accepts text input from users posting a challenge and organizes the challenge based on the number of upvotes._

·         _System accepts a video submission to a challenge in the form of a hyperlink and displays them via youtube embedded system._

·         _System must track if a submission video is worthy of challenge description by keeping track of a satisfaction value as voted by users._

·        _System should be able to play submission videos and prompt the user to continue to the next submission._




   **2.3 User Classes and Characteristics**

_The Challenge Me site only has two basic user classes, a user with an account and a user without an account. A user with an account has access to all of the features the site has to offer such as uploading, voting, and responding. On the other hand a user without an account can access and read challenges as well as view submitted responses, but cannot vote on any challenges or submit anything on the site. ._



   **2.4 Operating Environment**

_System can function using any web browser using a windows, mac, or linux machine._



   **2.5 Design and Implementation Constraints**



   **2.6 User Documentation**

_The goal of the system is to use familiar and intuitive design and layout. It follow basic design layout  _



   **2.7 Assumptions and Dependencies**

_The system assumes that the user has a stable internet connection and has basic knowledge on internet useage. The system also relies on the input of the users to function as described. If the users do not give their input the site may not display the best challenges or submission videos properly. In addition the system assumes the user base will be honest. If the users aren&#39;t honest it may result in an inflation in the point system. For example, if users decide to accept another user&#39;s video submission that doesn&#39;t meet challenge requirements then it results in users getting undeserved points.  _


 **3. External Interface Requirements**
   **3.1 User Interfaces**

_The user interface will be a web page accessible from any browser. Users will be presented a webpage with a multiple buttons and tabs allowing the user to navigate the site.The user interface shall be implemented in HTML, CSS, BootStrap, and JS._


   **3.2 Hardware Interfaces**


_The user interface requires the user to have access to a device with the ability to connect to the internet. The user&#39;s device must also have a way to display the web page,  typically by a screen._


   **3.3 Software Interfaces**

_This system will operate with an SQL database. The database will send to the system the challenges and links to the videos currently trending, as well as the links to the top videos of all time, and links to newly added videos. If the user is requesting to login the system will pull from the database the associated password with the user&#39;s account. The system will send the submitted challenges and videos to the database. The system will recieve design aspects from the Bootstrap framework. The system will retrieve videos from Youtube._


   **3.4 Communications Interfaces**

_The system shall use HTTP for communication over the internet._

 **4. System Features**



   
**5. Other Nonfunctional Requirements**
   **5.1 Performance Requirements**

      **1. Updating Database**

        Both the data entered by the user for their account and the integer number for upvotes/downvotes must be stored in the database and usable within a reasonable amount of time. Ideally the system should update the database in under 3 seconds after data submission.

      **2.  Calculating and Allotting Point Worth**

**       ** The system must be able to calculate the worth of a challenge through a specified algorithm and allot the appropriate points to users who successfully complete a challenge, all within a reasonable amount of time. The user should be able to view their updated current point total(including the  specified challenge&#39;s calculated point worth) within 5 seconds of being awarded the points.



   **5.2 Safety Requirements**

   **1. Dangerous/Inappropriate Challenges**

If a user submits a dangerous/inappropriate challenge, users attempting to complete the challenge could hurt themselves in their attempt. Therefore, challenge submissions must be moderated to address challenges deemed too dangerous or inappropriate.

   **2. Age Requirement**

In order to ensure that all users of the program use good judgement to prevent injury/loss when submitting/completing challenges, an age requirement of 18 will be implemented in order to create an account. This will be described in the user agreement.

   **3. Property Damage/Loss**

If a user submits a challenge involving an individual&#39;s property or public property, damage or loss of said property could be a result. Therefore, our program will present an agreement to the user upon creating an account regarding possible loss, damage, or harm to an individual or property that could result from the use of our program. This will shift liability to the user upon agreement.



  **5.3 Security Requirements**

     **1. Account Security**

**       ** Due to sensitive information being contained within the user database, it must be ensured that each user is the only user able to access his own account. The user login feature will ensure a user&#39;s information remains private by requiring validation of a user&#39;s username and password. In order to prevent access from unwanted users(possibly on a public computer), a forced log-out will be implemented to log the user out as soon as the web page is closed.



  **5.4 Software Quality Attributes**

     **1. Usability**

**       ** Product usability is essential to the success of our product. Navigating the GUI(Graphical User Interface) of the product should be easy, simple, and intuitive. We will implement a home page(with tabs for newest, hot, and most popular challenge) and a user account page for each user. These pages should each be able to be accessed in 1 click, assuming the user is already logged in to his account. This requires &quot;Home&quot; and &quot;My Account&quot; buttons to be available to the user from any location on the website that redirects the user to the appropriate page.

   ** 2. Availability**

    The program excluding the user database(written in SQL) will be written in HTML. This allows the development team to utilize live updates, thereby minimizing product downtime. Since updating the database is the only scenario where the server would experience downtime, it is estimated that the product can expect about 99% availability. In other words, the user should expect server downtime due to an update about once every 3 months or less.

      **3. Robustness**

In accordance with the 18+ age policy implemented for the product, the user must provide his age when he creates an account in the user database. Assuming the user is entering his true age, the safety of underage users rely on the robustness of the software. The prevention of identical usernames is also relevant when considering software robustness. To ensure our system operates appropriately when given invalid or unacceptable input, the developers should utilize fuzz testing when coding the user database, the account creation module, and challenge creation module.

  ** 4. Interoperability**

**       ** The product utilizes an SQL database to store user information, and transfer this information in real time to a website coded in HTML containing the GUI. Therefore it is essential that these two major software components are able to cooperate in a way that minimizes user inconvenience. The communication between the two components must be efficient and effortless for the user. Updating user/vote data should be near instant(under 3 seconds).


   **5.5 Business Rules**

      **1. Guest User**

**       ** Guest users will not have all of the same available actions that product members will receive. Guests users are able to watch video submissions in reply to challenges and navigate the home page to choose whichever challenge thread is desired.

   **   2. Member User**

**       ** Member users will be able to explore the home page and watch video submissions for challenges just as guest users can do. In addition, members can themselves create and submit challenges and upload video submissions in reply to challenges. Members will be able to take part in the voting system regarding challenges and video submissions.


  **6. Other Requirements**


**Appendix A: Glossary**

**Appendix C: To Be Determined List**

_&lt;Collect a numbered list of the TBD (to be determined) references that remain in the SRS so they can be tracked to closure.&gt;_
