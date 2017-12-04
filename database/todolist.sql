DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS lists;
DROP TABLE IF EXISTS items;

CREATE TABLE users (
	userName VARCHAR PRIMARY KEY,
	name VARCHAR,
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

INSERT INTO users VALUES ('1@1.com', '1', '01/01/1981', '356a192b7913b04c54574d18c28d46e6395428ab');
INSERT INTO users VALUES ('2@2.com', '2', '02/02/1982', 'da4b9237bacccdf19c0760cab7aec4a8359010b0');
INSERT INTO users VALUES ('123@reddit.com', 'Who Cares', '18/04/1990', '8cb2237d0679ca88db6464eac60da96345513964');


INSERT INTO lists VALUES (NULL, '1@1.com', 'Asfour Stah');
INSERT INTO lists VALUES (NULL, '2@2.com', 'Coherence');
INSERT INTO lists VALUES (NULL, '123@reddit.com', 'Road Trip: Beer Pong');
INSERT INTO lists VALUES (NULL, '123@reddit.com', 'Escape Artist, The');
INSERT INTO lists VALUES (NULL, '2@2.com', 'Ninja');
INSERT INTO lists VALUES (NULL, '1@1.com', 'Bronx Obama');

INSERT INTO items VALUES (NULL, 1, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 1, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 1, 0, 'Step 3');
INSERT INTO items VALUES (NULL, 2, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 2, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 2, 0, 'Step 3');
INSERT INTO items VALUES (NULL, 3, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 3, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 3, 0, 'Step 3');
INSERT INTO items VALUES (NULL, 4, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 4, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 4, 0, 'Step 3');
INSERT INTO items VALUES (NULL, 5, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 5, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 5, 0, 'Step 3');
INSERT INTO items VALUES (NULL, 6, 1, 'Step 1');
INSERT INTO items VALUES (NULL, 6, 1, 'Step 2');
INSERT INTO items VALUES (NULL, 6, 0, 'Step 3');
