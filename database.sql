DROP DATABASE if EXISTS travel_freak_new;
CREATE DATABASE travel_freak_new;
USE travel_freak_new;
DROP TABLE if EXISTS admin_info;
CREATE TABLE admin_info
(admin_id CHAR(5) NOT NULL,
user_name VARCHAR(10) NOT NULL,
admin_password  CHAR(10) NOT NULL,
full_name VARCHAR(50),
email VARCHAR(50),
contact_no VARCHAR(15),
PRIMARY KEY(admin_id)
);

INSERT INTO admin_info(admin_id,user_name,admin_password,full_name,email,contact_no)
VALUES('ad01','buddy','123','Pasindu Wimalasooriya','pwimalasooriya@gmail.com','0778338212'),
        ('ad02','patiya','234','Kavindu Wimalasooriya','kgW@gmail.com','0713612232');

DROP TABLE if EXISTS site_announcements;
CREATE TABLE site_announcements
(announcement_id CHAR(5) NOT NULL,
annoncement_date_time DATETIME,
admin_id CHAR(5) NOT NULL,
PRIMARY KEY(announcement_id),
FOREIGN KEY(admin_id) REFERENCES admin_info(admin_id) ON DELETE CASCADE
);
INSERT INTO site_announcements
VALUES ('ano01',NOW(),'ad01'),('ano02',NOW(),'ad02');

DROP TABLE if EXISTS admin_announcements;
CREATE TABLE admin_announcements
(announcement_id CHAR(5) NOT NULL,
announcement VARCHAR(100) NOT NULL,
PRIMARY KEY(announcement_id,announcement),
FOREIGN KEY(announcement_id)REFERENCES site_announcements(announcement_id) ON DELETE CASCADE);

INSERT INTO admin_announcements(announcement_id,announcement)
VALUES('ano01','Every user must register'),('ano02','Welcome all');


DROP TABLE if EXISTS site_addvertisements;
CREATE TABLE site_addvertisements
(adv_id CHAR(5) NOT NULL,
add_date_time DATETIME,
admin_id CHAR(5) NOT NULL,
PRIMARY KEY(adv_id),
FOREIGN KEY(admin_id) REFERENCES admin_info(admin_id) ON DELETE CASCADE
);
INSERT INTO site_addvertisements
VALUES ('adv01',NOW(),'ad01'),('adv02',NOW(),'ad02');

DROP TABLE if EXISTS admin_addvertisements;
CREATE TABLE admin_addvertisements
(adv_id CHAR(5) NOT NULL,
addvertisement VARCHAR(100) NOT NULL,
PRIMARY KEY(adv_id,addvertisement),
FOREIGN KEY(adv_id)REFERENCES site_addvertisements(adv_id) ON DELETE CASCADE);

INSERT INTO admin_addvertisements
VALUES('adv01','Travel freak is the best'),('adv02','Araliya equipments are best');


DROP TABLE if EXISTS map_details;
CREATE TABLE map_details
(place_id CHAR(5) NOT NULL,
admin_id CHAR(5) NOT NULL,
PRIMARY KEY(place_id),
FOREIGN KEY(admin_id)REFERENCES admin_info(admin_id) ON DELETE CASCADE);

INSERT INTO map_details(place_id,admin_id)
VALUES('plc01','ad01'),('plc02','ad02');

DROP TABLE if EXISTS place_details;
CREATE TABLE place_details
(place_id CHAR(5) NOT NULL,
place VARCHAR(50) NOT NULL,
PRIMARY KEY(place_id,place),
FOREIGN KEY(place_id)REFERENCES map_details(place_id) ON DELETE CASCADE);

INSERT INTO place_details(place_id,place)
VALUES('plc01','Gallfort'),('plc02','Seegiriya');


