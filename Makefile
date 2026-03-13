start:
	./vendor/bin/sail up -d
	@echo "Waiting for database connection..."
	@until ./vendor/bin/sail artisan migrate > /dev/null 2>&1; do \
		printf "."; \
		sleep 2; \
	done
	@echo "\nDatabase ready! Running migrations..."
	./vendor/bin/sail artisan migrate

down:
	./vendor/bin/sail down
