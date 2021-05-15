CREATE TABLE main.post (
    id INTEGER PRIMARY KEY,
    title TEXT NOT NULL,
    content TEXT NOT NULL,
    author TEXT,
    image TEXT,
    create_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

--insert test data
INSERT INTO main.post
(title, content, author, image)
VALUES
('title1', 'content1', 'author1', 'img/test-img.png'),
('title2', 'content2', 'author2', 'img/test-img.png'),
('title3', 'content3', 'author3', 'img/test-img.png');
