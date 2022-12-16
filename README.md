<p align='center'>
  <img align='center' src="https://github.com/andy87/nano-framework/raw/master/Docs/background.jpg" style="max-width: 100%;">+
  <h1 align='center'> App template on PHP framework `<a href="https://github.com/andy87/nano-framework">Nano<a/>` v1 </h1>
</p>



### 🔌 Setup.  

#### 1. Repository  
Using a console/terminal with git & php support  
Move to the project directory.  
Execute the `clone` console command:  
⌨ `git clone git@github.com:andy87/nano-app.git .`  

#### 2. Required  
If **composer** local don't install, then download **composer.phar** from the <a href="https://getcomposer.org/download/">official website</a> to the project directory.  

Execute the console command:  
| local composer | composer.phar |
|-----|-----|
| ⌨ `composer install` | ⌨ `php composer.phar install` |

__________

#### 2. Using  

##### Custom controllers.
Create you `controller` in the directory `Nano::$config[DIR][VIEWS]`
 * Default: `/controllers/web/`
Extend you controller with class: `nano/components/web/Controller::class`

```php
namespace app/controllers;

class YouController extend nano/components/web/Controller {

}
```

##### Custom actions.  
Create you `action` in the you controller with config  
prefix `Nano::$config[ACTION][PREFIX]`  
 * Default: none  
 sufix `Nano::$config[ACTION][SUFIX]`  
 * Default: none  

```php
namespace app/controllers;

class YouController extend nano/components/web/Controller {
  public function index(){}
}
```

##### You can create actions component.  
Example: create directory `/components/actions` then  
create class: CustomAction `/components/actions/CustomAction.php`  
```php
namespace components/actions;

class CustomAction extends nano/components/web/Actions {
  public function run(){}
}
```

then add code to you controller:


```php
namespace app/controllers;

class YouController extend nano/components/web/Controller {
  public $actions = [
    'custom' => components/actions/CustomAction::class
  ];
}
```
