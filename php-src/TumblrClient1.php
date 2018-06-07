<?php
/**
 *  Connect to the Tumblr API Client
 *
 *  Author: Debika Dutt debikadutt@gmail.com
 *  Date:   4/7/2018
 */
require_once('vendor/autoload.php');

class TumblrClient {

	/**
	 *  Get the posts with the specified tag 
     *  
     *  @return array Array containing the tagged posts
	 */
	public function get_all_posts() {
		// Registered tumblr api keys
		$consumerKey = '';
		$consumerSecret = '';
		$token = '';
		$tokenSecret = '';

		// Connect to the API with the help of the API keys
		$client = new Tumblr\API\Client($consumerKey, $consumerSecret, $token, $tokenSecret);

		// The tag to retrieve posts
		$tag = 'happy';
		// The number of tagged posts to retrieve
		$limit = 20;
		// Post offset
		$offset = 0;
		$tagged_posts = [];

		// Get tagged posts with set limit
		while ($offset<=100) {
			$posts = $client->getTaggedPosts($tag, ['limit' => $limit, 'offset' => $offset]);

			// Retrieve relevant information to be written to file
    	
    		foreach($posts as $postdata) {
        		$post['id'] = $postdata->id;
        		$post['type'] = $postdata->type;
        		$postDate = new DateTime($postdata->date);
        		// Retrieve only the date part from postdata
        		$post['date'] = $postDate->format('d-M-Y');
        		$post['note_count'] = $postdata->note_count;
        		$post['short_url'] = $postdata->short_url;
        		$post['blog_name'] = $postdata->blog_name;
        		// Convert html entities in the postadata summary to applicable characters and strip html tags
        		$summary = html_entity_decode($postdata->summary);
        		$post['summary'] = strip_tags($summary);
        		array_push($tagged_posts, $post);
    		}

    	$offset += 20;
		}

		return $tagged_posts;
		}

	/**
	 *  Create json file containing all posts 
     *  
     *  @return int | boolean On success returns the number of bytes written or false on failure
	 */
	public function create_json_file() {
		$result = $this->get_all_posts();
		// Encode the array of posts to json (pretty printed)
		$json_data = json_encode($result, JSON_PRETTY_PRINT);
		// Write the json to file
		$success = file_put_contents('.\my-app\src\tagged_posts_file.json', $json_data);

		return $success;
	}   
}
?>
