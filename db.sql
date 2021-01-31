-- table for user --

CREATE TABLE users (
    id int,
    username varchar(255),
    password varchar(255),
    usertype varchar(255)
);

-- table for subject --

CREATE TABLE subjec (
    SubId int,
    Subname varchar(255),
    Semester varchar(255),
    Course varchar(255)
);

-- table for student --

CREATE TABLE student (
    studentId int,
    FirstName varchar(255),
    LastName varchar(255),
    Dob date,
    qali varchar(255),
    gender varchar(255),
    Mob varchar(10),
    House varchar(255),
    Email varchar(255),
    Loc varchar(255),
    City varchar(255),
    State varchar(255),
    Course varchar(255)
);

-- table for staff --

CREATE TABLE stu (
    staffId int,
    FirstName varchar(255),
    LastName varchar(255),
    House varchar(255),
    Loc varchar(255),
    City varchar(255),
    State varchar(255),
    Mob varchar(10),
    Phone varchar(10),
    Email varchar(255),
    qali varchar(255),
    gender varchar(255)
);

-- table for franchise --

CREATE TABLE franchise (
    id int,
    FranchPhone varchar(10),
    FranchLoc varchar(255),
    FranchCity varchar(255),
    FranchState varchar(255),
    FranchEmail varchar(255),
    FirstName varchar(255),
    LastName varchar(255),
    OwnerPhone varchar(10),
    OwnerMobile varchar(10),
    OwnerHouse varchar(255),
    OwnerLoc varchar(255),
    OwnerState varchar(255),
    OwnerEmail varchar(255)
);

-- table for course --

CREATE TABLE coursedetails (
    courseid int,
    coursename varchar(255),
    courseduration varchar(255)
);

-- table for contact --

CREATE TABLE contact (
    id int,
    name varchar(255),
    email varchar(255),
    phone varchar(255),
    message varchar(255)
);
