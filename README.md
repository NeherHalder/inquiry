## Simple Inquiry Form

It can save a inquiry in database as well as it send en email to admin.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require neher-halder/inquiry
    
If you're using Laravel 5.5 or upper version, this is all there is to do. 

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Neher\Inquiry\InquiryServiceProvider::class

Now you're ready to start using the shoppingcart in your application.
