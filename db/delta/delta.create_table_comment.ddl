CREATE TABLE main.comment (
    id INTEGER PRIMARY KEY,
    post_id INTEGER REFERENCES post (id),
    rate INTEGER NOT NULL,
    content TEXT,
    author TEXT NOT NULL,
    create_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

--insert test data
INSERT INTO main.comment
(post_id, rate, content, author)
VALUES
(1, 3, 'comment content 1', 'comment author 1'),
(1, 1, 'comment content 2', 'comment author 2'),
(2, 2, 'comment content 3', 'comment author 3'),
(2, 5, 'comment content 4', 'comment author 4'),
(3, 4, 'comment content 5', 'comment author 5');