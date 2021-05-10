install:
	composer install
brain-games:
	php src/games/brain-games
brain-even:
	php src/games/brain-even
brain-calc:
	php src/games/brain-calc
brain-gcd:
	php src/games/brain-gcd
validate:
	composer validate
push:
	git add .
	git commit -m $desc
	git push
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
