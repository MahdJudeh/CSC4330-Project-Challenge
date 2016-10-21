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



**1.** ** Introduction**
   **1.1** ** Purpose**

_&lt;Identify the product whose software requirements are sp __e__ cified in this document, including the revision or release number. Describe the scope of the product that is covered by this SRS, particularly if this SRS describes only part of the system or a single subsystem.&gt;_

_The product is a web based application that allows users to create and view different challenges created by other users. It would also allow the users to submit the videos of them attempting the challenges._

   **1.2** ** Document Conventions**

_&lt;Describe any standards or typographical conventions that were followed when writing this SRS, such as fonts or highlighting that have special significance. For example, state whether priorities  for higher-level requirements are assumed to be inherited by detailed requirements, or whether every requirement statement is to have its own priority.&gt;_

_This document will be following the default typographical conventions of the_ _IEEE Std 830-1998._

_Italicized red will be used to address our documentation._


   **1.3** ** Intended Audience and Reading Suggestions**

_&lt;Describe the different types of reader that the document is intended for, such as developers, project managers, marketing staff, users, testers, and documentation writers. Describe what the rest of this SRS contains and how it is organized. Suggest a sequence for reading the document, beginning with the overview sections and proceeding through the sections that are most pertinent to each reader type.&gt;_

_The intended audience is anyone above the age of 18 that wants to do random challenges for self satisfaction or to show their friends. The rest of the SRS contains the overall description, external interface requirements, system features, and other nonfunctional requirements and is organized based on the table of contents, in numerical order._


   **1.4** ** Product Scope**

_&lt;Provide a short description of the software being specified and its purpose, including relevant benefits, objectives, and goals. Relate the software to corporate goals or business strategies. If a separate vision and scope document is available, refer to it rather than duplicating its contents here.&gt;_

_Challenge Me is a web-based service that allows users to interact and have fun with random challenges. Challenge Me aims to be a website that people would frequently check whenever they&#39;re bored or want to do something with their friends._

  **1.5** ** References**

_&lt;List any other documents or Web addresses to which this SRS refers. These may include user interface style guides, contracts, standards, system requirements specifications, use case documents, or a vision and scope document. Provide enough information so that the reader could access a copy of each reference, including title, author, version number, date, and source or location.&gt;_

- **●●** _Use case documents_
- **●●**

**2.** ** Overall Description**
   **2.1** ** Product Perspective**

_The software that is being developed is a web-based social media game that allows users to submit and respond to challenges that are communally created. The website is a standalone entity and is the first of its kind. The website relies on a web host and domain to host the site and a server to hold the database that stores information such as usernames, password, as well as other user data. The software combines elements of both a social media application and a game application_

_&lt;Describe the context and origin of the product being specified in this SRS. For example, state whether this product is a follow-on member of a product family, a replacement for certain existing systems, or a new, self-contained product. If the SRS defines a component of a larger system, relate the requirements of the larger system to the functionality of this software and identify interfaces between the two. A simple diagram that shows the major components of the overall system, subsystem interconnections, and external interfaces can be helpful.&gt;_


   **2.2** ** Product Functions**

·         _Users can create an account that tracks users post, points and submission and stores them in a database._

·         _Users can post a challenge to other users of the site._

·         _Keeps track of a challenges popularity in the form of points voted by user base._

·         _Users can upvote or downvote on challenges that are displayed on a &quot;Hot&quot;, &quot;Top&quot;, or &quot;New&quot; page._

·         _Accepts text input from users posting a challenge and organizes the challenge based on the number of upvotes._

·         _System accepts a video submission to a challenge in the form of a hyperlink and displays them via youtube embedded system._

·         _System must track if a submission video is worthy of challenge description by keeping track of a satisfaction value as voted by users._

·        _System should be able to play submission videos and prompt the user to continue to the next submission._

- **●●** _Calculates appropriate point value for a submission._

_&lt;Summarize the major functions the product must perform or must let the user perform. Details will be provided in Section 3, so only a high level summary (such as a bullet list) is needed here. Organize the functions to make them understandable to any reader of the SRS. A picture of the major groups of related requirements and how they relate, such as a top level data flow diagram or object class diagram, is often effective.&gt;_


   **2.3** ** User Classes and Characteristics**

