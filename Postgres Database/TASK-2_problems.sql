--problem 1 => select by id 
SELECT * FROM CITY WHERE ID='1661';
--####################################################################
-- problem 2 =>Weather Observation Station 1
SELECT CITY,STATE FROM STATION;
--################################################################
-- problem 3 =>Revising the Select QueryII
SELECT NAME FROM CITY WHERE COUNTRYCODE='USA' AND POPULATION > 120000;
--####################################################################
-- problem 4 =>Weather Observation Station 3
SELECT DISTINCT CITY FROM STATION WHERE (ID % 2=0);
--##################################################################
-- problem 5 =>Weather Observation Station 4
SELECT COUNT(CITY)-COUNT(DISTINCT CITY) FROM STATION;
--#########################################################