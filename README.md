php-debug-dork
==============


## Why use this way to debug PHP：

- print_r() , var_dump() 破坏页面布局
- print_r() , var_dump() 打印出来的显示，并不人性化
- 有些时候，比如命令行执行PHP，要打印变量依靠的是在服务器上记log文件，然后查看log文件里的print_r(), var_dump() 内容，非常不便
- 有些时候，无法判断程序执行到这个地方了
- 用这个调试，开发微信时打印变量也超方便

## PREVIEW
#### 完全不破坏原程序的显示了
![完全不破坏原程序的显示了](https://raw.githubusercontent.com/phoenixg/php-debug-dork/master/screenshot/php-debug-dork1.png)
#### 调用很简单，仅需2行
![调用很简单，仅需2行](https://raw.githubusercontent.com/phoenixg/php-debug-dork/master/screenshot/php-debug-dork3.png)
#### 查看report.php,多么nice的输出！
![查看report.php,多么nice的输出！](https://raw.githubusercontent.com/phoenixg/php-debug-dork/master/screenshot/php-debug-dork2.png)
