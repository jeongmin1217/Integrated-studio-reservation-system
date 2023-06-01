create table P_RESERVATION (
	reservation_id int primary key auto_increment,
    user_id char(50) not null,
    studio_name varchar(500) not null,
    date date not null,
    CONSTRAINT USER_FK foreign key (user_id) references P_USER(id),
	CONSTRAINT STUDIO_FK foreign key (studio_name) references P_STUDIO(studio_name)	
);