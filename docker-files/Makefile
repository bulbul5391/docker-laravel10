setup:
	@make build
	@make up
	@make composer-update
build:
	docker-compose build --no--cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec docker-laravel10 bash -c "composer update"
migrate:
	docker exec docker-laravel10 bash -c "php artisan migrate"
serve:
	docker exec docker-laravel10 bash -c "php artisan serve"
key:
	docker exec docker-laravel10 bash -c "php artisan key:generate"
optimize:
	docker exec docker-laravel10 bash -c "php artisan optimize:clear"