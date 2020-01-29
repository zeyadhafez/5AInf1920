USE 5ainf1920;

CREATE TABLE computer(
	id INTEGER NOT NULL PRIMARY KEY,
    marcaTastiera VARCHAR(50),
    marcaVideo VARCHAR(50),
	marcaCase VARCHAR(50)
)

INSERT INTO computer(id, marcaTastiera, marcaVideo, marcaCase)
VALUES (1, 'Sony', 'Samsung', 'Lg'),
	   (2, 'Lg', 'Vaio', 'Sony'),
	   (3, 'Apple', 'Nokia', 'Vaio'),
	   (4, 'Microsoft', 'Xiaomi', 'Microsoft');
    
