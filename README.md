
# Super Simple MVC PHP Script - autoroute
Simple MVC starting point for small PHP projects, but mostly for learning, only with Auto Routing !

If you are learning or familliar with PHP and MVC architecture, this is a good starting point for smaller projects and practice. 
There are few things to know:
  * You can run this App from any web server that supports PHP 8 and higher
  * I have uploaded examples for Model, View and Controller
  * Classes from \Controller and \Model folders are loaded automatically
  * Don't expect too much, it's Super Simple

# How to run the app 
  1. Get all files from `https://github.com/ifet4u/SuperSimpleMVCPHP.git` or download and extract manually
  2. Copy files to web server so that '**public**' folder is root of your server. Or use virtual server 
  3. Open CMD, type `php -S localhost:9090 -t public` If you are using Windows, and you have PHP installed, run '**start.cmd**' 

# Basic
  **app/Config** is place for configuration files.
  **app/main.php** is intended to be place to define constants and other application configuration
  
  **app/fn.php** contains basic functions :
  
                                  * **view()** 	     - rendering php view
                                  
                                  * **dd()**  	     - dump vars/strings/etc for debuging
                                 
                                  * **rr()**  	     - redirects
                                  
  You can add your own functions in this file, it's included in rest of the App
  
  **/app/Controller** is place for Controller files. Controller name, and filename **must be the same in order to work**
  
  **/app/Controller/App.php** is basic Controller and other Controllers are extending it. App.php cintains basic autorouting methods, and basic error handling. Feel free to edit and suggest.
  
  **/app/Controller/Home.php** is default controller that loads it's method **index()**
  
  **/app/View** is place for view files

  # Usage
   * Create new Controller wich extends App `Class Company extends App` 
   * Create Method `index()` 
   * Create file company.php insert basic HTML and 
   * In method index() call function view() and pass as value name of created file without .php 

    <?php
    Class Company extends App
    {
    	public function index()
    	{
    		view('company',['heading' => 'This is Company ltd.']);
    	}
    }
  * in browser type http://localhost:9090/company  and app wil render page Company with var $heading that you can use in your page.
  
  * For modeling data, create file **CompanyModel.php** create same Class with functions and some data.
```
<?php
class CompanyModel
{
	
	public function companies()
	{
		$companies = []
		return $companies;
	}
}
```

* Models are also loaded automatically
 
```
<?php

Class Company extends App
{
   public function company()
   {
	$model = new CompanyModel;
	$data = $model->companies();
  	view('company',['data' => $data]);

```
