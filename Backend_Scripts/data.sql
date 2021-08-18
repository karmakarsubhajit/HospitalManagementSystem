delete from Nurses;

insert into Nurses values(1,"Maria","1998-10-01","F","Door-9,Street-2,Delhi","maria@smail.com",6758493021);

 insert into Nurses values(2,"Harshi","1989-12-11","F","House-10,Street-4,Noida","Harshi@gmail.com",7568669500);

insert into Nurses values(3,"Ruchi","2000-07-04","F","Flat-2,Umacolony,Guntur","Ruchi@gmail.com",9987869905);

 insert into Nurses values(4,"Nandi","1987-02-01","F","Door-1,Street-9,Nellore","Nandi@gmail.com",8876778522);

 insert into Nurses values(5,"Nina","2001-07-03","F","Flat-6,Jublee,Ongole","Nina@gmail.com",9688894455);

insert into Nurses values(6,"Ronnie","1997-02-05","F","Flat-10,Banjara,Hyra","Ronnie@gmail.com",6657584900);

insert into Nurses values(7,"Betty","1995-09-12","F","Door-3,Street-10,Kolkata","Betty@gmail.com",7762340976);

insert into Nurses values(8,"Cheryl","2003-08-11","F","House-16,Street-7,Patna","Cheryl@gmail.com",9986780001);


delete from Doctors;

insert into Doctors values(1,"Sunitha S","1975-02-01","F","General Physician",6,"House-10,Street-8,Guntur","Suneetha@gmail.com",6547892301);

insert into Doctors values(2,"Gopi D","1973-12-04","M","General Surgeon",5,"House-3,Street-3,Kurnool","Gopi@gmail.com",9986750044);

insert into Doctors values(3,"Anand R","1969-03-09","M","Cardiologist",10,"Door-3,Uma-colony,Patna","Anand@gmail.com",7745990231);

 insert into Doctors values(4,"Sridevi P","1980-05-02","F","Opthalmologist",10,"Door-9,Street-10,Selam","Sridevi@smail.com",6647389921);

insert into Doctors values(5,"Sekhar O","1985-09-07","M","Orthopaedic Surgeon",4,"Flat-5,BKhomes,Tirupati","Sekhar@yahoo.com",8856749900);

 insert into Doctors values(6,"Shyam D","1990-05-02","M","Audiologist",7,"House-2,Street-2,Hyra","Shyam@yahoo.com",9675840377);


insert into Doctors values(7,"Abin V","1988-03-05","M","Dentist",3,"Flat-11,JKhomes,Ongole","Abin@yahoo.com",6647382991);

insert into Doctors values(8,"Priya N","1999-04-05","F","Gynaecologist",2,"Door-2,HColony,Eluru","Priya@gmail.com",7869500433);

insert into Doctors values(9,"Kalyani J","1993-11-12","F","Paediatrician",4,"Flat-6,Jubilee,Nellore","Kalyani@gmail.com",9675840031);

 insert into Doctors values(10,"Varsha E","1976-07-09","F","Psychiatrist",9,"House-7,Street-2,Vizag","Varsha@gmail.com",8876954302);

delete from Patients;

insert into Patients values(1,"Aswin S","2001-09-02","M","House-3,Street-15,Eluru","aswin@gmail.com",7564890032,"Covid-19");

insert into Patients values(2,"Sritha D","2001-02-10","F","Flat-4,Jubilee,Nellore","sritha@gmail.com",7688932145,"Viral Fever");

insert into Patients values(3,"Subhajit K","1999-07-05","M","Door-4,PColony,Kolkata","subhu@gmail.com",8869531120,"Alzheimers Disease");

insert into Patients values(4,"Vishal R","2000-06-03","M","Flat-9,Banjara,Howrah","vishal@gmail.com",9968532210,"Diabetes");

insert into Patients values(5,"Susmitha F","2003-05-12","F","House-1,Street-5,Vizag","susmi@gmail.com",8675332106,"Autism");

insert into Patients values(6,"Arya J","2001-07-02","M","Door-4,SColony,Haldia","arya@gmail.com",9675883321,"Hepatitis");

insert into Patients values(7,"Vinay G","1995-04-01","M","House-6,Street-2,Noida","vinay@yahoo.com",6543786910,"Epilepsy");

 insert into Patients values(8,"Sowmya P","1984-06-03","F","Flat-8,Hampi,Purba","SP@yahoo.com",7905667832,"Arthritis");

insert into Patients values(9,"Nikhila H","1998-01-10","F","House-5,Street-3,Nadia","nik@yahoo.com",8867590345,"Ebola Virus");

insert into Patients values(10,"Neeraj Ch","2005-05-07","M","Door-7,HColony,Tenali","neeraj@yahoo.com",7586944522,"Obesity");


