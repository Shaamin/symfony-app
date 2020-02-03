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

cp-docker-compose:
	cp docker-compose.yml.dist docker-compose.yml

cp-env-dev:
	cp .env.dev .env

migration-generate:
	bin/console doctrine:migrations:generate

up:
	bin/console doctrine:migrations:migrate

up-test:
	bin/console doctrine:migrations:migrate -e test

down:
	bin/console doctrine:migrations:execute $v --down

migration-generate:
	bin/console make:migration