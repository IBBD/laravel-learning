# 同源策略与跨域资源共享


## 同源策略（same-origin policy）

同源策略是一种策略、约定，所有的浏览器都实现了这个约定，它影响了非同源的数据数据共享。

详情可以参考以下链接
- [百度百科-同源策略](./public/同源策略_百度百科.pdf)
- [浏览器同源政策及其规避方法](./public/浏览器同源政策及其规避方法 - 阮一峰的网络日志.pdf)


## 跨域资源共享（Cross-origin resource sharing）

由于互联网的高速发展，导致了web的应用架构极速复杂化，随之出现了跨域资源共享问题。

详情可以参考以下链接
- [跨域资源共享 CORS 详解](./public/跨域资源共享 CORS 详解 - 阮一峰的网络日志.pdf)

## 实验演示

### 跨域之简单请求

1. 进入public目录下运行php -S localhost:8000
2. 进入public目录用chrome打开cors.htm，打开控制台即可看到后台返回结果
3. 关闭服务器ctrl+c

### 跨域之非简单请求

1. 开启router.php中路由Route::options('/cors', 'CORSController@preflight'); 
2. 取消cors.htm中第11行的注释
3. 进入public目录下运行php -S localhost:8000
4. 进入public目录用chrome打开cors.htm，打开控制台即可看到后台返回结果
5. 关闭服务器ctrl+c

### 跨域之Session使用

1. 取消cors.htm中第9行的注释
2. 进入public目录下运行php -S localhost:8000
3. 进入public目录用chrome打开cors.htm，打开控制台即可看到后台返回结果
4. 关闭服务器ctrl+c

## 结束语

文档写的比较简陋，有不明白的欢迎找我讨论，其实小伙伴一试便知，要记住站在岸上学游泳是不可能学会的。

