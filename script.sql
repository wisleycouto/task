CREATE TABLE task_db.tb_usuarios (
	id BIGINT UNSIGNED auto_increment NOT NULL PRIMARY KEY,

	login varchar(100) NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
