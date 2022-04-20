PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE author (
  id INTEGER NOT NULL PRIMARY KEY,
  name varchar(255) DEFAULT NULL,
  country varchar(255) DEFAULT NULL
  
, slug varchar(255));
INSERT INTO author VALUES(1,'Frank Herbert','USA','frank-herbert');
INSERT INTO author VALUES(2,'Richard Laymon','Canada','richard-laymon');
INSERT INTO author VALUES(3,'Carmen Ynez','Canada','carmen-ynez');
INSERT INTO author VALUES(4,'Stephen King','USA','stephen-king');
INSERT INTO author VALUES(5,'Lee Sheldon','Russia','lee-sheldon');
INSERT INTO author VALUES(6,'Daniel Chambers','England','daniel-chambers');
INSERT INTO author VALUES(7,'Sally Unger','Canada','sally-unger');
INSERT INTO author VALUES(8,'John Lescroart','USA','john-lescroart');
INSERT INTO author VALUES(9,'Robert Sawyer','Canada','robert-sawyer');
INSERT INTO author VALUES(10,'Tommy Dougald','Canada','tommy-dougald');
INSERT INTO author VALUES(16,'Michael Thompson','Mexico','michael-thompson');
INSERT INTO author VALUES(17,'Jim Butcher','USA','jim-butcher');
INSERT INTO author VALUES(18,'Mark Twain','USA','mark-twain');
INSERT INTO author VALUES(19,'Brent Weeks','USA','brent-weeks');
INSERT INTO author VALUES(20,'Isaac Asimov','USA','isaac-asimov');
INSERT INTO author VALUES(21,'Michael Connelly','USA','michael-connelly');
INSERT INTO author VALUES(22,'Enid Blyton','England','enid-blyton');
CREATE TABLE book (
  id INTEGER NOT NULL PRIMARY KEY,
  title varchar(255) DEFAULT NULL,
  year_published INTEGER DEFAULT NULL,
  num_pages INTEGER DEFAULT NULL,
  in_print tinyint(1) DEFAULT NULL,
  price decimal(5,2) DEFAULT NULL,
  description text,
  image varchar(255) DEFAULT NULL,
  author_id INTEGER DEFAULT NULL,
  publisher_id INTEGER DEFAULT NULL,
  format_id INTEGER DEFAULT NULL,
  genre_id INTEGER DEFAULT NULL
, slug VARCHAR(255));
INSERT INTO book VALUES(1,'Dune',1975,556,1,5.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','dune.jpg',1,1,1,1,'dune');
INSERT INTO book VALUES(2,'Island',2002,345,1,4.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','island.jpg',2,2,1,2,'island');
INSERT INTO book VALUES(3,'A Day in the Life',2012,704,1,22.989999999999998435,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','a_day_in_the_life.jpg',3,3,2,3,'a-day-in-the-life');
INSERT INTO book VALUES(4,'Under the Dome',2010,1200,0,17.989999999999998436,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','under_the_dome.jpg',4,1,3,2,'under-the-dome');
INSERT INTO book VALUES(5,'Carpet Baggers',1977,340,1,3.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','the_carpet_baggers.jpg',5,4,1,4,'carpet-baggers');
INSERT INTO book VALUES(6,'Not a Penny More',1980,300,1,5.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','not_a_penny_more.jpg',6,5,1,5,'not-a-penny-more');
INSERT INTO book VALUES(7,'A Mixed Blessing',2002,450,1,12.990000000000000212,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','a_mixed_blessing.jpg',7,6,3,5,'a-mixed-blessing');
INSERT INTO book VALUES(8,'The Oath',2008,500,0,24.989999999999998436,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','the_oath.jpg',8,2,2,6,'the-oath');
INSERT INTO book VALUES(9,'Carrie',1975,300,1,4.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','carrie.jpg',4,1,1,2,'carrie');
INSERT INTO book VALUES(10,'Flash Forward',2006,417,1,19.989999999999998436,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','flash_forward.jpg',9,7,2,1,'flash-forward');
INSERT INTO book VALUES(11,'The Black Box',2012,345,1,25.989999999999998437,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','black_box.jpg',21,5,2,3,'the-black-box');
INSERT INTO book VALUES(12,'Caves of Steel',1957,198,1,4.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','caves_of_steel.jpg',20,5,2,1,'caves-of-steel');
INSERT INTO book VALUES(13,'Castle of Adventure',1944,224,1,33.990000000000001989,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','castle_of_adventure.jpg',22,5,2,1,'castle-of-adventure');
INSERT INTO book VALUES(14,'Dune Messiah',1977,350,1,2.9900000000000002131,'<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>','dune_messiah.jpg',1,1,1,1,'dune-messiah');
CREATE TABLE format (
  id INTEGER NOT NULL PRIMARY KEY,
  name varchar(255) DEFAULT NULL
, slug varchar(255));
INSERT INTO format VALUES(1,'Paper','paper');
INSERT INTO format VALUES(2,'Hardcover','hardcover');
INSERT INTO format VALUES(3,'Trade Paper','trade-paper');
CREATE TABLE genre (
  id INTEGER NOT NULL PRIMARY KEY,
  name varchar(255) DEFAULT NULL
, slug varchar(255));
INSERT INTO genre VALUES(1,'SF','sf');
INSERT INTO genre VALUES(2,'Horror','horror');
INSERT INTO genre VALUES(3,'Literature','literature');
INSERT INTO genre VALUES(4,'Drama','drama');
INSERT INTO genre VALUES(5,'Politics','politics');
INSERT INTO genre VALUES(6,'Legal','legal');
INSERT INTO genre VALUES(19,'Cars','cars');
INSERT INTO genre VALUES(20,'Electronics','electronics');
CREATE TABLE publisher (
  id INTEGER NOT NULL PRIMARY KEY,
  name varchar(255) DEFAULT NULL,
  city varchar(255) DEFAULT NULL,
  phone varchar(255) DEFAULT NULL
, slug varchar(255));
INSERT INTO publisher VALUES(1,'Ballantine Books','New York','775-1234','ballantine-books');
INSERT INTO publisher VALUES(2,'Dell','New York','766-1313','dell');
INSERT INTO publisher VALUES(3,'Penguin Books','London','445-0987','penguin-books');
INSERT INTO publisher VALUES(4,'Putnam','New York','234-8876','putnam');
INSERT INTO publisher VALUES(5,'Delacorte','Toronto','555-1212','delacorte');
INSERT INTO publisher VALUES(6,'Sun Press','Toronto','664-1234','sun-press');
INSERT INTO publisher VALUES(7,'DAW','New York','543-1234','daw');
COMMIT;
