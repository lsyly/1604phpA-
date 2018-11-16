<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/15 0015
 * Time: 上午 8:36
 */

class day15
{
    /*1.定义两个指针，第一个指向第一个元素，第二个指向最后一个元素；
      2.先拿第一个元素和最后一个元素相加，和要求数字进行比较（如果等于便找到了，如果小于向后移一位，如果大于向前移一位）。
    */
import java.util.ArrayList;
public class Solution {
public ArrayList<Integer> FindNumbersWithSum(int [] array,int sum) {

ArrayList<Integer> list = new ArrayList<Integer>();
    // 先判断特殊情况：数字少于两个时
if (array.length < 2 || array == null) {
return list;
}
// 获取数组的长度
int len = array.length;
		int start = 0;
		int end = len - 1;
		while (start < end && start < len - 1 && end > 0) {
            if (array[start] + array[end] == sum) {
                list.add(array[start]);
				list.add(array[end]);
				return list;
				}
            if (array[start] + array[end] > sum) {
                end--;
            }
            if (array[start] + array[end] < sum) {
                start++;
            }
        }
		return list;
    }
}

}