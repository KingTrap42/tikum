-- SQL script to create user table for authentication

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert a default admin user (password should be hashed in a real application)
INSERT INTO `tb_users` (`username`, `password`) VALUES
('admin', 'hashed_password_here'); -- Note: Use a hashed password in production
