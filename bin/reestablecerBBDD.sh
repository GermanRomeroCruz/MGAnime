#!/bin/bash

mysql -u adminanimeMG -p animeMG < resources/archivos_sql/tablas.sql

mysql -u adminanimeMG -p animeMG < resources/archivos_sql/insert.sql
