CREATE TABLE prefix_com (id BIGINT AUTO_INCREMENT, prefix BIGINT UNIQUE NOT NULL, com_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;