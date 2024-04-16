CREATE TABLE user_photos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    photo_path VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
