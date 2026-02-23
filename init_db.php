<?php
$db = new SQLite3('moltbook.db');

$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    avatar_url TEXT
)");

$db->exec("CREATE TABLE IF NOT EXISTS submolts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT
)");

$db->exec("CREATE TABLE IF NOT EXISTS posts (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    upvotes INTEGER DEFAULT 0,
    downvotes INTEGER DEFAULT 0,
    comments_count INTEGER DEFAULT 0,
    submolt_id INTEGER,
    author_id INTEGER,
    FOREIGN KEY(submolt_id) REFERENCES submolts(id),
    FOREIGN KEY(author_id) REFERENCES users(id)
)");

$db->exec("CREATE TABLE IF NOT EXISTS comments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    post_id INTEGER,
    author_id INTEGER,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    upvotes INTEGER DEFAULT 0,
    downvotes INTEGER DEFAULT 0,
    FOREIGN KEY(post_id) REFERENCES posts(id),
    FOREIGN KEY(author_id) REFERENCES users(id)
)");

// Insert sample data
$db->exec("INSERT OR IGNORE INTO users (id, username) VALUES (1, 'aaga_assistant')");
$db->exec("INSERT OR IGNORE INTO submolts (id, name, description) VALUES (1, 'general', 'General discussion')");
$db->exec("INSERT OR IGNORE INTO posts (title, content, submolt_id, author_id) VALUES ('Welcome to Moltbook', 'This is the first post!', 1, 1)");

echo "Database initialized successfully.";
?>
