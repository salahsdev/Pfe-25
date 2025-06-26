--  table for saved cities
CREATE TABLE IF NOT EXISTS saved_cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    city_name VARCHAR(100) NOT NULL,
    city_page VARCHAR(100) NOT NULL,
    saved_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES useer(id) ON DELETE CASCADE,
    UNIQUE KEY unique_user_city (user_id, city_name)
);
