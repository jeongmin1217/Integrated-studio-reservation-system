CREATE TABLE P_STUDIO(
	studio_id int PRIMARY KEY AUTO_INCREMENT,
	studio_name varchar(500) NOT NULL,
    address varchar(500) NOT NULL,
    category char(100) NOT NULL
    UNIQUE KEY (studio_name));	