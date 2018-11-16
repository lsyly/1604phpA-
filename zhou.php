<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/5 0005
 * Time: 上午 9:24
 */

    public class Test{

        public static void main(string[] args){
            int n=6;
            system.out.println(jiecheng(n));

}
    public static Double jiecheng (int i){
            Double result =1.0;
            for(int j=1;j<=i;j++){
                result * =j;
    }
    return result;
}
}