## About

With the help of this application you can calculate the Hamming distance (substitution values only) and Levenshtein distance of the given strings.

## Installation
Here is how you can run the project locally:
1.  Clone this repo
	```sh
	 git clone https://github.com/pnodeskuser/distance-calculator.git
	```
2.  Go into the project root directory
    ```sh
	 cd /distance-calculator
	```
3.  Copy `.env.example` file to `.env` file
    ```sh
	 cp .env.example .env
	```
4. Run the following command to install the dependency
	```sh
	 composer install
	```
5. Run the command to serve the project
	```sh
	 php artisan serve
	```
6. Open this link in your browser http://127.0.0.1:8000

## Run Calculation Using CLI

1. Goto your project directory using the following command.
	```sh
	 cd ./distance-calculator
	```
2. Run this command
	```sh
	 php artisan app:calculate
	```
3. Input first string and hit Enter.
4. Input second string and hit Enter.
5. You should see the distance calculation of both the strings in the result.


## Unit Tests

1. Goto your project directory using the following command.
	```sh
	 cd ./distance-calculator
	```
2. Run this command
	```sh
	 php artisan test
	```
