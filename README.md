## Description
Minimal MVC Framework written in PHP.

## Getting Started
### Installation
```
composer create-project --no-dev aram-hamo/mvc
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
This will migrate all the migration files found in ```database/migrations/``` directory.
```
php mvc migrate
```
## Contact
Aram Hamo - [contact@aramhamo.me](mailto:contact@aramhamo.me)

## License
```
Copyright (C) 2023  Aram Hamo

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
```
