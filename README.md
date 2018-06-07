# Retrieve_Tumblr_Posts
A simple website developed in ReactJS and PHP connecting to the Tumblr API that fetches all the posts made with the hashtag mentioned. A nice paginated version makes the user see the results more clearly.

# My Tumblr Selected Posts
A web application to retrieve Tumblr posts through the Tumblr API with posts tagged with the keyword “#happy”. The posts are displayed in a table with other information such as the post ID, blog name, date and note count. The project has been implemented with PHP as the server side language and ReactJS as the client side language along with HTML and CSS. The table contains 10 posts per page with a total of 120 posts and paging is enabled for ease of viewing the results by the user. The columns are sortable as well as filterable so that users can search for the desired post from a date, note count or blog. The link in the Text column takes the user directly to the permalink of the post. 
# Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 
Prerequisites
Below is the list of softwares to be installed.
1.	PHP7
2.	Composer
3.	React
4.	ReactTable library
5.	Node >= 6
# Installing
Please install the following for complete setup of the dev environment.
1.	Install PHP7 on the machine 
Ref: https://www.sitepoint.com/how-to-install-php-on-windows/
2.	Install Composer
3.	Install React:
I installed the IDE Visual Studio for React 
Ref: https://github.com/facebook/create-react-app
4.	Install the ReactTable library 
	npm install react-table
Ref: https://github.com/react-tools/react-table/blob/master/README.md
# Running the app
Start by running the “index.php” file from the command prompt by going to the folder containing the file.
cd C:\PHP7\php-docs-hello-world-master
Run the command “php –S localhost:8080” to start the local server.
In the browser go to http://localhost:8080
The browser displays a “success” message upon successfully creating the json file or “failed” message otherwise. In case failed, try running again.
The JSON file “tagged_posts_file.json” containing the posts is created in a directory accessible by React. Here folder called “my-app”.
In another command prompt window cd to the “my-app” folder
cd C:\PHP7\php-docs-hello-world-master\my-app
Then type:
npm start
From the browser navigate to http://localhost:3000/ to see the app in action.

# Built With
•	Sublime Text
•	Visual Studio Code
# Authors
•	DEBIKA DUTT
# Acknowledgments
•	StackOverflow : https://stackoverflow.com/questions/47311845/print-more-than-20-posts-from-tumblr-api
•	Tumblr API doc : https://www.tumblr.com/docs/en/api/v2
•	Git : https://github.com/tumblr/tumblr.php
