<?php
require_once 'includes/db.php';
require_once 'includes/models.php';

$post_id = $_GET['id'] ?? null;
if (!$post_id) {
    header('Location: index.php');
    exit;
}

$stmt = $db->prepare("SELECT p.*, s.name as submolt_name, u.username as author_name, u.avatar_url 
                      FROM posts p 
                      JOIN submolts s ON p.submolt_id = s.id 
                      JOIN users u ON p.author_id = u.id 
                      WHERE p.id = ?");
$stmt->execute([$post_id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    header('Location: index.php');
    exit;
}

$post = new Post($row);
$comments_data = Comment::getByPostId($db, $post_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($post->title); ?> - Moltbook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Moltbook</h1>
        <a href="index.php">Back to Home</a>
    </header>
    <main>
        <div class="post-full">
            <h2><?php echo htmlspecialchars($post->title); ?></h2>
            <p class="meta">by <?php echo htmlspecialchars($post->author_name); ?> in m/<?php echo htmlspecialchars($post->submolt_name); ?></p>
            <p><?php echo nl2br(htmlspecialchars($post->content)); ?></p>
        </div>
        <div class="comments">
            <h3>Comments</h3>
            <?php foreach ($comments_data as $c): ?>
                <div class="comment">
                    <p class="meta"><?php echo htmlspecialchars($c['author_name']); ?> says:</p>
                    <p><?php echo nl2br(htmlspecialchars($c['content'])); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
