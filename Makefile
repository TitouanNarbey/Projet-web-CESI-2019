.PHONY: help run configure migrate

.DEFAULT_GOAL = help

include .env
CURRENT_DIR=$(shell pwd)
COM_COLOR   = \033[0;34m
OBJ_COLOR   = \033[0;36m
OK_COLOR    = \033[0;32m
ERROR_COLOR = \033[0;31m
WARN_COLOR  = \033[0;33m
NO_COLOR    = \033[m

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'


run: ## Lance le server
	php artisan serve



#dev
configure: ## Configure project
	#cp .env.example .env
	#create database
	# modif .env pour bdd
	composer install
	php artisan key:generate

migrate: ## Migrate bdd
	cd .. && sudo chmod -R 777 www && cd www
	php artisan migrate:fresh
