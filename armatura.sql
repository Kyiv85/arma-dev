CREATE USER 'armatura'@'localhost' IDENTIFIED BY 'cowboy-baby';
CREATE DATABASE armatura;
GRANT ALL PRIVILEGES ON armatura.* TO 'armatura'@'localhost';
FLUSH PRIVILEGES;