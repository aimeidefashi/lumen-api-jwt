### 使用 Lumen 搭建 RESTful Api
## Lumen PHP Framework

## 关于
- [JWT Auth](https://github.com/tymondesigns/jwt-auth) 
- 测试代码 `App\Http\Controllers\Auth\AuthController`
- 通过请求头携带: `Authentication` 认证

## 快速开始

- 克隆 或 下载这个项目
- 执行 `composer install`
- 创建并编辑配置文件 `.env` 
- 执行 `php artisan migrate --seed` 

## 阅读扩展

```sh
app/helpers.php
bootstrap/app.php
config/app.php
config/auth.php
config/jwt.php
public/.htaccess
app/Http/routes.php
app/Auth/ApiGuard.php
app/Http/Controllers/Auth/AuthController.php
```

## 登录测试
* POST   /auth/login

```
email: johndoe@example.com
password: johndoe
```
