PRAGMA foreign_keys = ON;
CREATE TABLE users (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	userName VARCHAR,
	Name VARCHAR,
	email VARCHAR,
	birthDate DATE,
	gender VARCHAR,
	password VARCHAR NOT NULL
);

CREATE TABLE lists (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
	idUser INTEGER,
	title VARCHAR,
	FOREIGN KEY (idUser) REFERENCES users(id)
);

CREATE TABLE items (
	idItem INTEGER PRIMARY KEY AUTOINCREMENT,
	idList INTEGER,
	complete BOOLEAN,
	description VARCHAR,
	FOREIGN KEY (idList) REFERENCES lists(id)
);

INSERT INTO users VALUES (NULL, 'qwerty', 'Who Cares', '123@reddit.com', '18/04/1990', 'Female', '8cb2237d0679ca88db6464eac60da96345513964');
INSERT INTO users VALUES (NULL, 'Jenine', 'Jenine MacParland', 'jmacparland0@reddit.com', '18/04/1990', 'Female', 'FpVsl1oLRQ');
INSERT INTO users VALUES (NULL, 'Ross', 'Ross Leney', 'rleney1@yelp.com', '05/09/1956', 'Male', 'Y2qRCL');
INSERT INTO users VALUES (NULL, 'Filmore', 'Filmore Kinnie', 'fkinnie2@networkadvertising.org', '26/06/1978', 'Male', 'XbAma6VD');
INSERT INTO users VALUES (NULL, 'Eddi', 'Eddi Colomb', 'ecolomb3@prlog.org', '11/09/1969', 'Female', 'ajLR1hEKmU');
INSERT INTO users VALUES (NULL, 'Nat', 'Nat Fleet', 'nfleet4@youtube.com', '20/09/1962', 'Female', 'P2uYI1gu');
INSERT INTO users VALUES (NULL, 'Selie', 'Selie Morville', 'smorville5@spiegel.de', '30/09/1997', 'Female', 'TSrDNmMeYGJ');
INSERT INTO users VALUES (NULL, 'Zacharia', 'Zacharia Ackred', 'zackred6@t-online.de', '14/01/1999', 'Male', 'ytzwpmJOxM1');
INSERT INTO users VALUES (NULL, 'Haleigh', 'Haleigh Rochford', 'hrochford7@dyndns.org', '24/08/1999', 'Male', 'OVCob7HQoui');
INSERT INTO users VALUES (NULL, 'Graehme', 'Graehme Corbie', 'gcorbie8@usda.gov', '09/02/1968', 'Male', 'ft2IFFmURkVD');
INSERT INTO users VALUES (NULL, 'Ewell', 'Ewell Dacombe', 'edacombe9@1688.com', '15/08/1963', 'Male', '462KxUC');
INSERT INTO users VALUES (NULL, 'Matti', 'Matti Hearons', 'mhearonsa@pinterest.com', '21/04/1969', 'Female', 'MgXs9eK1p');
INSERT INTO users VALUES (NULL, 'Zedekiah', 'Zedekiah Manus', 'zmanusb@whitehouse.gov', '13/04/1959', 'Male', 'JkJ3BlD');
INSERT INTO users VALUES (NULL, 'Osbourn', 'Osbourn Yellowlees', 'oyellowleesc@over-blog.com', '24/04/1993', 'Male', 'fgpR85uOl');
INSERT INTO users VALUES (NULL, 'Filip', 'Filip Tabbitt', 'ftabbittd@aol.com', '27/06/1982', 'Male', 'p0epi2');
INSERT INTO users VALUES (NULL, 'Elka', 'Elka Stearne', 'estearnee@narod.ru', '14/12/1990', 'Female', 'MdQkshO2vb');
INSERT INTO users VALUES (NULL, 'Farleigh', 'Farleigh Grinaway', 'fgrinawayf@blinklist.com', '02/04/2000', 'Male', 'dMmrlh');
INSERT INTO users VALUES (NULL, 'Dosi', 'Dosi Dockwray', 'ddockwrayg@cnn.com', '17/03/1988', 'Female', 'ywg1h5II');
INSERT INTO users VALUES (NULL, 'Lula', 'Lula Megson', 'lmegsonh@redcross.org', '11/05/1959', 'Female', 'w9sVqk6');
INSERT INTO users VALUES (NULL, 'Shannah', 'Shannah Gambie', 'sgambiei@taobao.com', '18/08/1985', 'Female', 'kveuV75');
INSERT INTO users VALUES (NULL, 'Durward', 'Durward Ostler', 'dostlerj@guardian.co.uk', '02/11/1986', 'Male', 'Ohw00of52');
INSERT INTO users VALUES (NULL, 'Edmund', 'Edmund Nys', 'enysk@bizjournals.com', '13/10/1975', 'Male', 'wuTFH1AxlG');
INSERT INTO users VALUES (NULL, 'Tim', 'Tim Dalgarno', 'tdalgarnol@arstechnica.com', '18/03/1990', 'Male', 'oLEExgKLUh');
INSERT INTO users VALUES (NULL, 'Montgomery', 'Montgomery Kummerlowe', 'mkummerlowem@soup.io', '07/04/1957', 'Male', 'OPQ0ajGd');
INSERT INTO users VALUES (NULL, 'Maiga', 'Maiga Grolmann', 'mgrolmannn@cloudflare.com', '02/05/1991', 'Female', 'tgmiIrHA');
INSERT INTO users VALUES (NULL, 'Clarette', 'Clarette Danilyuk', 'cdanilyuko@fotki.com', '30/12/1954', 'Female', 'aLyxM6Xb3');
INSERT INTO users VALUES (NULL, 'Seana', 'Seana Linning', 'slinningp@etsy.com', '06/07/1959', 'Female', 'UCjxWg8ox');
INSERT INTO users VALUES (NULL, 'Luelle', 'Luelle Osan', 'losanq@furl.net', '13/10/1992', 'Female', 'UztCITtWQCu');
INSERT INTO users VALUES (NULL, 'Sonnnie', 'Sonnnie Devereu', 'sdevereur@pinterest.com', '29/12/1994', 'Female', 'rNCnpc1');
INSERT INTO users VALUES (NULL, 'Genny', 'Genny Scrimshaw', 'gscrimshaws@shop-pro.jp', '23/08/1952', 'Female', 'mtTAArgqcYI');
INSERT INTO users VALUES (NULL, 'Deane', 'Deane Durie', 'dduriet@storify.com', '18/10/1961', 'Male', '1l4aZyFNw2P');


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
