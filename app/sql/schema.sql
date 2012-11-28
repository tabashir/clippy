
-----------------------------------------------------------------------
-- clippings
-----------------------------------------------------------------------

DROP TABLE IF EXISTS clippings;

CREATE TABLE clippings
(
    id INTEGER NOT NULL PRIMARY KEY,
    source VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL
);