delete from Rooms;

insert into Rooms values (101,1);

insert into Rooms values (102,1);

insert into Rooms values (103,1);

insert into Rooms values (104,1);

insert into Rooms values (201,2);

insert into Rooms values (202,2);

insert into Rooms values (203,2);

insert into Rooms values (301,3);

insert into Rooms values (302,3);

insert into Rooms values (303,3);

insert into Rooms values (304,3);

insert into Rooms values (401,4);

insert into Rooms values (402,4);

insert into Rooms values (403,4);

insert into Rooms values (404,4);

delete from Medicines;

insert into Medicines values(1,"Azithromycin",120.00,"2023-12-23","Ranbaxy");

insert into Medicines values(2,"Ofloxacin",150.00,"2024-06-15","Dr.Reddys");

insert into Medicines values(3,"Cefixime",100.00,"2022-07-01","Zydus");

insert into Medicines values(4,"Cetrizine",60.00,"2024-01-12","Uprise");

insert into Medicines values(5,"Remdesivir",3500.00,"2023-12-11","Hetero");

insert into Medicines values(6,"Glimy",400.00,"2022-03-06","Ranbaxy");

insert into Medicines values(7,"Pantop",80.00,"2023-09-17","Aristo");

insert into Medicines values(8,"B-Complex",100.00,"2024-08-12","Cipla");


delete from Services;

insert into Services values (1,"X-ray",100.00);

insert into Services values (2,"CT-Scan",3000.00);

insert into Services values (3,"MRI",5000.00);

insert into Services values (4,"Ultrasound",500.00);

insert into Services values (5,"Blood Sugar Test",150.00);

insert into Services values (6,"Creatinine",100.00);

insert into Services values (7,"Dialysis",1500.00);

insert into Services values (8,"Liver Function Test",500.00);


delete from Appointments;

insert into Appointments values(1,1,5,datetime,"Accepted");

insert into Appointments values(2,4,10,datetime,"Accepted");

insert into Appointments values(3,7,1,datetime,"Waiting");

insert into Appointments values(4,3,5,datetime,"Rejected");

insert into Appointments values(5,9,2,datetime,"Waiting");

insert into Appointments values(6,2,9,datetime,"Accepted");

insert into Appointments values(7,10,7,datetime,"Rejected");

insert into Appointments values(8,8,10,datetime,"Waiting");

insert into Appointments values(9,5,6,datetime,"Accepted");

insert into Appointments values(10,6,3,datetime,"Waiting");


delete from medicineInventory;

insert into medicineInventory values (1,500);

insert into medicineInventory values (2,600);

insert into medicineInventory values (3,1000);

insert into medicineInventory values (4,700);

insert into medicineInventory values (5,50);

insert into medicineInventory values (6,700);

insert into medicineInventory values (7,1500);

insert into medicineInventory values (8,2000);


delete from LookAfter;

insert into LookAfter values(101,6);

insert into LookAfter values(102,3);

insert into LookAfter values(103,8);

insert into LookAfter values(104,7);

insert into LookAfter values(201,2);

insert into LookAfter values(202,1);

insert into LookAfter values(203,4);

insert into LookAfter values(301,5);

insert into LookAfter values(302,4);

insert into LookAfter values(303,1);

insert into LookAfter values(304,6);

insert into LookAfter values(401,8);

insert into LookAfter values(402,2);

insert into LookAfter values(403,3);

insert into LookAfter values(404,5);


delete from Assigned;

insert into Assigned values(101,9);

insert into Assigned values(102,3);

insert into Assigned values(103,2);

insert into Assigned values(104,7);

insert into Assigned values(201,1);

insert into Assigned values(202,4);

insert into Assigned values(203,10);

insert into Assigned values(301,5);

insert into Assigned values(302,8);

insert into Assigned values(303,6);


delete from Avails;

insert into Avails values(1,5);

insert into Avails values(10,6);

insert into Avails values(8,3);

insert into Avails values(9,1);

insert into Avails values(1,3);

insert into Avails values(4,7);

insert into Avails values(2,2);

insert into Avails values(3,7);

insert into Avails values(5,4);

insert into Avails values(6,8);

insert into Avails values(7,4);

delete from Buys;

 insert into Buys values(1,2);

insert into Buys values(2,5);

 insert into Buys values(3,7);

insert into Buys values(4,8);

 insert into Buys values(5,4);


insert into Buys values(6,3);

 insert into Buys values(7,1);

insert into Buys values(8,6);

insert into Buys values(9,6);

insert into Buys values(10,7);

delete from admin;

insert into admin values("dbadmin","dbadminpassword");
















