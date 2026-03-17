start:
	./vendor/bin/sail up -d
	@echo "Waiting for database to be healthy..."
	@until [ "$$(docker inspect --format='{{.State.Health.Status}}' interesztidesign-mysql-1 2>/dev/null)" = "healthy" ]; do \
		printf "."; \
		sleep 1; \
	done
	@echo ""
	@echo "Database ready! Running setup..."
	./vendor/bin/sail artisan migrate
	$(MAKE) build
	./vendor/bin/sail artisan optimize:clear
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
