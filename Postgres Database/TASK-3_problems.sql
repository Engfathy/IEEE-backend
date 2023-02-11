-- problem 1 =>Select All
    SELECT * FROM CITY;
--###################################################
-- problem 2 =>Revising the Select Query I
    SELECT * FROM CITY WHERE COUNTRYCODE='USA' AND POPULATION > 100000;

--#####################################################
-- problem 3 =>Japanese Cities' Attribute
    SELECT * FROM CITY WHERE COUNTRYCODE='JPN';
--#######################################################
-- problem 4 =>Japanese Cities' Names
    SELECT NAME FROM CITY WHERE COUNTRYCODE='JPN';

--######################################################
-- problem 5 =>Employee Names
    SELECT name FROM Employee ORDER BY name;
--########################################
-- problem 6 =>Higher Than 75 Marks
    SELECT Name FROM STUDENTS WHERE Marks > 75 ORDER BY RIGHT(Name,3),ID ASC;
--#####################################################
-- problem 7=>Weather Observation Station 2
 SELECT ROUND(SUM(LAT_N),2),ROUND(SUM(LONG_W),2) FROM STATION;

--##################################################
-- problem 8=>Weather Observation Station 12
    SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) NOT IN ('a','e','i','o','u')
    AND RIGHT (CITY,1) NOT IN ('a','e','i','o','u');
--##################################################
