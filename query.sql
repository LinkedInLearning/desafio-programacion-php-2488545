create database mydb;

use mydb;

CREATE TABLE users(
  user_id int PRIMARY KEY auto_increment,
  user_name varchar(50) not null,
  password varchar(200) not null,
  role_id int,
  FOREIGN KEY(role_id) references roles(role_id)
);

CREATE TABLE roles(
    role_id INT PRIMARY KEY auto_increment,
    role_name varchar(50) not null
);

CREATE TABLE permissions(
  permission_id INT PRIMARY KEY auto_increment,
  permission_name varchar(50) not null
);

CREATE TABLE role_permissions(
  role_id int,
  permission_id int,
  primary key(role_id, permission_id),
  FOREIGN Key(role_id) references roles(role_id),
  FOREIGN KEY(permission_id) references permissions(permission_id)
);

INSERT INTO roles (role_name) VALUES('admin'), ('user');
INSERT INTO permissions (permission_name) VALUES('view_profile'), ('edit_profile'), ('delete_profile');

INSERT INTO role_permissions (role_id, permission_id) VALUES
(1,1), (1,2),(1,3),(2,1);

INSERT INTO users (user_name,password, role_id) VALUES
('user1', 'bc547750b92797f955b36112cc9bdd5cddf7d0862151d03a167ada8995aa24a9ad24610b36a68bc02da24141ee51670aea13ed6469099a4453f335cb239db5da', 1),
('user2', '92a891f888e79d1c2e8b82663c0f37cc6d61466c508ec62b8132588afe354712b20bb75429aa20aa3ab7cfcc58836c734306b43efd368080a2250831bf7f363f', 2);
