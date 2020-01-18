build:
	docker-compose build

start:
	docker-compose up -d

stop:
	docker-compose down

bash:
	docker-compose exec php-fpm /bin/sh

cc:
	bin/console cache:clear

test:
	vendor/bin/codecept run