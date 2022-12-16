
# Guide

## Using framework  

### Custom controllers.
Create you `controller` in the directory `Nano::$config[DIR][VIEWS]`
 * *Default:* `/controllers/web/`  
Extend you controller with class: `nano/components/web/Controller::class`

```php
namespace app/controllers;

class YouController extend nano/components/web/Controller {

}
```

### Custom actions.  
Create you `action` in the you controller with config  
 * prefix `Nano::$config[ACTION][PREFIX]`  
    *Default: **none***  
 * sufix `Nano::$config[ACTION][SUFIX]`  
    *Default: **none***  

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
