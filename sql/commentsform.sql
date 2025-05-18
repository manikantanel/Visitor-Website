-- Delete old  table if exists
DROP TABLE IF EXISTS `commentsform`;

-- Create new  table
CREATE TABLE commentsform (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    comment TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    rating TINYINT UNSIGNED NOT NULL,
    image VARCHAR(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
    location VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    recommend ENUM('Yes', 'No') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_general_ci;


INSERT INTO commentsform (name, email, comment, rating, image, location, recommend, created_at) VALUES
-- 1
('Jane Traveler', 'jane.traveler@example.com',
 'I had such a memorable time visiting Colonial Williamsburg! Loved the historical reenactments. Definitely coming back!',
 5,
 'https://images.unsplash.com/photo-1568572933382-74d440642117?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'New York, USA',
 'Yes',
 NOW()),

-- 2
('Carlos Méndez', 'carlos.m@example.net',
 'Beautiful place with lots to see, but it was a bit crowded when I visited. Still worth the trip!',
 4,
 'https://images.unsplash.com/photo-1589571894960-20bbe2828d0a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'San Antonio, TX',
 'Yes',
 NOW()),

-- 3
('Li Wei', 'li.wei88@gmail.com',
 'Great walking tour! The guide explained so many hidden stories about the town’s past.',
 5,
 'https://images.unsplash.com/photo-1558981000-7d58cfc04668?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'Shanghai, China',
 'Yes',
 NOW()),

-- 4
('Amara Singh', 'amara.singh@example.in',
 'Nice place, but signage could be improved for first-time visitors. The museum section was fantastic though.',
 3,
 'https://images.unsplash.com/photo-1532635238-47f52f99a04e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'Delhi, India',
 'Yes',
 NOW()),

-- 5
('Luca Romano', 'luca.romano@outlook.it',
 'Not as exciting as I expected. It was raining, so maybe that ruined the mood a bit. I’d give it another try.',
 2,
 'https://images.unsplash.com/photo-1528892952291-009c663ce843?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'Florence, Italy',
 'No',
 NOW()),

-- 6
('Emily Carter', 'emilyc_23@example.org',
 'Everything was well preserved and felt immersive. Great for both kids and adults!',
 5,
 'https://images.unsplash.com/photo-1549924231-f129b911e442?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=600',
 'Toronto, Canada',
 'Yes',
 NOW());