DROP TABLE if EXISTS tourist;
CREATE TABLE tourist
(tourist_id CHAR(5) NOT NULL,
user_name VARCHAR(10) NOT NULL,
tourist_password  CHAR(10) NOT NULL,
full_name VARCHAR(50),
email VARCHAR(50),
contact_no VARCHAR(15),
gender CHAR(1) CHECK(gender IN ('M','f')),
date_of_birth DATE,
age INT AS (2019 - year(date_of_birth)),
passport_no VARCHAR(20),
country VARCHAR(30),
PRIMARY KEY(tourist_id)
);

INSERT INTO tourist(tourist_id,user_name,tourist_password,full_name,email,contact_no,gender,date_of_birth,passport_no,country)
VALUES('tou01','lola','1234','Lohan Lakshitha','lolaa@gmail.com','0712274543','M','1996-09-11','pas1234','Italy');
INSERT INTO tourist(tourist_id,user_name,tourist_password,full_name,email,contact_no,gender,date_of_birth,passport_no,country)
 VALUES('tou02','jana','1278','Sahan hasoga','sahan@gmail.com','0712272343','M','1995-09-11','sah1234','German');




DROP TABLE if EXISTS vehicle_owner;
CREATE TABLE vehicle_owner
(owner_id CHAR(10) NOT NULL,
owner_name VARCHAR(30),
PRIMARY key(owner_id));

INSERT INTO vehicle_owner VALUES('own01','Nimal disanayaka');



DROP TABLE IF EXISTS vehicle;
CREATE TABLE vehicle
(vehicle_id CHAR(10) NOT NULL,
vehicle_brand VARCHAR(10),
vehicle_name VARCHAR(10),
vehicle_type VARCHAR(10),
no_of_seats INT ,
owner_id CHAR(10) NOT NULL,
PRIMARY KEY(vehicle_id),
FOREIGN KEY(owner_id)REFERENCES vehicle_owner(owner_id));

INSERT INTO vehicle VALUES('veh01','toyota','kdh','van','15','own01');
INSERT INTO vehicle VALUES('veh02','toyota','Dolphin','van','15','own01');
INSERT INTO vehicle VALUES('veh03','toyota','wagonr','van','6','own01');


DROP TABLE if EXISTS driver;
CREATE TABLE driver
(driver_id CHAR(10) NOT NULL,
user_name VARCHAR(10) NOT NULL,
drv_password  CHAR(10) NOT NULL,
full_name VARCHAR(50),
email VARCHAR(50),
contact_no VARCHAR(15),
gender CHAR(1) CHECK(gender IN ('M','f')),
nic VARCHAR(20),
driver_availability CHAR(3) CHECK(driver_availability IN ('yes','no')),
license_info VARCHAR(20),
insuarance_info VARCHAR(20),
vehicle_id CHAR(10),
PRIMARY KEY(driver_id),
FOREIGN KEY(vehicle_id)REFERENCES vehicle(vehicle_id));

INSERT INTO driver VALUES('drv01','hobbs','1234','Steve jobbs','jobbs@gmail.com','0723456789','M','9622498765v','yes','lic22','janashakthi','veh01');
INSERT INTO driver VALUES('drv02','shaw','1245','Shaw joe','joe@gmail.com','0723423789','M','96224987567v','yes','lic34','janashakthi','veh02');
INSERT INTO driver VALUES('drv03','stark','1256','jon snow','snow@gmail.com','0723676789','M','9622498233v','yes','lic56','AIA','veh03');



