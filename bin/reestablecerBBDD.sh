#!/bin/bash

mysql -u adminMGAnime -p MGAnime < resources/archivos_sql/tablas.sql

mysql -u adminMGAnime -p MGAnime < resources/archivos_sql/insert.sql
