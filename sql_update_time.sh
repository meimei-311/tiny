#!/bin/bash

HOSTNAME='localhost'					#数据库信息
PORT="3306"
USERNAME="root"
PASSWORD="kamejin"

DBNAME="test"                                                       #数据库名称
TABLENAME="wp_madapi_apkinfo"                             #数据库中表的名称

#Create random time
random_date()
{	
	fomat_time[0]=2016
	fomat_time[1]=$(($RANDOM%9+1))
	fomat_time[2]=$(($RANDOM%30+1))
	fomat_time[3]=$(($RANDOM%23+1))
	fomat_time[4]=$(($RANDOM%59+1))
	fomat_time[5]=$(($RANDOM%59+1))

	for((j=1; j<=5;j++));
	do 
	if [[ ${fomat_time[j]} -lt 10 ]]; then
		
		fomat_time[j]="0${fomat_time[j]}"	
	fi
	done
	random_time="${fomat_time[0]}-${fomat_time[1]}-${fomat_time[2]} ${fomat_time[3]}:${fomat_time[4]}:${fomat_time[5]}"
	echo ${random_time}	
}


#update upload_time with random_date
select_sql="select md5 from ${TABLENAME} WHERE upload_time NOT LIKE '2016-10-%';"
#select_sql="select md5 from ${TABLENAME};"
res=`mysql -h${HOSTNAME}  -P${PORT}  -u${USERNAME} -p${PASSWORD} ${DBNAME} -e "${select_sql}"`
for md5 in ${res[@]};
do
	new_time=$(random_date)
	update_sql="update ${TABLENAME} set upload_time='${new_time}' where md5='${md5}';"
	echo ${update_sql}
	mysql -h${HOSTNAME}  -P${PORT}  -u${USERNAME} -p${PASSWORD} ${DBNAME} -e "${update_sql}"
done

