DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS lists;
DROP TABLE IF EXISTS items;

CREATE TABLE users (
	Name VARCHAR,
	userName VARCHAR PRIMARY KEY,
	birthDate DATE,
	password VARCHAR NOT NULL
);

CREATE TABLE lists (
  idList INTEGER PRIMARY KEY AUTOINCREMENT,
	userName VARCHAR,
	title VARCHAR
);

CREATE TABLE items (
	idItem INTEGER PRIMARY KEY AUTOINCREMENT,
	idList INTEGER,
	complete BOOLEAN,
	description VARCHAR
);

INSERT INTO users VALUES ('Who Cares', '123@reddit.com', '18/04/1990', '8cb2237d0679ca88db6464eac60da96345513964');
INSERT INTO users VALUES ('Jenine MacParland', 'jmacparland0@reddit.com', '18/04/1990', 'FpVsl1oLRQ');
INSERT INTO users VALUES ('Ross Leney', 'rleney1@yelp.com', '05/09/1956', 'Y2qRCL');
INSERT INTO users VALUES ('Filmore Kinnie', 'fkinnie2@networkadvertising.org', '26/06/1978', 'XbAma6VD');
INSERT INTO users VALUES ('Eddi Colomb', 'ecolomb3@prlog.org', '11/09/1969', 'ajLR1hEKmU');
INSERT INTO users VALUES ('Nat Fleet', 'nfleet4@youtube.com', '20/09/1962', 'P2uYI1gu');
INSERT INTO users VALUES ('Selie Morville', 'smorville5@spiegel.de', '30/09/1997', 'TSrDNmMeYGJ');
INSERT INTO users VALUES ('Zacharia Ackred', 'zackred6@t-online.de', '14/01/1999', 'ytzwpmJOxM1');
INSERT INTO users VALUES ('Haleigh Rochford', 'hrochford7@dyndns.org', '24/08/1999', 'OVCob7HQoui');
INSERT INTO users VALUES ('Graehme Corbie', 'gcorbie8@usda.gov', '09/02/1968', 'ft2IFFmURkVD');
INSERT INTO users VALUES ('Ewell Dacombe', 'edacombe9@1688.com', '15/08/1963', '462KxUC');
INSERT INTO users VALUES ('Matti Hearons', 'mhearonsa@pinterest.com', '21/04/1969', 'MgXs9eK1p');
INSERT INTO users VALUES ('Zedekiah Manus', 'zmanusb@whitehouse.gov', '13/04/1959', 'JkJ3BlD');
INSERT INTO users VALUES ('Osbourn Yellowlees', 'oyellowleesc@over-blog.com', '24/04/1993', 'fgpR85uOl');
INSERT INTO users VALUES ('Filip Tabbitt', 'ftabbittd@aol.com', '27/06/1982', 'p0epi2');
INSERT INTO users VALUES ('Elka Stearne', 'estearnee@narod.ru', '14/12/1990', 'MdQkshO2vb');
INSERT INTO users VALUES ('Farleigh Grinaway', 'fgrinawayf@blinklist.com', '02/04/2000', 'dMmrlh');
INSERT INTO users VALUES ('Dosi Dockwray', 'ddockwrayg@cnn.com', '17/03/1988', 'ywg1h5II');
INSERT INTO users VALUES ('Lula Megson', 'lmegsonh@redcross.org', '11/05/1959', 'w9sVqk6');
INSERT INTO users VALUES ('Shannah Gambie', 'sgambiei@taobao.com', '18/08/1985', 'kveuV75');
INSERT INTO users VALUES ('Durward Ostler', 'dostlerj@guardian.co.uk', '02/11/1986', 'Ohw00of52');
INSERT INTO users VALUES ('Edmund Nys', 'enysk@bizjournals.com', '13/10/1975', 'wuTFH1AxlG');
INSERT INTO users VALUES ('Tim Dalgarno', 'tdalgarnol@arstechnica.com', '18/03/1990', 'oLEExgKLUh');
INSERT INTO users VALUES ('Montgomery Kummerlowe', 'mkummerlowem@soup.io', '07/04/1957', 'OPQ0ajGd');
INSERT INTO users VALUES ('Maiga Grolmann', 'mgrolmannn@cloudflare.com', '02/05/1991', 'tgmiIrHA');
INSERT INTO users VALUES ('Clarette Danilyuk', 'cdanilyuko@fotki.com', '30/12/1954', 'aLyxM6Xb3');
INSERT INTO users VALUES ('Seana Linning', 'slinningp@etsy.com', '06/07/1959', 'UCjxWg8ox');
INSERT INTO users VALUES ('Luelle Osan', 'losanq@furl.net', '13/10/1992', 'UztCITtWQCu');
INSERT INTO users VALUES ('Sonnnie Devereu', 'sdevereur@pinterest.com', '29/12/1994', 'rNCnpc1');
INSERT INTO users VALUES ('Genny Scrimshaw', 'gscrimshaws@shop-pro.jp', '23/08/1952', 'mtTAArgqcYI');
INSERT INTO users VALUES ('Deane Durie', 'dduriet@storify.com', '18/10/1961', '1l4aZyFNw2P');


INSERT INTO lists VALUES (NULL, 16, 'Asfour Stah');
INSERT INTO lists VALUES (NULL, 9, 'Coherence');
INSERT INTO lists VALUES (NULL, 6, 'Road Trip: Beer Pong');
INSERT INTO lists VALUES (NULL, 7, 'Georg');
INSERT INTO lists VALUES (NULL, 29, 'Escape Artist, The');
INSERT INTO lists VALUES (NULL, 26, 'Ninja');
INSERT INTO lists VALUES (NULL, 25, 'Bronx Obama');
INSERT INTO lists VALUES (NULL, 8, 'Californie, La');
INSERT INTO lists VALUES (NULL, 7, 'Overnighters, The');
INSERT INTO lists VALUES (NULL, 10, 'To Mars by A-Bomb: The Secret History of Project Orion');
