# Super Simple MVC PHP Script
Simple MVC starting point for small PHP projects

If you are learning or familliar with PHP and MVC architecture, this is a good starting point for smaller projects. 
There are few things to know:
  * You can run this App from any web server that supports PHP 7.4 and higher
  * I have uploaded examples just for View and Controller, Model will be uploaded soon
  * Don't expect too much, it's Super Simple

# Ways to run app 
  1. Copy files to web server so that '**public**' folder is root of your server. Or use virtual server 
  2. If you are using Windows, and you have PHP installed, edit '**start.cmd**' batch file so that run path is set to 'public' folder, edit port, and run batch 
  3. You can copy files to a subfolder of your root, edit **/app/Controller/App.php** $uri array, but it's not a good practice.

# Briefing
  **app/Config** is place for configuration files.
  **app/main.php** is intended to be place to define constants and other application configuration
  
  **app/fn.php** contains basic functions :
  
                                  * **view()**  - rendering php page
                                  
                                  * **dd()**    - dump vars/strings/etc for debuging
                                  
                                  * **rr()**    - redirects
                                  
  You can add your own functions in this file, it's included in rest of the App
  
  **app/Controller** is place for Controller files. Controller name, and filename **must be the same in order to work**
  
  **app/Controller/App.php** is basic Controller and other Controllers are extending it. App.php cintains basic autorouting methods, and basic error handling. Feel free to edit and suggest.
  
  **app/Controller/Home.php** is default controller that loads it's method **index()**
  
  **app/View** is place for view files

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

