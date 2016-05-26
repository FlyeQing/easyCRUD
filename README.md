#easyCRUD
�򵥵���ɾ�Ĳ飬ѧϰPHP+MySQL: <a href="http://www.w3school.com.cn/sql/sql_syntax.asp">sql�﷨</a>

###1.�����¼��INSERT INTO table_name (��1, ��2,...) VALUES (ֵ1, ֵ2,....)
```sql
mysql> INSERT tb1 VALUES('TOM',25,5000);//����һ����¼��tom��25�꣬����5000
Query OK, 1 row affected
```
###2.�������ݱ�:����һ����Ϊlist�����ݱ�
```sql
CREATE TABLE list (  
  id int(11) NOT NULL auto_increment,  
  title varchar(100) NOT NULL,  
  sort mediumint(6) NOT NULL default '0',  
  PRIMARY KEY  (`cid`)  
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
 ```
 ###3.����÷�
 ####3.1 NOT NULL default '0'����ֹΪ�գ�Ĭ�����Ϊ0
 ####3.2 auto-increment :���д���һ�� auto-increment �ֶΣ���ÿ�β����¼�¼ʱ���Զ��ش��������ֶε�ֵ
 ####3.3 PRIMARY KEY:���ؼ���(primary key)�Ǳ��е�һ�������ֶΣ�����ֵ����Ψһ�ر�ʶ���е�ĳһ����¼
 
 ###4.MySQL����
* MySQL���ͣ�TINYINT, SMALLINT, MEDIUMINT, INT, BIGINT�ķ�Χ
  
* TINYINT���з��ŵķ�Χ��-128��127���޷��ŵķ�Χ��0��255��2��8 �η�
*  
* SMALLINT���з��ŵķ�Χ��-32768��32767���޷��ŵķ�Χ��0��65535��2��16�η�
*  
* MEDIUMINT���з��ŵķ�Χ��-8388608��8388607���޷��ŵķ�Χ��0��16777215��2��24�η�
*  
* INT(integer)���з��ŵķ�Χ��-2147483648��2147483647���޷��ŵķ�Χ��0��4294967295��2��32�η�
*  
* BIGINT���з��ŵķ�Χ��-9223372036854775808��9223372036854775807���޷��ŵķ�Χ��0��18446744073709551615��2��64�η