CREATE TABLE P_USER(     
	id char(50) Primary Key,
    name char(50) NOT NULL,
    password char(50) NOT NULL
    UNIQUE KEY (name));                                                                                      