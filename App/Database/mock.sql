create DATABASE liblary_db;

use liblary_db;

CREATE TABLE authors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    text TEXT,
    img VARCHAR(255),
    author_id INT,
    genre_id INT,
    FOREIGN KEY (author_id) REFERENCES authors(id),
    FOREIGN KEY (genre_id) REFERENCES genres(id)
);


SELECT authors.name, COUNT(books.id) AS book_count
FROM authors
LEFT JOIN books ON books.author_id = authors.id
GROUP BY authors.id;


SELECT genres.name, COUNT(books.id) AS book_count
FROM genres
LEFT JOIN books ON books.genre_id = genres.id
GROUP BY genres.id;
