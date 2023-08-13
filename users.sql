CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY, 
  nombre VARCHAR(50),
  email VARCHAR(100),
  password VARCHAR(255),
  rol VARCHAR(20)
);