CREATE DATABASE IF NOT EXISTS mahasiswa_if;

USE mahasiswa_if;

CREATE TABLE IF NOT EXISTS mahasiswa (
    NIM INT(11) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    dosen_wali VARCHAR(100) NOT NULL,
    status_mahasiswa VARCHAR(100) NOT NULL,
    PRIMARY KEY (NIM)
);

CREATE TABLE IF NOT EXISTS users (
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    PRIMARY KEY (username)
);

INSERT INTO users (username, password) VALUES ('admin', 'password123');