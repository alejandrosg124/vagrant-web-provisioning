#!/usr/bin/env bash

sudo apt-get update -y

sudo apt install -y postgresql postgresql-contrib

sudo systemctl enable postgresql
sudo systemctl start postgresql

sudo -u postgres psql -c "CREATE USER vagrant WITH PASSWORD 'vagrant';"
sudo -u postgres psql -c "CREATE DATABASE ejemplo OWNER vagrant;"
sudo -u postgres psql -d ejemplo -c "CREATE TABLE amigos(id SERIAL PRIMARY KEY, nombre VARCHAR(50));"
sudo -u postgres psql -d ejemplo -c "INSERT INTO amigos(nombre) VALUES ('Jose'), ('Alejandro'), ('Santiago');"