## About

With the help of this application you can calculate the Hamming distance (substitution values only) and Levenshtein distance of the given strings.

## Screenshots

![Home Page](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29311145-b3c05314eed7c7d88219dd8a78223fa5.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T104251Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=2601c09d6e9716bb8efe6ce40fdc2c5eba86f4e8ca5946b4e804057b04ded1aa)

![Home Page with form error](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29311261-8faba140ff036a8abecbfa8c185ca274.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T104410Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=aa0f7c54b5cafa2a8f6ea086817000615a738314c4e1004097f9afe86ccdb079)

![Home Page with response](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29311350-c39ac0dd7ca3229495f43b2cbc7ac8a8.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T104546Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=e4f7b2e064296aff01fe11db8e18291c22e0cae7dedbec1d999c71695e0072ce)

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

![CLI Output](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29312548-c1eb44beb76fa971241955f669de6ea6.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T110935Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=31d5085a3a316594e7df2c36ac284b28b7c42fc55fc4c2e7dc691af1da647979)

## Unit Tests

1. Goto your project directory using the following command.
	```sh
	 cd ./distance-calculator
	```
2. Run this command
	```sh
	 php artisan test
	```
![Unit Test](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29312374-b811b2fc99b881c4cab8f9d1eebd9f37.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T110608Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=4c879fcdc5de5098b5913da370f031b7155523e401aeda44b88cb31cec0c5a38)

## Folder Structure

*We are using the following files in this project.*

- __Controllers__
	- `App\Http\Controllers\IndexController.php`
- __Validation Requests__
	- `App\Http\Requests\Index.php`
- __Routes__
	- `Routes\Web.php`
- __View Templates__
	- `Resources\Views\layouts\app.blade.php`
	- `Resources\Views\index.blade.php`
- __Console Commands__
	- `App\Console\Commands\CalculationCommand.php`
- __Test Cases__
	- `Tests\Feature\IndexControllerTest.php`
	- `Tests\Unit\CalculationTest.php`
