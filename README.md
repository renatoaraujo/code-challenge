Product service
====

Install and run using Docker:

```bash
$ docker-compose up --build
```

Don't forget to add to your `/etc/hosts` `product.localhost`

You can use the following command as root:
 ```bash
$ echo '127.0.0.1 product.localhost' >> /etc/hosts
```

Run the migrations:
```bash
$ docker-compose exec php bin/console doctrine:migrations:migrate -n
```

Run the fixtures for test purpose:
```bash
$ docker-compose exec -e APP_ENV=dev php bin/console doctrine:fixture:load -n
```

## Usage

API endpoint
```bash
$ http://product.localhost/api/product
```

Response
```json
{
    "uuid": "506c2bb8-082b-4893-86f1-fb9bf3253bae",
    "sku": "SKU5DF20F283F0A5",
    "vendor": "Vendor 3",
    "name": "Cover 3",
    "color": "#d6f243",
    "imageUrl": "https://via.placeholder.com/150/d6f243",
    "description": "Et ex ab voluptas quidem distinctio doloremque iusto. Id molestiae quos minus voluptatem iure aut et. Fuga qui voluptas ut quibusdam assumenda. Saepe expedita magni voluptatem nesciunt est. Autem sed dolores aliquid qui sequi quia et est. Qui aut laudantium qui qui incidunt. Ullam qui autem natus unde tempora voluptate. Voluptate aperiam qui autem repudiandae voluptas non. Id aut qui aut aliquam. Atque voluptatem ut molestiae maiores. Culpa non rerum amet numquam dicta nisi omnis. Excepturi ullam eos nisi quae tenetur. Ut mollitia voluptas sed illum. Quo itaque optio voluptatibus deleniti. Nihil quasi sed et. Qui quia nostrum voluptate consequuntur suscipit itaque. In quia ducimus ea rerum magni exercitationem distinctio veritatis. Sint ut laudantium qui labore ut aut vero. Eum beatae velit et qui. Unde tempore exercitationem facere. Laudantium ipsa non reiciendis quaerat. Quia adipisci voluptate cum debitis earum est ut. Cupiditate libero sint tenetur minus distinctio. Et ab nihil necessitatibus. Ut consequatur excepturi ducimus esse dicta. Aut provident voluptatem vel. Deleniti nobis recusandae illum eum. Aliquam omnis praesentium et qui. Ut accusamus voluptas qui laudantium quia aut et labore. Atque explicabo fugiat voluptatum explicabo nobis labore. Aut unde iure iusto non est. Nihil aut vel inventore eum iure illo placeat. Delectus aliquam sed laboriosam harum molestiae reprehenderit quos. Ea voluptatem voluptas illo aut. Quia placeat nihil eum. Non molestiae quae et nemo tempora. In qui quo error quo labore ea commodi. Eos at dolor ut distinctio voluptas aut. Ex fugiat tenetur harum. Voluptatem odio quo natus qui facilis omnis. Minima eius occaecati reprehenderit non omnis accusamus delectus. Reiciendis impedit voluptates magni accusantium cum in eius at. Quos qui iste consequatur qui rerum sed. Laborum qui mollitia illo. Sequi ut sit ipsum perferendis. Tempora in adipisci cum autem ad temporibus molestiae.",
    "isOutOfStock": true
}
```
