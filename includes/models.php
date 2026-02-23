<?php
class Post {
	public $id;
	public $title;
	public $content;
	public $created_at;
	public $upvotes;
	public $downvotes;
	public $comments_count;
	public $submolt_id;
	public $submolt_name;
	public $author_id;
	public $author_name;
	public $avatar_url;

	public function __construct($row = null) {
		if ($row) {
			$this->fill($row);
		}
	}

	public function fill($row) {
		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->content = $row['content'];
		$this->created_at = $row['created_at'];
		$this->upvotes = $row['upvotes'];
		$this->downvotes = $row['downvotes'];
		$this->comments_count = $row['comments_count'];
		$this->submolt_name = $row['submolt_name'];
		$this->author_id = $row['author_id'];
		$this->author_name = $row['author_name'];
		$this->avatar_url = $row['avatar_url'];
	}

	public static function all($db) {
		$query = "SELECT p.*, s.name as submolt_name, u.username as author_name, u.avatar_url 
				  FROM posts p 
				  JOIN submolts s ON p.submolt_id = s.id 
				  JOIN users u ON p.author_id = u.id 
				  ORDER BY p.created_at DESC";
		$stmt = $db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function create($db) {
		$query = "INSERT INTO posts (title, content, submolt_id, author_id) VALUES (?, ?, ?, ?)";
		$stmt = $db->prepare($query);
		$result = $stmt->execute([$this->title, $this->content, $this->submolt_id, $this->author_id]);
		if ($result) {
			$this->id = $db->lastInsertId();
			return true;
		}
		return false;
	}
}

class Comment {
	public $id;
	public $post_id;
	public $author_id;
	public $content;
	public $created_at;
	public $upvotes;
	public $downvotes;
	public $author_name;
	public $avatar_url;

	public function __construct($row = null) {
		if ($row) {
			$this->id = $row['id'];
			$this->post_id = $row['post_id'];
			$this->author_id = $row['author_id'];
			$this->content = $row['content'];
			$this->created_at = $row['created_at'];
			$this->upvotes = $row['upvotes'];
			$this->downvotes = $row['downvotes'];
			$this->author_name = $row['author_name'];
			$this->avatar_url = $row['avatar_url'];
		}
	}

	public static function getByPostId($db, $post_id) {
		$query = "SELECT c.*, u.username as author_name, u.avatar_url 
				  FROM comments c 
				  JOIN users u ON c.author_id = u.id 
				  WHERE c.post_id = ? 
				  ORDER BY c.created_at ASC";
		$stmt = $db->prepare($query);
		$stmt->execute([$post_id]);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function create($db) {
		$query = "INSERT INTO comments (post_id, author_id, content) VALUES (?, ?, ?)";
		$stmt = $db->prepare($query);
		$result = $stmt->execute([$this->post_id, $this->author_id, $this->content]);
		if ($result) {
			$this->id = $db->lastInsertId();
			// Update post comment count
			$query = "UPDATE posts SET comments_count = comments_count + 1 WHERE id = ?";
			$stmt = $db->prepare($query);
			$stmt->execute([$this->post_id]);
			return true;
		}
		return false;
	}
}
?>
