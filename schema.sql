  CREATE   TABLE    department       (       dep_id   INTEGER, 
 dep_name   VARCHAR(20), 
 primary   key(dep_id) 
   ); 
 
 
CREATE   TABLE   employees 
     ( emp_id    INTEGER, 
 emp_name   VARCHAR(15), 
 job_name   VARCHAR(20), 
 hire_date   DATE, 
 salary   DECIMAL(10,2), 
 dep_id   INTEGER, 
 primary   key(emp_id), 
 foriegn   key(dep_id)   references   department(dep_id)   foriegn   key(emp_id)   references   password(emp_id)   on   delete   cascade 
 );     
 
 
CREATE   TABLE    managers 
     ( 
          man_id   INTEGER; 
 emp_id   INTEGER; 
 primary   key(man_id,emp_id), 
 
foriegn   key(emp_id)   references   employees(emp_id) 
 
 
 
    ); 
 
 
CREATE   TABLE    project 
     ( 
          emp_id   INTEGER, 
 proj_name   VARCHAR(20), 
 primary   key(proj_name,   emp_id), 
 foriegn   key(emp_id)   references   employees(emp_id) 
     ); 
 
 
 
 
CREATE   TABLE    password 
     ( 
          emp_id   INTEGER, 
 password   VARCHAR(20), 
 primary   key(password,   emp_id) 
 
 
    ); 
 
 