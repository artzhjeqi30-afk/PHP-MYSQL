CREATE TABLE user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO user (name, surname, email) VALUES
('John', 'Smith', 'john@example.com'),
('Sara', 'Jones', 'sara@example.com'),
('Alex', 'Brown', 'alex@example.com'); 