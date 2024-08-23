import cron from 'node-cron';
import shell from 'shelljs';

/**
 * Schedule tasks to be run on Railway
 */
cron.schedule('* * * * *', function() {
  console.log('Running cronjobs...');
  shell.exec('php artisan schedule:run >> /dev/null 2>&1');
});