_The Challenge Me site only has two basic user classes, a user with an account and a user without an account. A user with an account has access to all of the features the site has to offer such as uploading, voting, and responding. On the other hand a user without an account can access and read challenges as well as view submitted responses, but cannot vote on any challenges or submit anything on the site. ._

_&lt;Identify the various user classes that you anticipate will use this product. User classes may be differentiated based on frequency of use, subset of product functions used, technical expertise, security or privilege levels, educational level, or experience. Describe the pertinent characteristics of each user class. Certain requirements may pertain only to certain user classes. Distinguish the most important user classes for this product from those who are less important to satisfy.&gt;_


   **2.4** ** Operating Environment**

_System can function using any web browser using a windows, mac, or linux machine._

_&lt;Describe the environment in which the software will operate, including the hardware platform, operating system and versions, and any other software components or applications with which it must peacefully coexist.&gt;_


   **2.5** ** Design and Implementation Constraints**

_&lt;Describe any items or issues that will limit the options available to the developers. These might include: corporate or regulatory policies; hardware limitations (timing requirements, memory requirements); interfaces to other applications; specific technologies, tools, and databases to be used; parallel operations; language requirements; communications protocols; security considerations; design conventions or programming standards (for example, if the customer&#39;s organization will be responsible for maintaining the delivered software).&gt;_


   **2.6** ** User Documentation**

_The goal of the system is to use familiar and intuitive design and layout. It follow basic design layout  _

_&lt;List the user documentation components (such as user manuals, on-line help, and tutorials) that will be delivered along with the software. Identify any known user documentation delivery formats or standards.&gt;_


   **2.7** ** Assumptions and Dependencies**

_The system assumes that the user has a stable internet connection and has basic knowledge on internet useage. The system also relies on the input of the users to function as described. If the users do not give their input the site may not display the best challenges or submission videos properly. In addition the system assumes the user base will be honest. If the users aren&#39;t honest it may result in an inflation in the point system. For example, if users decide to accept another user&#39;s video submission that doesn&#39;t meet challenge requirements then it results in users getting undeserved points.  _

_&lt;List any assumed factors (as opposed to known facts) that could affect the requirements stated in the SRS. These could include third-party or commercial components that you plan to use, issues around the development or operating environment, or constraints. The project could be affected if these assumptions are incorrect, are not shared, or change. Also identify any dependencies the project has on external factors, such as software components that you intend to reuse from another project, unless they are already documented elsewhere (for example, in the vision and scope document or the project plan).&gt;_

 **3.** ** External Interface Requirements**
   **3.1** ** User Interfaces**

_&lt;Describe the logical characteristics of each interface between the software product and the users. This may include sample screen images, any GUI standards or product family style guides that are to be followed, screen layout constraints, standard buttons and functions (e.g., help) that will appear on every screen, keyboard shortcuts, error message display standards, and so on. Define the software components for which a user interface is needed. Details of the user interface design should be documented in a separate user interface specification.&gt;_

_The user interface will be a web page accessible from any browser. Users will be presented a webpage with a multiple buttons and tabs allowing the user to navigate the site.The user interface shall be implemented in HTML, CSS, BootStrap, and JS._


   **3.2**** Hardware Interfaces**

_&lt;Describe the logical and physical characteristics of each interface between the software product and the hardware components of the system. This may include the supported device types, the nature of the data and control interactions between the software and the hardware, and communication protocols to be used.&gt;_

_The user interface requires the user to have access to a device with the ability to connect to the internet. The user&#39;s device must also have a way to display the web page,  typically by a screen._


   **3.3**** Software Interfaces**

_&lt;Describe the connections between this product and other specific software components (name and version), including databases, operating systems, tools, libraries, and integrated commercial components. Identify the data items or messages coming into the system and going out and describe the purpose of each. Describe the services needed and the nature of communications. Refer to documents that describe detailed application programming interface protocols. Identify data that will be shared across software components. If the data sharing mechanism must be implemented in a specific way (for example, use of a global data area in a multitasking operating system), specify this as an implementation constraint.&gt;_

_This system will operate with an SQL database. The database will send to the system the challenges and links to the videos currently trending, as well as the links to the top videos of all time, and links to newly added videos. If the user is requesting to login the system will pull from the database the associated password with the user&#39;s account. The system will send the submitted challenges and videos to the database. The system will recieve design aspects from the Bootstrap framework. The system will retrieve videos from Youtube._


   **3.4**** Communications Interfaces**

_&lt;Describe the requirements associated with any communications functions required by this product, including e-mail, web browser, network server communications protocols, electronic forms, and so on. Define any pertinent message formatting. Identify any communication standards that will be used, such as FTP or HTTP. Specify any communication security or encryption issues, data transfer rates, and synchronization mechanisms.&gt;_

_The system shall use HTTP for communication over the internet._

 **4.**** System Features**

_&lt;This template illustrates organizing the functional requirements for the product by system features, the major services provided by the product. You may prefer to organize this section by use case, mode of operation, user class, object class, functional hierarchy, or combinations of these, whatever makes the most logical sense for your product.&gt;_


   **4.1**** System Feature 1** User Login

_&lt;Don&#39;t really say &quot;System Feature 1.&quot; State the feature name in just a few words.&gt;_

4.1.1        Description and Priority

_&lt;Provide a short description of the feature and indicate whether it is of High, Medium, or Low priority. You could also include specific priority component ratings, such as benefit, penalty, cost, and risk (each rated on a relative scale from a low of 1 to a high of 9).&gt;_

                An interface that allows the user to log into an already created account which unlocks the voting features of the website. Being logged in is not a requirement of the site to function but is required to have any sway on the community of the site. Priority - medium

4.1.2        Stimulus/Response Sequences

_&lt;List the sequences of user actions and system responses that stimulate the behavior defined for this feature. These will correspond to the dialog elements associated with use cases.&gt;_

_       _ User is prompted to login with a username and password that match. User types in their username and password and clicks &quot;log in&quot;. The system verifies that the account information is correct. If correct system gives full account access to user.

_       _

4.1.3        Functional Requirements

_&lt;Itemize the detailed functional requirements associated with this feature. These are the software capabilities that must be present in order for the user to carry out the services provided by the feature, or to execute the use case. Include how the product should respond to anticipated error conditions or invalid inputs. Requirements should be concise, complete, unambiguous, verifiable, and necessary. Use &quot;TBD&quot; as a placeholder to indicate when necessary information is not yet available.&gt;_

_       _ 1.SQL database to store the user&#39;s password and username.

2.Retrieving from the database.

If an entered username and password do not match the system will handle this as an error and return &quot;password incorrect or username does not exist.

_&lt;Each requirement should be uniquely identified with a sequence number or a meaningful tag of some kind.&gt;_

REQ-1:

REQ-2:


   **4.2**
**5.** ** Other Nonfunctional Requirements**
   **5.1** ** Performance Requirements**

      **1.** ** Updating Database**

        Both the data entered by the user for their account and the integer number for upvotes/downvotes must be stored in the database and usable within a reasonable amount of time. Ideally the system should update the database in under 3 seconds after data submission.

      **2.  Calculating and Allotting Point Worth**

**       ** The system must be able to calculate the worth of a challenge through a specified algorithm and allot the appropriate points to users who successfully complete a challenge, all within a reasonable amount of time. The user should be able to view their updated current point total(including the  specified challenge&#39;s calculated point worth) within 5 seconds of being awarded the points.

_&lt;If there are performance requirements for the product under various circumstances, state them here and explain their rationale, to help the developers understand the intent and make suitable design choices. Specify the timing relationships for real time systems. Make such requirements as specific as possible. You may need to state performance requirements for individual functional requirements or features.&gt;_


   **5.2** ** Safety Requirements**

   **1.** ** Dangerous/Inappropriate Challenges**

If a user submits a dangerous/inappropriate challenge, users attempting to complete the challenge could hurt themselves in their attempt. Therefore, challenge submissions must be moderated to address challenges deemed too dangerous or inappropriate.

   **2.** ** Age Requirement**

In order to ensure that all users of the program use good judgement to prevent injury/loss when submitting/completing challenges, an age requirement of 18 will be implemented in order to create an account. This will be described in the user agreement.

   **3.** ** Property Damage/Loss**

If a user submits a challenge involving an individual&#39;s property or public property, damage or loss of said property could be a result. Therefore, our program will present an agreement to the user upon creating an account regarding possible loss, damage, or harm to an individual or property that could result from the use of our program. This will shift liability to the user upon agreement.

_&lt;Specify those requirements that are concerned with possible loss, damage, or harm that could result from the use of the product. Define any safeguards or actions that must be taken, as well as actions that must be prevented. Refer to any external policies or regulations that state safety issues that affect the product&#39;s design or use. Define any safety certifications that must be satisfied.&gt;_

1.
  1. **5.3**** Security Requirements**

1. **1.**** Account Security**

**       ** Due to sensitive information being contained within the user database, it must be ensured that each user is the only user able to access his own account. The user login feature will ensure a user&#39;s information remains private by requiring validation of a user&#39;s username and password. In order to prevent access from unwanted users(possibly on a public computer), a forced log-out will be implemented to log the user out as soon as the web page is closed.

_&lt;Specify any requirements regarding security or privacy issues surrounding use of the product or protection of the data used or created by the product. Define any user identity authentication requirements. Refer to any external policies or regulations containing security issues that affect the product. Define any security or privacy certifications that must be satisfied.&gt;_


  **5.4**** Software Quality Attributes**

     **1.** ** Usability**

**       ** Product usability is essential to the success of our product. Navigating the GUI(Graphical User Interface) of the product should be easy, simple, and intuitive. We will implement a home page(with tabs for newest, hot, and most popular challenge) and a user account page for each user. These pages should each be able to be accessed in 1 click, assuming the user is already logged in to his account. This requires &quot;Home&quot; and &quot;My Account&quot; buttons to be available to the user from any location on the website that redirects the user to the appropriate page.

   ** 2. Availability**

        The program excluding the user database(written in SQL) will be written in HTML. This allows the development team to utilize live updates, thereby minimizing product downtime. Since updating the database is the only scenario where the server would experience downtime, it is estimated that the product can expect about 99% availability. In other words, the user should expect server downtime due to an update about once every 3 months or less.

      **3. Robustness**

In accordance with the 18+ age policy implemented for the product, the user must provide his age when he creates an account in the user database. Assuming the user is entering his true age, the safety of underage users rely on the robustness of the software. The prevention of identical usernames is also relevant when considering software robustness. To ensure our system operates appropriately when given invalid or unacceptable input, the developers should utilize fuzz testing when coding the user database, the account creation module, and challenge creation module.

  ** 4. Interoperability**

**       ** The product utilizes an SQL database to store user information, and transfer this information in real time to a website coded in HTML containing the GUI. Therefore it is essential that these two major software components are able to cooperate in a way that minimizes user inconvenience. The communication between the two components must be efficient and effortless for the user. Updating user/vote data should be near instant(under 3 seconds).

_&lt;Specify any additional quality characteristics for the product that will be important to either the customers or the developers. Some to consider are: adaptability, availability, correctness, flexibility, interoperability, maintainability, portability, reliability, reusability, robustness, testability, and usability. Write these to be specific, quantitative, and verifiable when possible. At the least, clarify the relative preferences for various attributes, such as ease of use over ease of learning.&gt;_

   **5.5**** Business Rules**

      **1.** ** Guest User**

**       ** Guest users will not have all of the same available actions that product members will receive. Guests users are able to watch video submissions in reply to challenges and navigate the home page to choose whichever challenge thread is desired.

   **   2. Member User**

**       ** Member users will be able to explore the home page and watch video submissions for challenges just as guest users can do. In addition, members can themselves create and submit challenges and upload video submissions in reply to challenges. Members will be able to take part in the voting system regarding challenges and video submissions.

_&lt;List any operating principles about the product, such as which individuals or roles can perform which functions under specific circumstances. These are not functional requirements in themselves, but they may imply certain functional requirements to enforce the rules.&gt;_

  **6.** ** Other Requirements**

_&lt;Define any other requirements not covered elsewhere in the SRS. This might include database requirements, internationalization requirements, legal requirements, reuse objectives for the project, and so on. Add any new sections that are pertinent to the project.&gt;_

**Appendix A: Glossary**

_&lt;Define all the terms necessary to properly interpret the SRS, including acronyms and abbreviations. You may wish to build a separate glossary that spans multiple projects or the entire organization, and just include terms specific to a single project in each SRS.&gt;_

**Appendix B: Analysis Models**

_&lt;Optionally, include any pertinent analysis models, such as data flow diagrams, class diagrams, state-transition diagrams, or entity-relationship diagrams_.&gt;

**Appendix C: To Be Determined List**

_&lt;Collect a numbered list of the TBD (to be determined) references that remain in the SRS so they can be tracked to closure.&gt;_
