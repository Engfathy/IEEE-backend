SELECT DISTINCT CITY FROM STATION WHERE LEFT(CITY,1) 
IN ('a','e','u','o','i')AND RIGHT(CITY,1) IN
 ('a','e','u','o','i');