
CMD = docker run --rm
VOLUME = "$(PWD)/:/usr/src/tddbc"
WORKDIR = "/usr/src/tddbc/"

PHP = "php:7.3-cli"

composer-install:
	$(CMD) -v $(VOLUME) -w $(WORKDIR) composer:1 install

composer-update:
	$(CMD) -v $(VOLUME) -w $(WORKDIR) composer:1 update

composer-outdated:
	$(CMD) -v $(VOLUME) -w $(WORKDIR) composer:1 outdated

test:
	$(CMD) -v $(VOLUME) -w $(WORKDIR) $(PHP) ./vendor/bin/phpunit

clean:
	rm -rf ./vendor
