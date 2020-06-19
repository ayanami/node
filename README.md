# 🎃 DEVICE SHARE
## 💡 HOW TO CREATE ENVIRONMENT

```Bash
$ git clone https://OAuth2:${GIT_ACCESS_TOKEN}@sd-pj-management.systena.co.jp:8080/gitlab/docomo-prod/DeviceShare.git
```

### API
```Bash
$ cd DeviceShare/api
$ vi .env

# timezone
TZ=Asia/Tokyo
# proxy host
PROXY_HOST=proxy_host
# proxy port
PROXY_PORT=proxy_port
# proxy user
PROXY_USER=proxy_user
# proxy password
PROXY_PASSWORD=proxy_password
# proxy password (encoding required. ex @ => %40)
PROXY_PASSWORD_ENCODING=proxy_password_encoding

$ docker-compose up -d --build
$ docker-compose exec node ash
```

```
/work # npm install
/work # npm install -g forever
/work # forever -w start app/app.js
```

👉 http://localhost:20080/api/v1/test

### WordPress
```Bash
$ cd DeviceShare/wordpress
$ vi .env

# root password
DB_ROOT_PASS=root
# database name
DB_NAME=wordpress
# database user
DB_USER=wordpress
# database password
DB_PASS=wordpress
# timezone
TZ=Asia/Tokyo
# proxy host
PROXY_HOST=proxy_host
# proxy port
PROXY_PORT=proxy_port
# proxy user
PROXY_USER=proxy_user
# proxy password
PROXY_PASSWORD=proxy_password
# proxy password (encoding required. ex @ => %40)
PROXY_PASSWORD_ENCODING=proxy_password_encoding

$ docker-compose up -d --build
```

👉 https://localhost:10443