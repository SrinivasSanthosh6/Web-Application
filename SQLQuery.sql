Create Database UserData

Use UserData
create table Users(ID INT PRIMARY KEY, Name VARCHAR(255), Email VARCHAR(255), Age INT, DateOfBirth DATE);

select * from Users

insert into Users(ID,Name,Email,Age,DateOfBirth)Values(1,'Joshi','joshi@gmail.com',24,'1999-10-18')
