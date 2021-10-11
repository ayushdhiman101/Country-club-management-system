# country-club-management-system

#### Please find the PDF report attached 

### **Step by Step Guide on how to use our Country Club Management System**
**Pre-Requisites**
Make sure you have Git installed on your computer - [https://git-scm.com/downloads](https://git-scm.com/downloads)
Make sure you have XAMPP server installed -[https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
**How to copy your repository**
1. Create a folder on your desktop called CodingChallenge2021.
3. Open up Command Line on Windows or Terminal on Mac OS X
4.  In Command Line/Terminal Navigate to the CodingChallenge2021 folder on your Desktop by typing in –
 `$ cd Desktop/Count club magaement system`
5. Once you’re in the folder clone your GitHub repository by executing the following command –
 `$ git clone <insert link of your GitHub Repository here, without the brackets>`
6. You should now have the repository checked out locally.

**How to copy the backend**

1. For the back-end i used pHpMyAdmin which stores the login details for both the user and admin. There are a total of 18 tables that store all the neceassay details 
2. Upload the .sql present in `SQL DATABASE` on the XAMPP server.


##### You are now good to go, launch `loginhtmlcopy.php` webpage from htdocs and enjoy our services 


## INTRODUCTION
Club Management system is a process of managing a country
club. Currently, the process of managing the sports club is file
based and manual. These obsolete management systems slow
down functionality of the club. For example, a new member wants
to join the club he/she has to visit the club and fill up the
registration form. The form then passes through a hierarchy of club
administrators before approval. It takes time as well as effort form
a user’s perspective. This is just a single case. Same problem
persists in all the major operation of the club. The proposed club
management system is fully automated and requires just one
person from the club to maintain the functionalities of the club. The
user can register for new membership, members can see their
details, register for sports activities, register for competitions, book
hall/ground etc. No need of clumsy paper-work. No need to be
physically presence for small activities. No manual processing of
requests.
## ABSTRACT
This club management system which we have made has a great deal of
advantages over the other existing club database management.
This club database management functionality can be performed under
the supervision of only a single person who is one of the representatives
of the administration. He/she can control all the information and
functionalities of the club single-handedly.
The advantage it provides is that the complete storage and details of
each and everything a person and his family are utilizing in the club and
the reduces the clumsy paperwork and hectic run around to book
something if required.

## E-R DIAGRAM

![image](https://user-images.githubusercontent.com/61506157/136733101-e6127901-f66d-475d-b604-2a6ac924bbbc.png)

### ENTITIES: 
Members, Events, Movies, Party Hall, Sports, Teams,
Administration ,Advertisement ,Blog ,Competition ,Bill.

### RELATIONS: 
Can Buy, Can Watch, Invitee, Can Take, Can Play,
Authorizes, Can Certify, Can Participate, Can Create, Pay.

## ATTRIBUTES:
1)MEMBERS-Member Name, MemberI.D, Date of birth, Date of Joining,
Sports I.D, Sex, Status, Image.
2)BILLS-Transaction Number, Reason, MemberI.D.
3)EVENTS-EventI.D, Event_Name, Event_Time, Cost_of_each_ticket,
Event_Date, MemberI.D.
4)MOVIES-Movie Number, Number of tickets booked, Movie Date,
Movie Time, Amount of each ticket, MemberI.D.
5)PARTY HALL-Date of Function, Party HallI.D, Time of Function
,Function Name ,MemberI.D.
6)SPORTS-Sports Name, SportsI.D, Cost.
7)TEAMS-Team Number, Team I.D, Team Name, MemberI.D, Sports
I.D.
8)ADMINISTRATION- AdminI.D, Field of Employment, Name, Member
I.D.
9)ADVERTISEMENT-Type of Advertisement, Cost, Add I.D, Number of
People it is going to reach, Admin I.D.
10)BLOG-Blog I.D, Stars, Remark, Author Name, Admin I.D.
11)COMPETITIONS-Competition Name, Competition I.D, Competition
Time, Sports I.D.

## CONCLUSION
Project Club Management is a great grip over the existing system. The
existing system is mainly based on file-based systems.The file-based
system takes a greater part of the storage and is mainly very tedious to
work on it. The redundancy factor increases as we keep on approaching
a file-based way. To find simple data using the existing approach we
possibly make us drive through the hell lot of other stuff. To retrieve
some information from the files we need to great stuff of coding.
Similarly, there are many such issues that we face while using these old
file-based approaches. So our project just eradicates such difficulties
and makes it highly user friendly. Dbms takes a small amount of part of
the storage. It is made in such a way that it can be handled by a single
person. Our club management project is literally a great application that
can deal with those problems easily. It also has many other benefits over
the existing ones such as it can be done while sitting at home, you can
easily make various updates and deletes in the application then and
there itself. It is a multi affiliated club which nowadays are missing in the
various other clubs. Most of all it does reduce the work stuff and stress
and makes the running of the club very smooth and without much effort.
The use of database management in our project reduces data
redundancy and makes it easier to find data whenever required. So it’s
better and developed way to handle the various information regarding
club its various members and other stuff.
