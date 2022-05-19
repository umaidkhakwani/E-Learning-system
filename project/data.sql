CREATE TABLE user_table(
    id_assign INT NOT NULL,
    NAME VARCHAR(25) NOT NULL,
    phonenumber VARCHAR(25) NOT NULL,
    gender VARCHAR(25) NOT NULL,
    dob DATE NOT NULL,
    fathername VARCHAR(25) NOT NULL,
    address VARCHAR(200) NOT NULL,
    registartiontype INT(1) NOT NULL,
    password int NOT NULL,
    PRIMARY KEY(id_assign)
);

ALTER table user_table ADD cnic varchar(25);

INSERT INTO user_table(
    id_assign,
    NAME,
    phonenumber,
    gender,
    dob,
    fathername,
    address,
    registartiontype,
    password,
    cnic
)
VALUES(
    1111,
    "admin",
    "03232435435",
    "male",
    STR_TO_DATE('02-01-2015', '%m-%d-%Y'),
    "admin",
    "DHA LAHORE",
    1,
    12345,
    "5440067694737"
);



CREATE TABLE courses(
    course_id INT(10) NOT NULL,
    course_name VARCHAR(25) NOT NULL,
    prereq_id INT(10),
    PRIMARY KEY(course_id)
);

ALTER TABLE user_table ADD c_id INT(10);
ALTER TABLE user_table ADD FOREIGN KEY(c_id) REFERENCES courses(course_id);
CREATE TABLE passedcourses(id INT(11), c_id INT(10));
INSERT INTO courses(`course_id`, `course_name`)
VALUES(123, "English");
INSERT INTO courses(`course_id`, `course_name`)
VALUES(124, "MATH");
INSERT INTO courses(
    `course_id`,
    `course_name`,
    `prereq_id`
)
VALUES(125, "Python", 126);
INSERT INTO courses(`course_id`, `course_name`)
VALUES(126, "c++");
INSERT INTO courses(
    `course_id`,
    `course_name`,
    `prereq_id`
)
VALUES(127, "PHP", 130);
INSERT INTO courses(`course_id`, `course_name`)
VALUES(128, "Science");
INSERT INTO courses(
    `course_id`,
    `course_name`,
    `prereq_id`
)
VALUES(129, "java", 125);
INSERT INTO courses(`course_id`, `course_name`)
VALUES(130, "Html");
ALTER TABLE passedcourses ADD FOREIGN KEY(c_id) REFERENCES courses(course_id);

CREATE TABLE accounts( cnic varchar(25), accnumber int,balance int, PRIMARY KEY(cnic,accnumber) );
ALTER TABLE courses add fee int;
UPDATE courses set fee=1000;
ALTER table user_table ADD feepaid bool;
UPDATE user_table set feepaid=FALSE where registartiontype=3;

CREATE table attendence( id int, name varchar(25), presence_date DATE , present bool );





create table queries(
id int,
message varchar(200),
registration_type int,
reciever int
);




create table exam_result( studnet_id int, subject int, answers varchar(20), marks int NULL, grade varchar(20) null ); 


CREATE table teacher_notify( message varchar(100) );

CREATE table student_notify( message varchar(100) );

insert INTO student_notify values("1. thanks for joinig our LMS");
insert INTO student_notify values("2. course material has been uplaoded");
insert INTO student_notify values("3. motivationsl quotes has been uploaded");
insert INTO student_notify values("4. your attendence has been uplaoded");
insert INTO student_notify values("5. you can give exam any time");
insert INTO student_notify values("6. BEST of LUCK");




insert INTO teacher_notify values("1. thanks for joinig our LMS");
insert INTO teacher_notify values("2. course material has been uplaoded");
insert INTO teacher_notify values("3. you can check exam any time");
insert INTO teacher_notify values("4. BEST of LUCK");



insert into user_table values(12345,"hanzla sibghat","03121603144","male","2015-02-01","sibghat ullah","house no 313 subzawari town ",2,1234,"5440056432",126,0);
insert into user_table values(12346,"bilal","0335678904","male","2015-02-10","bill","lahore ",2,2356,"177867654",123,0);
insert into user_table values(12347,"waqas","0345678455","male","2010-02-01","ahmad","sahiwal ",2,3456,"3630207666",130,0);
insert into user_table values(12348,"umaid","0347867566","male","2008-02-01","khan","multan ",2,9008,"67898756",128,0);




insert into user_table values(12349,"Mirza ahmad","0345676786","male","2011-02-01","mirza ghalib","Sahiwal",3,1234,"36302456789",126,1);
insert into user_table values(12310,"ahmad arif","035678969","male","2010-02-10","arif","multan ",3,2356,"145678976",126,1);
insert into user_table values(12311,"saad jilani","02345675","male","2007-02-01","jilani","multan ",3,3456,"12345677889",130,1);
insert into user_table values(12312,"fozan","03426789","female","2006-02-01","5g","jhelum ",3,9008,"5678678898",128,1);



insert into accounts values("36302456789",8765,50000);
insert into accounts values("145678976",1234,50000);
insert into accounts values("12345677889",7777,50000);
insert into accounts values("5678678898",8888,50000);

insert into passedcourses values(12349,126);
insert into passedcourses values(12310,126);
insert into passedcourses values(12311,130);
insert into passedcourses values(12312,128);