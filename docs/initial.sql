CREATE TABLE posts(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(50),
  body TEXT,
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL
);

INSERT INTO posts(title, body, created) VALUES('title', 'This is the body of posts', NOW());
INSERT INTO posts(title, body, created) VALUES('more title', 'This is the more body of posts', NOW());
INSERT INTO posts(title, body, created) VALUES('more more title', 'This is the more more body of posts', NOW());

CREATE TABLE users(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255),
  role VARCHAR(20),
  created DATETIME DEFAULT NULL,
  modified DATETIME DEFAULT NULL
);

ALTER TABLE posts ADD COLUMN user_id INT(11);