# setup project
## install packages
``composer install``
## setup database
`cp .env.example .env`
update database connection info in .env and then migrate
```php artisan migrate  ```

## start server
`php artisan serve`

## api 
URl: `localhost:8000/api/v1/applications`
POST BODY: 
```
{
    "first_name":"liang",
    "last_name":"huang",
    "shop_category":"Themes",
    "portfolio_link":"https://google.cn",
    "has_online_shop":true,
    "online_shop_url":"https://google.cn2543",
    "question_1_answer":"1",
    "question_2_answer":"2",
    "question_3_answer":"3"
}
```


