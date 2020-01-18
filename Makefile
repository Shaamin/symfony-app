build:
	docker-compose build

start: cp-env-dev run

run:
	docker-compose up -d

stop:
	docker-compose down

bash:
	docker-compose exec php-fpm /bin/sh

cc:
	bin/console cache:clear

cc-test:
	bin/console cache:clear -e test

test:
	vendor/bin/codecept run

cp-env-test:
	cp .env.test .env

cp-env-dev:
	cp .env.dev .env
