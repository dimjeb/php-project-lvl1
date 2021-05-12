install:
	composer install
brain-games:
	php bin/brain-games
brain-even:
	php bin/brain-even
validate:
	composer validate
push:
	git add .
	git commit -m $desc
	git push
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
