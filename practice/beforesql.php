<?php



//  find the second highest salary from employee table and salary table
//  employee table
//  empId, empName, empAdd
// 1      avadhesh  abc
// 2      test  abc
// 3      test1  abc
// 4      test2  abc
// salary table
// empId, month, salPaid

// 1      jan     1000
// 2      jan     8000
// 3      jan     7000
// 4      jan     6000
 


SELECT MAX(salary) AS second_highest_salary
FROM (
  SELECT salary
  FROM employee
  JOIN salary ON employee.empId = salary.empId
  WHERE salary.month >= DATE_FORMAT(DATE_SUB(NOW(), INTERVAL 12 MONTH), '%b')
    AND salary.month <= DATE_FORMAT(NOW(), '%b')
  ORDER BY salary DESC
  LIMIT 2
) AS subquery
ORDER BY salary ASC
LIMIT 1;


?>