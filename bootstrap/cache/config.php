<?php return array (
  'app' => 
  array (
    'version' => '1.13.1',
    'name' => 'Crypto Casino',
    'env' => 'production',
    'debug' => true,
    'log' => 'single',
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'force_ssl' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:s5gGwDnkcWrMId9QW0/XcHLv/UoUBPTMr4N5Q3HmA0I=',
    'cipher' => 'AES-256-CBC',
    'hash' => '5d4ec2645bd71a383fa33bf6b11e9f01',
    'api' => 
    array (
      'releases' => 
      array (
        'base_uri' => 'https://cryptocasino.financialplugins.com/api/',
      ),
      'products' => 
      array (
        'base_uri' => 'https://financialplugins.com/api/',
      ),
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'SocialiteProviders\\Manager\\ServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\BroadcastServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
    'debug_blacklist' => 
    array (
      '_ENV' => 
      array (
        0 => 'APP_KEY',
        1 => 'DB_DATABASE',
        2 => 'DB_USERNAME',
        3 => 'DB_PASSWORD',
        4 => 'MAIL_HOST',
        5 => 'MAIL_USERNAME',
        6 => 'MAIL_PASSWORD',
        7 => 'PUSHER_APP_SECRET',
        8 => 'PURCHASE_CODE',
        9 => 'LICENSEE_EMAIL',
        10 => 'SECURITY_HASH',
        11 => 'COINPAYMENTS_MERCHANT_ID',
        12 => 'COINPAYMENTS_PUBLIC_KEY',
        13 => 'COINPAYMENTS_PRIVATE_KEY',
        14 => 'COINPAYMENTS_SECRET_KEY',
        15 => 'FACEBOOK_CLIENT_SECRET',
        16 => 'TWITTER_CLIENT_SECRET',
        17 => 'LINKEDIN_CLIENT_SECRET',
        18 => 'GOOGLE_CLIENT_SECRET',
        19 => 'YAHOO_CLIENT_SECRET',
        20 => 'COINBASE_CLIENT_SECRET',
        21 => 'STEEM_CLIENT_SECRET',
        22 => 'RECAPTCHA_SECRET_KEY',
      ),
      '_SERVER' => 
      array (
        0 => 'APP_KEY',
        1 => 'DB_DATABASE',
        2 => 'DB_USERNAME',
        3 => 'DB_PASSWORD',
        4 => 'MAIL_HOST',
        5 => 'MAIL_USERNAME',
        6 => 'MAIL_PASSWORD',
        7 => 'PUSHER_APP_SECRET',
        8 => 'PURCHASE_CODE',
        9 => 'LICENSEE_EMAIL',
        10 => 'SECURITY_HASH',
        11 => 'COINPAYMENTS_MERCHANT_ID',
        12 => 'COINPAYMENTS_PUBLIC_KEY',
        13 => 'COINPAYMENTS_PRIVATE_KEY',
        14 => 'COINPAYMENTS_SECRET_KEY',
        15 => 'FACEBOOK_CLIENT_SECRET',
        16 => 'TWITTER_CLIENT_SECRET',
        17 => 'LINKEDIN_CLIENT_SECRET',
        18 => 'GOOGLE_CLIENT_SECRET',
        19 => 'YAHOO_CLIENT_SECRET',
        20 => 'COINBASE_CLIENT_SECRET',
        21 => 'STEEM_CLIENT_SECRET',
        22 => 'RECAPTCHA_SECRET_KEY',
      ),
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\OpenServer\\domains\\Casino\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'casino',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'casino',
        'username' => 'root',
        'password' => 'root',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => 'InnoDB',
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'casino',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'localhost',
        'port' => '3306',
        'database' => 'casino',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => 6379,
        'database' => 1,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\OpenServer\\domains\\Casino\\storage\\app',
      ),
      'logs' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\OpenServer\\domains\\Casino\\storage\\logs',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\OpenServer\\domains\\Casino\\storage\\app/public',
        'url' => '/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\OpenServer\\domains\\Casino\\storage\\logs/laravel.log',
        'level' => 'emergency',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\OpenServer\\domains\\Casino\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.mail.ru',
    'port' => '465',
    'from' => 
    array (
      'address' => '',
      'name' => 'Casino',
    ),
    'encryption' => 'ssl',
    'username' => '',
    'password' => '',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\OpenServer\\domains\\Casino\\resources\\views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
    'facebook' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/facebook/callback',
    ),
    'twitter' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/twitter/callback',
    ),
    'google' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/google/callback',
    ),
    'linkedin' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/linkedin/callback',
    ),
    'yahoo' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/yahoo/callback',
    ),
    'coinbase' => 
    array (
      'client_id' => '7077a44c20237f8b6e2e91bd84fe0b18',
      'client_secret' => 'bF463b463c64951c23Cd3f1ed453162D49a9b7d8a7703e637Cf33B37F4A4Eca7',
      'redirect' => '/login/coinbase/callback',
    ),
    'steem' => 
    array (
      'client_id' => '',
      'client_secret' => '',
      'redirect' => '/login/steem/callback',
    ),
    'login_providers' => 
    array (
      'facebook' => 
      array (
        'icon' => 'fab fa-facebook-f',
      ),
      'twitter' => 
      array (
        'icon' => 'fab fa-twitter',
      ),
      'google' => 
      array (
        'icon' => 'fab fa-google',
      ),
      'linkedin' => 
      array (
        'icon' => 'fab fa-linkedin-in',
      ),
      'yahoo' => 
      array (
        'icon' => 'fab fa-yahoo',
      ),
      'coinbase' => 
      array (
        'icon' => 'fas fa-cubes',
      ),
      'steem' => 
      array (
        'icon' => 'fas fa-cubes',
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\OpenServer\\domains\\Casino\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'crypto_casino_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'settings' => 
  array (
    'theme' => 'dark-purple',
    'format' => 
    array (
      'number' => 
      array (
        'decimals' => 2,
        'decimal_point' => '46',
        'thousands_separator' => '44',
      ),
    ),
    'users' => 
    array (
      'email_verification' => false,
    ),
    'bots' => 
    array (
      'game' => 
      array (
        'frequency' => '10',
        'count_min' => '50',
        'count_max' => '100',
        'min_bet' => '15',
        'max_bet' => '100',
      ),
      'raffle' => 
      array (
        'frequency' => '5',
        'count_min' => '15',
        'count_max' => '100',
        'tickets_min' => '40',
        'tickets_max' => '50',
      ),
    ),
    'bonuses' => 
    array (
      'sign_up_credits' => '1000',
      'game' => 
      array (
        'loss_amount_min' => '1000',
        'loss_amount_pct' => '10',
        'win_amount_min' => '1000',
        'win_amount_pct' => '10',
      ),
      'raffle' => 
      array (
        'ticket_pct' => '0',
      ),
      'deposit' => 
      array (
        'amount_min' => '0',
        'amount_pct' => '0',
      ),
      'referral' => 
      array (
        'referee_sign_up_credits' => '50',
        'referrer_sign_up_credits' => '100',
        'referrer_deposit_pct' => '0',
        'referrer_game_loss_pct' => '10',
        'referrer_game_win_pct' => '10',
      ),
    ),
    'gtm_container_id' => '',
    'recaptcha' => 
    array (
      'public_key' => '',
      'secret_key' => '',
    ),
    'backend' => 
    array (
      'dashboard' => 
      array (
        'cache_time' => 60,
      ),
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Casino\\resources\\views',
    ),
    'compiled' => 'C:\\OpenServer\\domains\\Casino\\storage\\framework\\views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'game-american-bingo' => 
  array (
    'version' => '1.1.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'payouts' => 
    array (
      1 => '2',
      2 => '2',
      3 => '4',
      4 => '7',
    ),
  ),
  'game-american-roulette' => 
  array (
    'version' => '1.1.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'max_total_bet' => '500',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
  ),
  'game-baccarat' => 
  array (
    'version' => '1.1.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'payouts' => 
    array (
      'player' => '2',
      'banker' => '1.95',
      'tie' => '9',
    ),
  ),
  'game-blackjack' => 
  array (
    'version' => '1.3.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
  ),
  'game-dice' => 
  array (
    'version' => '1.2.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '10',
    'min_win_chance' => '1',
    'max_win_chance' => '98',
    'house_edge' => '1',
    'default_bet_amount' => '1',
    'animation_duration' => 0.3,
  ),
  'game-keno' => 
  array (
    'version' => '1.1.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'draw_count' => '20',
    'payouts' => 
    array (
      1 => '0',
      2 => '0',
      3 => '0',
      4 => '1',
      5 => '5',
      6 => '10',
      7 => '25',
      8 => '125',
      9 => '500',
      10 => '1000',
    ),
  ),
  'game-lucky-wheel' => 
  array (
    'version' => '1.1.0',
    'variations' => 
    array (
      0 => 
      (object) array(
         'title' => 'Lucky Wheel',
         'slug' => 'lucky-wheel',
         'min_bet' => 1,
         'max_bet' => 500,
         'bet_change_amount' => 1,
         'default_bet' => 1,
         'sections' => 
        array (
          0 => 
          (object) array(
             'title' => 'No luck',
             'payout' => 0,
          ),
          1 => 
          (object) array(
             'title' => 'x1',
             'payout' => 1,
          ),
          2 => 
          (object) array(
             'title' => 'x2',
             'payout' => '2',
          ),
          3 => 
          (object) array(
             'title' => 'No luck',
             'payout' => 0,
          ),
          4 => 
          (object) array(
             'title' => 'x1',
             'payout' => '1',
          ),
          5 => 
          (object) array(
             'title' => 'x3',
             'payout' => '3',
          ),
          6 => 
          (object) array(
             'title' => 'No luck',
             'payout' => 0,
          ),
          7 => 
          (object) array(
             'title' => 'x1',
             'payout' => '1',
          ),
          8 => 
          (object) array(
             'title' => 'x4',
             'payout' => '4',
          ),
        ),
      ),
    ),
  ),
  'game-multi-slots' => 
  array (
    'version' => '1.2.0',
    'titles' => 
    array (
      0 => 'Crypto Slots',
    ),
    'slugs' => 
    array (
      0 => 'crypto-slots',
    ),
    'min_bet' => 
    array (
      0 => '1',
    ),
    'max_bet' => 
    array (
      0 => '500',
    ),
    'bet_change_amount' => 
    array (
      0 => '1',
    ),
    'default_bet' => 
    array (
      0 => '1',
    ),
    'default_lines' => 
    array (
      0 => '10',
    ),
    'symbols' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'filename' => 'eth.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '2',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => 0,
          'el' => 
          array (
          ),
        ),
        1 => 
        array (
          'filename' => 'btc.png',
          'scatter' => false,
          'wild' => true,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '0',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => 1,
          'el' => 
          array (
          ),
        ),
        2 => 
        array (
          'filename' => 'nxt.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => 2,
          'el' => 
          array (
          ),
        ),
        3 => 
        array (
          'filename' => 'zec.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '2',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '15',
          'w5t' => 'x',
          'idx' => 3,
          'el' => 
          array (
          ),
        ),
        4 => 
        array (
          'filename' => 'ltc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '0',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '40',
          'w5t' => 'x',
          'idx' => 4,
          'el' => 
          array (
          ),
        ),
        5 => 
        array (
          'filename' => 'ppc.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '2',
          'w2t' => 'x',
          'w3' => '3',
          'w3t' => 'x',
          'w4' => '15',
          'w4t' => 'x',
          'w5' => '30',
          'w5t' => 'x',
          'idx' => 5,
          'el' => 
          array (
          ),
        ),
        6 => 
        array (
          'filename' => 'ledger.png',
          'scatter' => true,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => 0,
          'w2t' => 'x',
          'w3' => '0',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '25',
          'w5t' => 'x',
          'idx' => 6,
          'el' => 
          array (
          ),
        ),
        7 => 
        array (
          'filename' => 'xmr.png',
          'scatter' => false,
          'wild' => false,
          'w1' => 0,
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '5',
          'w3t' => 'x',
          'w4' => '20',
          'w4t' => 'x',
          'w5' => '50',
          'w5t' => 'x',
          'idx' => 7,
          'el' => 
          array (
          ),
        ),
        8 => 
        array (
          'filename' => 'xrp.png',
          'scatter' => false,
          'wild' => false,
          'w1' => '0',
          'w1t' => 'x',
          'w2' => '0',
          'w2t' => 'x',
          'w3' => '1',
          'w3t' => 'x',
          'w4' => '10',
          'w4t' => 'x',
          'w5' => '20',
          'w5t' => 'x',
          'idx' => 8,
          'el' => 
          array (
          ),
        ),
      ),
    ),
    'reels' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 0,
          1 => 1,
          2 => 2,
          3 => 3,
          4 => 4,
          5 => 5,
          6 => 6,
          7 => 7,
          8 => 8,
        ),
        1 => 
        array (
          0 => 1,
          1 => 2,
          2 => 3,
          3 => 4,
          4 => 5,
          5 => 6,
          6 => 7,
          7 => 8,
          8 => 0,
        ),
        2 => 
        array (
          0 => 2,
          1 => 3,
          2 => 4,
          3 => 5,
          4 => 6,
          5 => 7,
          6 => 8,
          7 => 0,
          8 => 1,
        ),
        3 => 
        array (
          0 => 3,
          1 => 4,
          2 => 5,
          3 => 6,
          4 => 7,
          5 => 8,
          6 => 0,
          7 => 1,
          8 => 2,
        ),
        4 => 
        array (
          0 => 4,
          1 => 5,
          2 => 6,
          3 => 7,
          4 => 8,
          5 => 0,
          6 => 1,
          7 => 2,
          8 => 3,
        ),
      ),
    ),
  ),
  'game-slots' => 
  array (
    'version' => '1.4.0',
    'min_bet' => '1',
    'max_bet' => '500',
    'bet_change_amount' => '1',
    'default_bet' => '1',
    'default_lines' => '10',
    'symbols' => 
    array (
      0 => 
      array (
        'filename' => 'apple.png',
        'scatter' => false,
        'wild' => false,
        'w1' => '0',
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '2',
        'w3t' => 'x',
        'w4' => '5',
        'w4t' => 'x',
        'w5' => '20',
        'w5t' => 'x',
        'idx' => 0,
        'el' => 
        array (
        ),
      ),
      1 => 
      array (
        'filename' => 'bar.png',
        'scatter' => false,
        'wild' => true,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '0',
        'w3t' => 'x',
        'w4' => '10',
        'w4t' => 'x',
        'w5' => '15',
        'w5t' => 'x',
        'idx' => 1,
        'el' => 
        array (
        ),
      ),
      2 => 
      array (
        'filename' => 'bell.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '2',
        'w3t' => 'x',
        'w4' => '10',
        'w4t' => 'x',
        'w5' => '10',
        'w5t' => 'x',
        'idx' => 2,
        'el' => 
        array (
        ),
      ),
      3 => 
      array (
        'filename' => 'cherry.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '3',
        'w3t' => 'x',
        'w4' => '5',
        'w4t' => 'x',
        'w5' => '10',
        'w5t' => 'x',
        'idx' => 3,
        'el' => 
        array (
        ),
      ),
      4 => 
      array (
        'filename' => 'lemon.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '2',
        'w3t' => 'x',
        'w4' => '7',
        'w4t' => 'x',
        'w5' => '20',
        'w5t' => 'x',
        'idx' => 4,
        'el' => 
        array (
        ),
      ),
      5 => 
      array (
        'filename' => 'orange.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '3',
        'w3t' => 'x',
        'w4' => '5',
        'w4t' => 'x',
        'w5' => '10',
        'w5t' => 'x',
        'idx' => 5,
        'el' => 
        array (
        ),
      ),
      6 => 
      array (
        'filename' => 'plum.png',
        'scatter' => false,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => 0,
        'w2t' => 'x',
        'w3' => '2',
        'w3t' => 'x',
        'w4' => '10',
        'w4t' => 'x',
        'w5' => '20',
        'w5t' => 'x',
        'idx' => 6,
        'el' => 
        array (
        ),
      ),
      7 => 
      array (
        'filename' => 'seven.png',
        'scatter' => true,
        'wild' => false,
        'w1' => 0,
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '0',
        'w3t' => 'x',
        'w4' => '5',
        'w4t' => 'x',
        'w5' => '10',
        'w5t' => 'x',
        'idx' => 7,
        'el' => 
        array (
        ),
      ),
      8 => 
      array (
        'filename' => 'water-melon.png',
        'scatter' => false,
        'wild' => false,
        'w1' => '0',
        'w1t' => 'x',
        'w2' => '0',
        'w2t' => 'x',
        'w3' => '2',
        'w3t' => 'x',
        'w4' => '5',
        'w4t' => 'x',
        'w5' => '15',
        'w5t' => 'x',
        'idx' => 8,
        'el' => 
        array (
        ),
      ),
    ),
    'reels' => 
    array (
      0 => 
      array (
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
      ),
      1 => 
      array (
        0 => 1,
        1 => 2,
        2 => 3,
        3 => 4,
        4 => 5,
        5 => 6,
        6 => 7,
        7 => 8,
        8 => 0,
      ),
      2 => 
      array (
        0 => 2,
        1 => 3,
        2 => 4,
        3 => 5,
        4 => 6,
        5 => 7,
        6 => 8,
        7 => 0,
        8 => 1,
      ),
      3 => 
      array (
        0 => 3,
        1 => 4,
        2 => 5,
        3 => 6,
        4 => 7,
        5 => 8,
        6 => 0,
        7 => 1,
        8 => 2,
      ),
      4 => 
      array (
        0 => 4,
        1 => 5,
        2 => 6,
        3 => 7,
        4 => 8,
        5 => 0,
        6 => 1,
        7 => 2,
        8 => 3,
      ),
    ),
  ),
  'game-video-poker' => 
  array (
    'version' => '1.3.0',
    'min_bet' => '1',
    'max_bet' => '50',
    'bet_change_amount' => '1',
    'default_bet_amount' => '1',
    'default_bet_coins' => '1',
    'paytable' => '[[0,1,2,3,4,6,9,25,50,250],[0,2,4,6,8,12,18,50,100,500],[0,3,6,9,12,18,27,75,150,750],[0,4,8,12,16,24,36,100,200,1000],[0,5,10,15,20,30,45,125,250,4000]]',
  ),
  'installer' => 
  array (
    'version' => '1.0.0',
  ),
  'raffle' => 
  array (
    'version' => '1.0.0',
    'duration' => '3600',
    'lag' => '3600',
    'ticket_price' => '10',
    'max_tickets_per_user' => '10',
    'total_tickets' => '500',
    'pot_size_pct' => '95',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
