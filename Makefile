start:
	./vendor/bin/sail up -d
	@echo "Waiting for database connection..."
	@until ./vendor/bin/sail artisan migrate > /dev/null 2>&1; do \
		printf "."; \
		sleep 2; \
	done
	@echo "\nDatabase ready! Running migrations..."
	./vendor/bin/sail artisan migrate
	$(MAKE) build
	./vendor/bin/sail artisan optimize:clear
	./vendor/bin/sail artisan session:flush
	$(MAKE) pint

build:
	rm -f public/hot
	./vendor/bin/sail pnpm run build

down:
	./vendor/bin/sail down

pint:
	./vendor/bin/sail php vendor/bin/pint

test:
	./vendor/bin/sail php artisan test

seed:
	./vendor/bin/sail artisan migrate:fresh --seed
