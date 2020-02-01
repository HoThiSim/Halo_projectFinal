drop database if exists halo;
create database if not exists halo;
use halo;

create table account (
	account_id int not null auto_increment primary key,
    account_name varchar(50),
    account_password varchar(50)
);
insert into account()
	values(1,'sim','1402'),
			(2,'ngoc','0803');
         

create table user ( 
	user_id int auto_increment not null primary key,
    user_name varchar(50),
    user_dob date,
    user_gender varchar(10),
    user_phone varchar(15),
    user_address varchar (100),
    account_id int not null,
    user_avatar varchar(200),
    foreign key (account_id) references account(account_id)
);
insert into user()
	values(1,'Sim Ho','2000-02-14','female','0962105932','quang tri',1,'sim.jpg'),
			(2,'Hi anita','2000-03-08','male','034642457','quang binh',2,'h.png');
            



create table notification (
	not_id int auto_increment not null primary key,
    not_content varchar(200),
    not_date varchar(300),
    user_id int not null,
    notification_image varchar(200),
    tus_like int not null default 0,
    emotion VARCHAR(100) NOT null,
    foreign key (user_id) references user(user_id)
);


 
insert into notification(not_content,not_date,user_id,notification_image)
value ('aa','2020-10-02',1,'');

create table messager (
	mess_id int not null auto_increment primary key,
	mess_content varchar(200),
	mess_date date,
	user1_id int not null,
    foreign key (user1_id) references user(user_id),
    user2_id int not null,
    foreign key (user2_id) references user(user_id)
);

delimiter //
create procedure getAccountByNameAndPassword(
name varchar(50),
password varchar(50)
)
begin
select * from  account 
where account_name=name and account_password=password;
end //
delimiter ;
call getAccountByNameAndPassword('sim','1402');


select * from notification;


-- update notification
-- set tus_like=tus_like+1
-- where not_id=1;


