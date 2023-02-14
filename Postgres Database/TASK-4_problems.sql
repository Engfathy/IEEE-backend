-- problem 1 =>Average Population
SELECT ROUND(AVG(POPULATION)) FROM CITY;
--################################################
-- problem 2 =>Revising Aggregations - The Sum Function
SELECT  SUM(POPULATION) FROM CITY WHERE DISTRICT="California";
--################################################
-- problem 3 =>Revising Aggregations - The Count Function
SELECT COUNT(POPULATION) FROM CITY WHERE POPULATION > 100000;
--#####################################################
-- problem 4 =>Type of Triangle
SELECT
  CASE
    WHEN A+B>C AND A+C>B AND B+C>A
      THEN
        CASE
          WHEN A=B AND B=C THEN "Equilateral"
          WHEN A=B OR B=C OR A=C THEN "Isosceles"
          ELSE "Scalene"
        END
      ELSE "Not A Triangle"
  END
FROM TRIANGLES;
--###########################################################
-- problem 5 =>Weather Observation Station 5
SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY),
 CITY LIMIT 1;

SELECT CITY, LENGTH(CITY) FROM STATION ORDER BY LENGTH(CITY) DESC, 
CITY LIMIT 1;
--##########################################################
-- problem 6 =>Weather Observation Station 6
 SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) 
 IN ('a','e','i','o','u');

--###############################################################
-- problem 7 =>Weather Observation Station 7
SELECT DISTINCT CITY FROM STATION WHERE RIGHT(CITY,1) 
IN ('a','e','u','o','i');
--##################################################
-- problem 8 =>Weather Observation Station 8
SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) 
IN ('a','e','u','o','i')AND RIGHT(CITY,1) IN
 ('a','e','u','o','i');

--#######################################################
-- problem 9 =>Weather Observation Station 9
SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) 
NOT IN ('a','e','i','o','u');
--#####################################################
-- problem 10 =>Weather Observation Station 10
SELECT DISTINCT CITY FROM STATION WHERE RIGHT(CITY,1) 
NOT IN ('a','e','i','o','u');

--########################################################
-- problem 11 =>Weather Observation Station 11
SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) NOT IN ('a','e','i','o','u')
   OR RIGHT(CITY,1) NOT IN ('a','e','i','o','u');
--############################################
-- problem 12 =>Employee Salaries
SELECT name FROM employee 
WHERE salary > 2000 AND months <10 
ORDER BY employee_id;