DROP TABLE if EXISTS driver_language;
CREATE TABLE driver_language
(driver_id CHAR(10) NOT NULL,
drv_language CHAR(10) NOT NULL,
PRIMARY KEY(driver_id,drv_language),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO driver_language VALUES('drv01','English');

DROP TABLE if EXISTS guide;
CREATE TABLE guide
(guide_id CHAR(10) NOT NULL,
user_name VARCHAR(10) NOT NULL,
guide_password  CHAR(10) NOT NULL,
full_name VARCHAR(50),
email VARCHAR(50),
contact_no VARCHAR(15),
gender CHAR(1) CHECK(gender IN ('M','f')),
nic VARCHAR(20),
guide_availability CHAR(3) CHECK(guide_availability IN ('yes','no')),
license_id VARCHAR(20),
charge_of_the_day_$  VARCHAR(20),
PRIMARY KEY(guide_id)
);

INSERT INTO guide VALUES('gud01','chandi','2345','dinesh chandimal','chandi@gmail.com','0776598763','M','962240456','yes','lic23','25$');


DROP TABLE if EXISTS guide_languages;
CREATE TABLE guide_languages
(guide_id CHAR(10) NOT NULL,
gud_language CHAR(10) NOT NULL,
PRIMARY KEY(guide_id,gud_language),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_languages VALUES('gud01','Englsh'),('gud01','French');


DROP TABLE if EXISTS guide_areas;
CREATE TABLE guide_areas
(guide_id CHAR(10) NOT NULL,
gud_area CHAR(10) NOT NULL,
PRIMARY KEY(guide_id,gud_area),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);
INSERT INTO guide_areas VALUES('gud01','Matara'),('gud01','Galle');


DROP TABLE if EXISTS guide_experiences;
CREATE TABLE guide_experiences
(guide_id CHAR(10) NOT NULL,
gud_experience VARCHAR(100) NOT NULL,
PRIMARY KEY(guide_id,gud_experience),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_experiences VALUES('gud01','Matara,Galle area expert'),('gud01','working experience over 5 years');


DROP TABLE if EXISTS equipment_provider;
CREATE TABLE equipment_provider
(eqpro_id CHAR(10) NOT NULL,
user_name VARCHAR(10) NOT NULL,
eqpro_password  CHAR(10) NOT NULL,
full_name VARCHAR(50),
email VARCHAR(50),
contact_no VARCHAR(15),
gender CHAR(1) CHECK(gender IN ('M','f')),
nic VARCHAR(20),
eqpro_availability CHAR(3) CHECK(eqpro_availability IN ('yes','no')),
company_name VARCHAR(20),
PRIMARY KEY(eqpro_id)
);

INSERT INTO equipment_provider VALUES('eqp01','chuck','5675','Chaminda Vass','chaminda@gmail.com','0776534563','M','962240326','yes','Chamin sons'),
                        ('eqp02','chucky','5645','Chuti Mudalali','chuti@gmail.com','0774534563','M','962340326','no','Chuti putha');

DROP TABLE if EXISTS eqpro_areas;
CREATE TABLE eqpro_areas
(eqpro_id CHAR(10) NOT NULL,
eqpro_area CHAR(20) NOT NULL,
PRIMARY KEY(eqpro_id,eqpro_area),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);
INSERT INTO eqpro_areas VALUES('eqp01','Nuckkles'),('eqp02','Galle');


DROP TABLE if EXISTS eqpro_languages;
CREATE TABLE eqpro_languages
(eqpro_id CHAR(10) NOT NULL,
eqpro_language CHAR(10) NOT NULL,
PRIMARY KEY(eqpro_id,eqpro_language),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_languages VALUES('eqp01','Englsh'),('eqp02','French'),('eqp02','German'),('eqp01','German');

DROP TABLE if EXISTS eqpro_packages;
CREATE TABLE eqpro_packages
(package_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
price_$ CHAR(10),
pkg_availability CHAR(3) CHECK(pkg_availability IN ('yes','no')),
PRIMARY KEY(package_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_packages VALUES('pkg01','eqp01','25$','yes'),('pkg02','eqp01','55$','yes');



DROP TABLE if EXISTS item;
CREATE TABLE item
(item_id CHAR(10) NOT NULL,
package_id CHAR(10) NOT NULL,
item_name VARCHAR(20),
quantity INT,
PRIMARY KEY(item_id,package_id),
FOREIGN KEY(package_id) REFERENCES eqpro_packages(package_id)
);

INSERT INTO item VALUES('itm01','pkg01','nikon 360 camera','1'),('itm02','pkg01','baebeque set','1'),('itm03','pkg02','Tent','2');



DROP TABLE if EXISTS equipments_payments;
CREATE TABLE equipments_payments
(payment_id CHAR(10) NOT NULL,
tourist_id CHAR(10)NOT NULL,
eqpro_id CHAR(10) not NULL,
pay_date_time DATETIME,
amont_$ CHAR(10),
PRIMARY KEY(payment_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO equipments_payments VALUES('pay01','tou01','eqp01',now(),'25$'),('pay02','tou01','eqp02',now(),'23$');





DROP TABLE if EXISTS driver_booking;
CREATE TABLE driver_booking
(drv_booking_id CHAR(15) NOT NULL,
booking_date DATE,
booking_time TIME,
cur_date_time DATETIME,
tourist_id CHAR(5) NOT NULL,
driver_id CHAR(5) NOT NULL,
PRIMARY KEY(drv_booking_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO driver_booking VALUES('drvbook01','2019-09-23','12:23','2019-09-06 16:12','toU01','drv01'),('book02','2019-09-23','12:23',NOW(),'toU01','drv01');


DROP TABLE if EXISTS guide_booking;
CREATE TABLE guide_booking
(gud_booking_id CHAR(15) NOT NULL,
booking_date DATE,
booking_time TIME,
cur_date_time DATETIME,
tourist_id CHAR(5) NOT NULL,
guide_id CHAR(5) NOT NULL,
PRIMARY KEY(gud_booking_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_booking VALUES('gudbook01','2019-09-23','12:23','2019-09-06 16:12','toU01','gud01'),('gudbook02','2019-09-23','12:23',NOW(),'toU01','gud01');


DROP TABLE if EXISTS eqpro_booking;
CREATE TABLE eqpro_booking
(eqpro_booking_id CHAR(15) NOT NULL,
booking_date DATE,
booking_time TIME,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
PRIMARY KEY(eqpro_booking_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_booking VALUES('eqbook01','2019-09-18','12:23','2019-09-06 16:12','toU01','eqp01'),('eqbook02','2019-09-23','12:23',NOW(),'toU01','eqp01');




DROP TABLE if EXISTS drv_request;
CREATE TABLE drv_request
(drv_req_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
driver_id CHAR(10) NOT NULL,
req_status VARCHAR(20) CHECK(req_status IN ('pending','accept','reject')),
PRIMARY KEY(drv_req_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO drv_request VALUES('dreq01',NOW(),'tou01','drv01','pending'),('dreq02',NOW(),'tou01','drv02','pending');


DROP TABLE if EXISTS guide_request;
CREATE TABLE guide_request
(gud_req_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
guide_id CHAR(10) NOT NULL,
req_status VARCHAR(20) CHECK(req_status IN ('pending','accept','reject')),
PRIMARY KEY(gud_req_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_request VALUES('greq01',NOW(),'tou01','gud01','pending'),('greq02',NOW(),'tou02','gud01','pending');




DROP TABLE if EXISTS eqpro_request;
CREATE TABLE eqpro_request
(eqpro_req_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
req_status VARCHAR(20) CHECK(req_status IN ('pending','accept','reject')),
PRIMARY KEY(eqpro_req_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_request VALUES('eqreq01',NOW(),'tou01','eqp01','pending'),('eqreq02',NOW(),'tou02','eqp02','pending');



DROP TABLE if EXISTS drv_ratings;
CREATE TABLE drv_ratings
(drv_rate_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
driver_id CHAR(10) NOT NULL,
rating INT CHECK(rating IN (1,2,3,4,5)),
PRIMARY KEY(drv_rate_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO drv_ratings VALUES('drate01',NOW(),'tou01','drv01',2),('drate02',NOW(),'tou01','drv02',5);



DROP TABLE if EXISTS guide_ratings;
CREATE TABLE guide_ratings
(gud_rate_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
guide_id CHAR(10) NOT NULL,
rating INT CHECK(rating IN (1,2,3,4,5)),
PRIMARY KEY(gud_rate_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_ratings VALUES('grate01',NOW(),'tou01','gud01',4),('grate02',NOW(),'tou02','gud01',5);



DROP TABLE if EXISTS eqpro_ratings;
CREATE TABLE eqpro_ratings
(eqpro_rate_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
rating INT CHECK(rating IN (1,2,3,4,5)),
PRIMARY KEY(eqpro_rate_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_ratings VALUES('eqrate01',NOW(),'tou01','eqp01',4),('eqrate02',NOW(),'tou02','eqp02',3);



DROP TABLE if EXISTS drv_feedbacks;
CREATE TABLE drv_feedbacks
(drv_fb_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
driver_id CHAR(10) NOT NULL,
feedback VARCHAR(200),
PRIMARY KEY(drv_fb_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO drv_feedbacks VALUES('dfb01',NOW(),'tou01','drv01','Very good driver.Valuable service'),('dfb02',NOW(),'tou01','drv02','over charged.not good');



DROP TABLE if EXISTS guide_feedbacks;
CREATE TABLE guide_feedbacks
(gud_fb_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
guide_id CHAR(10) NOT NULL,
feedback VARCHAR(200),
PRIMARY KEY(gud_fb_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO guide_feedbacks VALUES('gfb01',NOW(),'tou01','gud01','very good guide'),('gfb02',NOW(),'tou02','gud01','amazing,great service');


DROP TABLE if EXISTS eqpro_feedbacks;
CREATE TABLE eqpro_feedbacks
(eqpro_fb_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
feedback VARCHAR(200),
PRIMARY KEY(eqpro_fb_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO eqpro_feedbacks VALUES('eqfb01',NOW(),'tou01','eqp01','quality eqipments for good price'),('eqfb02',NOW(),'tou02','eqp02','quality is bad');


DROP TABLE if EXISTS tou_drv_complains;
CREATE TABLE tou_drv_complains
(dcmp_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
driver_id CHAR(10) NOT NULL,
complain VARCHAR(200),
PRIMARY KEY(dcmp_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(driver_id) REFERENCES driver(driver_id)
);

INSERT INTO tou_drv_complains VALUES('dcmp01',NOW(),'tou01','drv01','Over charged us'),('dcmp02',NOW(),'tou01','drv02','Not work on time');


DROP TABLE if EXISTS tou_guide_complains;
CREATE TABLE tou_guide_complains
(gcmp_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
guide_id CHAR(10) NOT NULL,
complain VARCHAR(200),
PRIMARY KEY(gcmp_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(guide_id) REFERENCES guide(guide_id)
);

INSERT INTO tou_guide_complains VALUES('gcmp01',NOW(),'tou01','gud01','very angry guide'),('gcmp02',NOW(),'tou02','gud01','Not fluent in language');



DROP TABLE if EXISTS tou_eqpro_complains;
CREATE TABLE tou_eqpro_complains
(eqcmp_id CHAR(15) NOT NULL,
cur_date_time DATETIME,
tourist_id CHAR(10) NOT NULL,
eqpro_id CHAR(10) NOT NULL,
complain VARCHAR(200),
PRIMARY KEY(eqcmp_id),
FOREIGN KEY(tourist_id) REFERENCES tourist(tourist_id),
FOREIGN KEY(eqpro_id) REFERENCES equipment_provider(eqpro_id)
);

INSERT INTO tou_eqpro_complains VALUES('eqcmp01',NOW(),'tou01','eqp01','tent quality is very bad'),('eqcmp02',NOW(),'tou02','eqp02','Not deleverd in time');




















