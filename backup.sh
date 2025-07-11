#!/bin/bash
DB_NAME="blog_db"
DB_USER="root"
DB_PASS=""
BACKUP_PATH="./backups"
DATE=$(date +%F_%T)

mkdir -p $BACKUP_PATH

mysqldump -u $DB_USER $DB_NAME > $BACKUP_PATH/blog_db_backup_$DATE.sql
