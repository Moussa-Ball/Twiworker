.PHONY=dev; add-stripe-currency;

dev:
	tmux \
		new-session "php artisan serve" \;\
		split-window -v "npm run hot" \;\
		split-window -h "maildev --ip 127.0.0.1" \;\
		split-window -v "laravel-echo-server start" \;\

add-stripe-currency:
	php artisan currency:manage add AUD,BRL,GBP,CAD,CZK,DKK,EUR,HKD,HUF,ILS,JPY,MYR,MXN,TWD,NZD,NOK,PHP,PLN,RUB,SGD,SEK,CHF,THB,USD
