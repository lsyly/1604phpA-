<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/16 0016
 * Time: 上午 8:33
 */

class day16
{
    //定义程序的入口点
    public：
int FirstNotRepeatingChar(string str) {
if (str == "")
return -1;
int site = 0;
int flag = 0;
for (int i = 0;i < str.length();i++)
{
char ch = str[i];
for (int j = 0;j < str.length();j++)
{
if (i != j) //i和j相同的话就是比较的同一个字符
{
if (ch == str[j]) break;
if (j == str.length() - 1) flag = 1; //已经找完所有的数据
}

}
if (flag == 1)
{
    site = i+1;
    break;
}
}
return site;
}
};
int main()
{

Solution so;
    //int count = so.FirstNotRepeatingChar("wangdanwang");
    int count = so.FirstNotRepeatingChar("");
    cout << count << endl;



    cout << endl;
    return 0;
}

}