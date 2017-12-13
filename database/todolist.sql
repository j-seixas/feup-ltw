DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS lists;
DROP TABLE IF EXISTS items;

CREATE TABLE users (
	userName VARCHAR PRIMARY KEY,
	name VARCHAR,
	birthDate DATE,
	about VARCHAR,
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

INSERT INTO users VALUES ('1@1.com', '1', '1981-01-01', 'I like trains', '$2a$12$kH7F0mXLJz2U3.FWI5FIOe3M5yII7sigGfjVE8dZhvVDBfI1MHXT.');
INSERT INTO users VALUES ('2@2.com', '2', '1982-02-02', 'I like trains 2', '$2a$12$onQj9tTdinD2kmpd89BlVugtOH4Z0N4tviY/mdDWnM2s0at9BM7Iu');
INSERT INTO users VALUES ('123@reddit.com', 'Who Cares', '1990-04-18', 'I like trains 3',  '$2a$12$CMHljy4KuV7UWbTVhzz7bObt8Tx7blx2SmzVBVEoEov2x7TNRSamG');


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
