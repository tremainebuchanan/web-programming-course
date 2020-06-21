create table students(
	id int(11) PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(255) not null,
    last_name varchar(255) not null,
    email varchar(255) not null,
    created_on timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_on timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)