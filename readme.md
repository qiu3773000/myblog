
### myBlog
自己为了熟悉laravel框架练手的一个博客，同时也是自己多年的愿望，一个自己写的博客，代码全部开源

博客地址：[梦心缘星](http://zq.1i1l.com)

博客前端页面是从 [kieran](https://github.com/SuperKieran/TKL) 处扒取修改所得，后端页面是从 源码之家 处下载所得，逻辑代码全部自己所写

###### 博客功能
* 目前只有文章的一些操作，分类的一些操作，标签的一些操作，还有系统设置与友链设置
* redis缓存
* 添加了任务调度,每次收集用户的IP等信息,然后利用队列在每天晚上12点进行插入数据库操作,然后如果发生错误,自动发送错误到我的邮件里

###### 预加
* 看是否能将及时评论同步到微信(还没碰过微信),若不行，试试封装个简单APP(朋友推荐，本人还没接触过，想尝试)

### 安装
> git clone https://github.com/Yela528/laravel-5-myblog

> composer install

> 自行添加.env 文件

> .env 里 `CACHE_DRIVER` 换成 `redis`

> `php artisan key:generate`

> 数据迁移 `php artisan migrate`

<span style='color:yellow'>如果安装发现有包问题,请查看当前文件下的`api.md`文件,因为有时候会突然安装点扩展,直接把该文件里的命令一行一行的执行就行了</span>

这个博客是我没事自己对laravel框架里一些知识的探索，代码写的不是很严谨，有问题欢迎指导，也希望大牛能给我指引一下路

如果有其他问题，可以联系我QQ *2067930913*,如果原意，还可以加群[440221268](http://jq.qq.com/?_wv=1027&k=2CTYswa)一起探讨也行哦。。






∑
#### 以下是之前开发进程





##### <a href="http://zq.1i1l.com" target='_blank'>博客网址</a>



- 2016年08月11日 后台效果图  ![分类页面](http://obq9881x1.bkt.clouddn.com/webwxgetmsgimg%20%282%29.jpg)



- 后台文章的页面： ![后台文章页面](http://obq9881x1.bkt.clouddn.com/webwxgetmsgimg%20%283%29.jpg)
