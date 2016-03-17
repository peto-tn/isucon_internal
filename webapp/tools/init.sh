#!/bin/sh
/bin/rm -rf  ../image/*

/bin/cat ../sql/table_init.sql | /bin/mysql -uisucon isucon
/bin/cat ../sql/data_init.sql | /bin/mysql -uisucon isucon
