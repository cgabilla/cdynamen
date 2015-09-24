# Dynamic Menu Navigation Menu Library in PHP
Cyrus G. Gabilla [`<cgabilla@gmail.com>`](<cgabilla@gmail.com>)

## Version 0.1, Wednesday 9, 2015

## Notes

### Pre-fixes/Postfixes Code Convention Examples
  * TT_README.md as README file since we do not want to replace the README of CodeIgniter
  * tt_assets as assets location to recognize our own assets directory
  * TTConfig as CodeIgniter library class name
  * CNavMenuTTC as controller class name
  * cnavmenu_demo_ttv, test_ttv as view file names

> **Commentary**:  We could adopt the following systems in naming CodeIgniter files for Model, View, and Controller.

File Type  | Description
---------- | ----------------
Model      | *ClassNameTTM* as model class name, and we **DO NOT** use underscore (`_`)
View       | *filename_ttv* as view file name, and we use underscore (`_`)
Controller | *ClassNameTTC* the same with the model class

### `base_url()` VS `APPPATH`
  1. `base_url()` - It is a site URI.
  2. `APPPATH` - It is a directory location.

## Initial Input Design

```xml
<CDN-MENU>
  <CDN-HEADER>SCS</CDN-HEADER>
  <CDN-MENU-ITEM>CS</CDN-MENU-ITEM>
  	  <CDN-MENU-ITEM ALT="A software engineering track for CS" SRC="tt_views/cs-se">Software Engineering</CDN-MENU-ITEM>
  	  <CDN-MENU-ITEM>Foundation of CS</CDN-MENU-ITEM>
  <CDN-MENU-ITEM>IT</CDN-MENU-ITEM>
  	  <CDN-MENU-ITEM ALT="A database track" SRC="tt_views/it-db">Database</CDN-MENU-ITEM>
  	  <CDN-MENU-ITEM>Multimedia</CDN-MENU-ITEM>
  	  <CDN-MENU-ITEM>Information Systems</CDN-MENU-ITEM>
  <CDN-MENU-ITEM ALT="The diploma courses" SRC="tt_views/eset">ESET</CDN-MENU-ITEM>
  <CDN-MENU-ITEM>VACANT SLOT</CDN-MENU-ITEM>
</CDN-MENU>
```

## Output

## Class Design

### Prefix

### UML

### Class Specifications

#### Classes

* NavigatorMenuBuilder implements a Builder
  + build()
  + addMenuItem(MenuItem)
  + addMenuHeader(MenuHeader)
* NavigatorMenu ISA MenuItem, NavigatorMenu implements a Builder
  + isNavigator() return true
* MenuHeader ISA MenuItem
  + isLabelMenu(): return true
* SiteMenu ISA MenuItem
  + isSiteMenu(): return true
* LabelMenu ISA MenuItem
  + isLabelMenu(): return true
* MenuItem ISA Component
  + menuType
    * NAVIGATOR
    * SITE
    * LABEL
  + isNavigatorMenu(): return false
  + isSiteMenu(): return false
  + isLabelMenu(): return false
* Component implements a Builder
  + label
  + description
  + add(Component)
* NavigatorMenu ISA Menu
  + navigate()
  + isNavigator() return true

#### Interfaces

* Builder
  + build()

#### A Javascript Style

* TTCNavMenuConfig
* TTCNavMenuBuilder ISA NavigatorMenuBuilder
