CREATE USER 'legal_owner'@'localhost' IDENTIFIED WITH auth_socket;

GRANT ALL PRIVILEGES ON forum.* TO 'legal_owner'@'localhost';

FLUSH PRIVILEGES;
EXIT;

ALTER USER 'legal_owner'@'localhost' IDENTIFIED WITH mysql_native_password BY 'nAsPh3PjvMFbNt58';

GRANT ALL PRIVILEGES ON forum.* TO 'legal_owner'@'localhost';
FLUSH PRIVILEGES;
