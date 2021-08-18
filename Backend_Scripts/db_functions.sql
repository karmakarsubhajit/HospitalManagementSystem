CREATE FUNCTION count_doctors()
RETURNS INT
RETURN (SELECT COUNT(*)
FROM Doctors);


CREATE FUNCTION count_nurses()
RETURNS INT
RETURN (SELECT COUNT(*)
FROM Nurses);


CREATE FUNCTION count_medicines()
RETURNS INT
RETURN (SELECT COUNT(*)
FROM Medicines);


CREATE FUNCTION count_patients()
RETURNS INT
RETURN (SELECT COUNT(*)
FROM Patients);


CREATE FUNCTION count_appointments()
RETURNS INT
RETURN (SELECT COUNT(*)
FROM Appointments);

delimiter #

CREATE FUNCTION total_revenue()
RETURNS double(19,2)
    DETERMINISTIC
begin
declare tot_from_service double(19,2);
declare tot_from_medicine double(19,2);
select sum(Revenue) into tot_from_service from (select sum(cost) as Revenue from Services Natural join Avails group by (Service_Name)) as t;
select sum(Price) into tot_from_medicine from Buys natural join Medicines;
return tot_from_service+tot_from_medicine;
end
#
 
delimiter ; 
