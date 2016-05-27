#easyCRUD
简单的增删改查，学习PHP+MySQL: [sql语法](http://www.w3school.com.cn/sql/sql_syntax.asp)

案例来自：[分类信息的增、删、改、查（Jquery+Ajax+PHP+MySQL](http://www.thinkphp.cn/code/1172.html)

###1.插入记录：INSERT INTO table_name (列1, 列2,...) VALUES (值1, 值2,....)
```sql
mysql> INSERT tb1 VALUES('TOM',25,5000);//插入一条记录：tom，25岁，工资5000
Query OK, 1 row affected
```
###2.创建数据表:创建一个名为list的数据表
```sql
CREATE TABLE list (  
  id int(11) NOT NULL auto_increment,  
  title varchar(100) NOT NULL,  
  sort mediumint(6) NOT NULL default '0',  
  PRIMARY KEY  (`cid`)  
 ) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
 ```
###3.相关用法
####3.1 NOT NULL default '0'：禁止为空，默认填充为0
####3.2 auto-increment :表中创建一个 auto-increment 字段，在每次插入新记录时，自动地创建主键字段的值
####3.3 PRIMARY KEY:主关键字(primary key)是表中的一个或多个字段，它的值用于唯一地标识表中的某一条记录
####3.4 .$row['title']. 和 .=
 <div>
 <h2>PHP 字符串运算符</h2>
 
 <table class="dataintable">
 <tr>
 <th>运算符</th>
 <th>名称</th>
 <th>例子</th>
 <th>结果</th>
 </tr>
 
 <tr>
 <td>.</td>
 <td>串接</td>
 <td>
 $txt1 = &quot;Hello&quot;
 $txt2 = $txt1 . &quot; world!&quot;
 </td>
 <td>现在 $txt2 包含 &quot;Hello world!&quot;</td>
 </tr>
 
 <tr>
 <td>.=</td>
 <td>串接赋值</td>
 <td>
 $txt1 = &quot;Hello&quot;
 $txt1 .= &quot; world!&quot;
 </td>
 <td>现在 $txt1 包含 &quot;Hello world!&quot;</td>
 </tr>
 </table>
 
 <p>下例展示了使用字符串运算符的结果：</p>
 
 <h3>实例</h3>
 
 <pre>
 &lt;?php
 $a = &quot;Hello&quot;;
 $b = $a . &quot; world!&quot;;
 echo $b; <span class="code_comment">// 输出 Hello world!</span>
 
 $x=&quot;Hello&quot;;
 $x .= &quot; world!&quot;;
 echo $x; <span class="code_comment">// 输出 Hello world!</span>
 ?&gt;
 </pre>
 </div>
###4.MySQL整型
 
* MySQL整型：TINYINT, SMALLINT, MEDIUMINT, INT, BIGINT的范围
* 
* TINYINT：有符号的范围是-128至127，无符号的范围是0到255，2的8 次方
* 
* SMALLINT：有符号的范围是-32768至32767，无符号的范围是0到65535，2的16次方
* 
* MEDIUMINT：有符号的范围是-8388608至8388607，无符号的范围是0到16777215，2的24次方
* 
* INT(integer)：有符号的范围是-2147483648至2147483647，无符号的范围是0到4294967295，2的32次方
* 
* BIGINT：有符号的范围是-9223372036854775808至9223372036854775807，无符号的范围是0到18446744073709551615，2的64次方
