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
