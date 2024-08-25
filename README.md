## Complete Laravel (Breeze, MySQL, Redis) on Railway

[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/template/Gkzn4k?referralCode=yuv1Gy)

This complete Laravel starter template deploys a **Laravel Breeze app** as a _**majestic monolith**_ that is connected to a MySQL database and Redis Cache on [Railway Paas](https://railway.app).

It spins up 5 services with the same codebase:
- **web service**: This runs the app.
- **worker service**: This runs the Laravel queue workers.
- **cron service**: This runs the Laravel scheduler and takes care of all cron tasks.
- **MySQL**: This is the MySQL database that the app is connected to.
- **Redis**: This is the queue and cache store/database that the app is connected to.


## Configuration

- Deploy the template on Railway.
- Copy the `.env.example` to your service variables on Railway dashboard and set them accordingly.
- Add a **DB_URL** variable with its value as the deployed MySQL instance URL to the (web, worker & cron services).
    - e.g _DB_URL="mysql://root:kkkkdYtakFbpprtRaLQPgXbtHmgiOsyR@junction.proxy.rlwy.net:57100/railway"_
- Add a **REDIS_URL** variable with its value as the deployed MySQL instance URL to the (web, worker & cron services).
    - e.g _REDIS_URL="redis://default:kkkkdYtakFbpprtRaLQPgXbtHmgiOsyR@autorack.proxy.rlwy.net:10446"_

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
