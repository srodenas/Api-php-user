- `santi: srodher115@g.educaand.es`
Ejemplo de vídeo 👇

[![Watch the video](https://img.youtube.com/vi/v-r_12oezds/maxresdefault.jpg)](https://youtu.be/v-r_12oezds)

# docker-lamp

Docker with Apache, MySQL 8.0, PHPMyAdmin and PHP.

I use docker-compose as an orchestrator. To run these containers:

```
docker-compose up -d
```

Para abrir tu phpmyadmin [http://localhost:8008](http://127.0.0.1:8008)
Para tu contenedor web [http://localhost:8080](http://127.0.0.1:8080)


Tu proyecto estará dentro de `www/` and then, open web [http://localhost:puerto/YourProject](http://127.0.0.1:puerto/YourProject)
por ejemplo http://localhost:8080/api-app-user/endp/register.php

Como ejecutar el contenedor Msql. 


- `docker-compose exec db-my_app_user bash` 
- `mysql -h db-my_app_user -u santi -psanti -P 3306`

Como ejecutar mysql desde contenedor web.


- `docker-compose exec www-my_app_user bash`
- `apt-get update && apt-get install -y mariadb-client`
- `mariadb -h db-my_app_user -u santi -p santi -P 3306 my_app_user`


Desde postman:

- `http://localhost:8080/api-app-user/endp/register.php`
{
    "email": "srodher115@g.educaand.es", 
    "password" : "12345",
    "telefono" : "953456545",
    "nombre" : "santi"  
}


Infrastructure as code!

You can read this a Spanish article in Crashell platform: [Apache, PHP, MySQL y PHPMyAdmin con Docker LAMP](https://www.crashell.com/estudio/apache_php_mysql_y_phpmyadmin_con_docker_lamp).


### Infrastructure model

![Infrastructure model](.infragenie/infrastructure_model.png)