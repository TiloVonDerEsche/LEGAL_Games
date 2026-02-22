CREATE DATABASE IF NOT EXISTS forum;
USE forum;

-- Table for the Threads
CREATE TABLE threads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    cdate DATE NOT NULL, 
    comment_count INT DEFAULT 0
);

-- Table for all Comments (Linked to threads via thread_id)
CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    thread_id INT NOT NULL,
    content TEXT NOT NULL,
    author VARCHAR(100) NOT NULL,
    cdate DATE NOT NULL, -- BIGINT before
    FOREIGN KEY (thread_id) REFERENCES threads(id) ON DELETE CASCADE
);


-- Default Threads
-- Insert Thread 1
INSERT INTO threads (id, title, content, author, cdate, comment_count) 
VALUES (1, 'This should work now.', 'LEGAL_Games has a working forum mySQL Database!', 'LEGAL_Owner', '2026-02-22', 2);

-- Insert Comments for Thread 1
INSERT INTO comments (thread_id, content, author, cdate) VALUES 
(1, 'Comments should work aswell.', 'LEGAL_Owner', '2026-02-22'),
(1, 'Not impressed', 'Tilo', '2026-02-22');

-- Insert Thread 2
INSERT INTO threads (id, title, content, author, cdate, comment_count) 
VALUES (2, 'Epicness of the day', 'This day is epic', 'Tilonator', '2021-09-23', 2);

-- Insert Comments for Thread 2
INSERT INTO comments (thread_id, content, author, cdate) VALUES 
(2, 'Boring default threads... This forum needs some actual users', 'LEGAL_Owner', '2026-02-22'),
(2, 'Test', 'Tilonator', '2021-09-23');

-- Insert Thread 3
INSERT INTO threads (id, title, content, author, cdate, comment_count) 
VALUES (3, 'SQL Injections should be possible', 'Feel free to try and break something with a SQL Injection!', 'LEGAL_Owner', '2026-02-22', 0);


