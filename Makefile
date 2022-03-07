.PHONY: start stop

start:
	php artisan queue:listen &
	php artisan websockets:serve &
	php artisan serve &

stop:
	killall php
