###mysql

SELECT COUNT(posts.id) as total_number FROM posts LEFT JOIN users on posts.id = users.id WHERE users.email = 'test@gmail.com' and posts.created_at BETWEEN NOW() - INTERVAL 30 DAY AND NOW();

INDEX ( created_at, user_id );

###javascript

const res = [{
	....
}];

const get_max_rating = (res) => {
	let max_rating = 0;
	res.forEach((page) => {
		if (typeof page.data != "undefined") {
			page.data.forEach((d) => {
				if (max_rating < d.rating) {
					max_rating = d.rating;
				}
			});
		}
	});

	return max_rating;
}

get_max_rating(res);

###css

.red-box {
	display: flex;
	align-items: center;
	justify-content: center;
}

