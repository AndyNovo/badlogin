PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE users (username text, pwd text);
INSERT INTO "users" VALUES('admin','5743abddddfa08c1e3a99fdebc2e8f3f1108fa12dcd2a8f58a42f141418c22ec');
INSERT INTO "users" VALUES('student','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8');
COMMIT;
