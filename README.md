## About

With the help of this application you can calculate the Hamming distance (substitution values only) and Levenshtein distance of the given strings.

## Screenshots

__User Interface to calculate distance from Browser__
![Home Page](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29327961-f382ebf84cbb5058c53be4353519b1d7.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T155916Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=4863f03bf6389750db80f4812663fcc947aaebb81980105261a7afa5f40e2e8f)

__Input Field Validation Error:__
![Home Page with form error](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29328002-e6406dc4ba12185c417e961bf8fb2997.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T160002Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=20e745bee01a43ef33b640114799ff6722ea639a5314c929093417dad2560da5)

__Response__
![Home Page with response](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29328038-fc3bdde343a41550e486a95635e0f95b.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T160040Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=add963fa55af1224fdac43e8d402a9210de303048f5dda4fa2f24e1281bfb372)

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

![CLI Output](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29328149-d25f705684d6f97db76f95c579b93445.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T160228Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=0ad3639fa8868b348cb69a87facf9ed21696a3271bfc1ce0fe880f35964e4080)

## Unit Tests

1. Goto your project directory using the following command.
	```sh
	 cd ./distance-calculator
	```
2. Run this command
	```sh
	 php artisan test
	```
![Unit Test](https://awesomescreenshot.s3.amazonaws.com/image/1507139/29328247-d527b19f40bb8a33d7911b0600541e44.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20220627%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220627T160405Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=ebd854e2191481a5214ca2889b40f97ffaf243d3f85c5b77293f0d40cc7b99b1)

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
