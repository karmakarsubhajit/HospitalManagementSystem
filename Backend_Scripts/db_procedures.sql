/* Procedure for Doctors */

DELIMITER // 
CREATE PROCEDURE add_doctor(IN Doctor_ID int,IN Name varchar(25), IN DOB date, IN Gender char(1),
IN Specialization varchar(30), IN Years_Of_Experience INT, IN Address varchar(50), IN Email varchar(30), IN Contact_No varchar(15))
INSERT INTO Doctors VALUES (Doctor_ID, Name,DOB, Gender, Specialization, Years_Of_Experience, Address, Email, Contact_No);
//
DELIMITER ;

DELIMITER // 
CREATE PROCEDURE update_doctor (IN _Doctor_ID int, IN _Name varchar(25), IN _DOB date, IN _Gender char(1),
IN _Specialization varchar(30), IN _Years_Of_Experience INT, IN _Address varchar(50), IN _Email varchar(30), IN _Contact_No varchar(15))
UPDATE Doctors SET `Name` = _Name, `DOB`=_DOB, `Gender` =_Gender,`Specialization`=_Specialization ,`Years_Of_Experience`= _Years_Of_Experience, `Address`=_Address, `Email`=_Email, `Contact_No`= _Contact_No where `Doctor_ID`=_Doctor_ID ;

//
DELIMITER ;


DELIMITER // 
CREATE PROCEDURE delete_doctor( IN ID int)
delete from Doctors where Doctor_ID = ID ;
//
DELIMITER ;

/* Procedure for Patients */

DELIMITER //  
CREATE PROCEDURE add_patient (IN ID INT,IN Name VARCHAR(25),IN DOB DATE,IN Gender CHAR(1),
IN Address VARCHAR(50),IN Email VARCHAR(30),IN Contact_no VARCHAR(15),IN Medical_history VARCHAR(200))
INSERT INTO Patients VALUES(ID, Name, DOB, Gender, Address, Email, Contact_no,Medical_history);
//
DELIMITER ;


DELIMITER //  
CREATE PROCEDURE update_patient (IN _Patient_ID INT,IN _Name VARCHAR(25),IN _DOB DATE,IN _Gender CHAR(1),
IN _Address VARCHAR(50),IN _Email VARCHAR(30),IN _Contact_no VARCHAR(15),IN _Medical_history VARCHAR(200))
UPDATE Patients
    SET `Name`=_Name, `DOB`=_DOB, `Gender`=_Gender, `Address`=_Address,
    `Email`=_Email, `Contact_no`=_Contact_no, `Medical_history`=_Medical_history
    WHERE `Patient_ID`=_Patient_ID ;
//
DELIMITER ;


DELIMITER //  
CREATE PROCEDURE delete_Patient (IN ID INT)
DELETE FROM Patients WHERE Patient_ID=ID;
//
DELIMITER ;



/* Procedure for Nurses */

DELIMITER //                                                                                                                       
create PROCEDURE add_nurse (in Nurse_ID int, in Name varchar(30), in DOB date,in Gender varchar(6),in Address varchar(50),in Email varchar(30), in Contact_No varchar(15))
insert into Nurses values(Nurse_ID,Name,DOB,Gender,Address,Email,Contact_No);                                                         
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE update_nurse (IN _Nurse_ID INT, IN _Name VARCHAR(30), IN _DOB DATE,IN _Gender VARCHAR(6),IN _Address VARCHAR(50),IN _Email VARCHAR(30), IN _Contact_No VARCHAR(15))
UPDATE Nurses
   SET `Name`=_Name,`DOB`=_DOB,`Gender`=_Gender,`Address`=_Address,
   `Email`=_Email,`Contact_No`=_Contact_No where `Nurse_ID`=_Nurse_ID;
//
DELIMITER ;
    
    
DELIMITER //
CREATE PROCEDURE delete_nurse (in ID int)
	delete from Nurses where Nurse_ID=ID;
//
DELIMITER ;

/*Procedure for Rooms*/

DELIMITER //
CREATE PROCEDURE add_room(IN _Room_No int,IN _Floor_No int)
INSERT INTO Rooms VALUES (_Room_No, _Floor_No);
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE delete_room( IN No int)
delete from Rooms where Room_No = No;
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE assign_roomNurse (IN Room_No int,IN Nurse_ID int)
INSERT INTO LookAfter VALUES (Room_No,Nurse_ID);
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE assign_roomPatient(IN Room_No int,IN Patient_ID int)
INSERT INTO Assigned VALUES (Room_No,Patient_ID);
//
DELIMITER ;



/*Procedure for Services*/

DELIMITER //
CREATE PROCEDURE add_service(IN _Service_ID int,IN _Service_Name varchar(30), IN _Cost float(6,2))
INSERT INTO Services VALUES (_Service_ID, _Service_Name,_Cost);
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE update_service(IN _Service_ID int,IN _Service_Name varchar(30), IN _Cost float(6,2))
INSERT INTO Services VALUES (_Service_ID, _Service_Name,_Cost);
//
DELIMITER ;



DELIMITER //
CREATE PROCEDURE delete_service( IN ID int)
delete from Services where Service_ID = ID
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE buy_service(IN Patient_ID int,IN Service_ID int)
INSERT INTO Avails VALUES (Patient_ID, Service_ID)
//
DELIMITER ;


/*Procedure for Appointments*/

DELIMITER //
CREATE PROCEDURE book_appointment(IN App_ID INT, IN Patient_ID INT, IN Doctor_ID INT, IN status varchar(10))
INSERT INTO Appointments
    VALUES (App_ID, Patient_ID, Doctor_ID, NOW(), status);
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE update_appointment(IN ID INT, IN App_status VARCHAR(10))
UPDATE Appointments
   SET status = App_status where App_ID= ID ;
//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE delete_appointment(in ID int)
delete from Appointments where App_ID=ID ;
//
DELIMITER ;



/*Procedure for Medicines*/

DELIMITER //
CREATE PROCEDURE add_medicine(IN Medicine_ID int,IN Name varchar(25), IN Price float(6,2),IN Expiry_Date date, IN Supplier varchar(30))
INSERT INTO Medicines VALUES (Medicine_ID, Name,Price,Expiry_Date, Supplier) ;
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE update_medicine(IN _Medicine_ID int,IN _Name varchar(25), IN _Price float(6,2),IN _Expiry_Date date, IN _Supplier varchar(30))
Update Medicines set Name = _Name ,Price = _Price,Expiry_Date =_Expiry_Date,Supplier = _Supplier where Medicine_ID=_Medicine_ID ;
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE delete_medicine( IN ID int)
delete from Medicines where Medicine_ID = ID;
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE buy_medicine(IN Patient_ID int,IN Medicine_ID int)
INSERT INTO Buys VALUES (Patient_ID, Medicine_ID) 
//
DELIMITER ;


DELIMITER //
CREATE PROCEDURE add_item(in Medicine_ID int, in stock int)
insert into medicineInventory values(Medicine_ID,stock);
//
DELIMITER ;

/*Trigger on Buying Medicine*/

DELIMITER //

CREATE TRIGGER decr_stock
AFTER INSERT ON Buys
FOR EACH ROW
BEGIN
    UPDATE medicineInventory
    SET stock=stock-1
    WHERE Medicine_ID=NEW.Medicine_ID;
END
//

DELIMITER;


