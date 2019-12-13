<?php 

function getPublishedPosts() {
	global $connect;
	$sql = "SELECT * FROM posts WHERE published=true";
	$result = mysqli_query($connect, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}

function getPostTopic($post_id){
	global $connect;
	$sql = "SELECT * FROM topics WHERE id=
			(SELECT topics_id FROM post_topics WHERE post_id=$post_id) LIMIT 1";
	$result = mysqli_query($connect, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic;
}

function getPublishedPostsByTopic($topic_id) {
	global $connect;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topics pt 
				WHERE pt.topics_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($connect, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}

function getTopicNameById($id)
{
	global $connect;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($connect, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic['name'];
}

function getPost($slug){
	global $connect;
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($connect, $sql);

	$post = mysqli_fetch_assoc($result);
	if ($post) {
			$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}

function getAllTopics()
{
	global $connect;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($connect, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}
?>