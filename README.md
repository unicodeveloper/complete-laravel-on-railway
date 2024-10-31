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
- And that's it. You are good to go!
**Note:** You can use [shared variables](https://docs.railway.app/guides/variables#shared-variables) to reduce duplication of variables across multiple services.

Check out [this complete deploy Laravel guide on Railway](https://docs.railway.app/guides/laravel)

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
