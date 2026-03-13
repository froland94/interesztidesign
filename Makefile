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
	$(MAKE) pint

build:
	./vendor/bin/sail pnpm run build

down:
	./vendor/bin/sail down

pint:
	./vendor/bin/sail php vendor/bin/pint
