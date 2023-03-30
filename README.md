## Description
Minimal MVC Framework written in PHP.

## Getting Started
### Installation
```
composer create-project aram-hamo/mvc
```
### Starting the local dev server
The default port is ```8080```.
```
php mvc serve
```
### Create a new page
This will create a View and a Controller with the same name of the \<pagename\>, and route it to the given \<path\> argument.
```
php mvc newpage <pagename> <path>
```
### DB Migration
This will migrate all the migration files found in ```migration/``` directory.
```
php mvc migrate
```
## Contact
Aram Hamo - [contact@aramhamo.me](mailto:contact@aramhamo.me)
