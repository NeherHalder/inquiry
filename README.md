## Simple Inquiry Form

It can save a inquiry in database as well as it send an email to admin.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require neher-halder/inquiry
    
If you're using Laravel 5.5 or upper version, this is all there is to do. 

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Neher\Inquiry\InquiryServiceProvider::class

Now you're ready to start using the Simple Inquiry Form in your application.

## Uses

Create a layout(master) file in view directory

	layouts\frontend\app.blade.php

Create yield in app.blade.php file

	@yield('content')

Migrate database

	php artisan migrate

Create a url in your page

	<a href="{{url('inquries/create')}}">Forge</a>

## Email Configuration

After submitting the form it also send an email. You shound change the email address from config\inquiry.php 

	Change the .env
	MAIL_DRIVER=log

## Publishing Vendor
After publishing you can find the configuration file in config\inquiry.php and views are views\vendor\inquiry directory

	php artisan vendor:publish --provider="Neher\Inquiry\InquiryServiceProvider::class"








