```
 ______  _     _ ______     _     _                            ______           _     
(_____ \| |   | (_____ \   | |   | |                          (_____ \     _   | |    
 _____) ) |__ | |_____) )  | |__ | | ____ ____  ____  _   _    _____) )___| |_ | | _  
|  ____/|  __)| |  ____/   |  __)| |/ _  |  _ \|  _ \| | | |  |  ____/ _  |  _)| || \ 
| |     | |   | | |        | |   | ( ( | | | | | | | | |_| |  | |   ( ( | | |__| | | |
|_|     |_|   |_|_|        |_|   |_|\_||_| ||_/| ||_/ \__  |  |_|    \_||_|\___)_| |_|
                                         |_|   |_|   (____/                           
```

# P.H.P. Happy Path


## Why Use a Recursive Name?
Why not?

## Change Log
- [CHANGES](docs/CHANGES.md)

## Why Make Another MVC Framework?
Simple: this is just for learning.

The idea is to create the smallest possible `MVC Framework` with **modern** `PHP` from `2020+`.

Other frameworks have become bloated trying to be everything to everyone.

This package solves specific problems for a tiny niche.


## What Does this Do?
- Lightweight framework with third-party libraries when absolutely necessary
- Allows me to create a tiny PHP application without tedious boilerplate.
- Include `wizardbeard/php-happy-path` with `composer` and build a working MVC app in minutes.
- Sites with `>= 100k hits/day` should work perfectly well with `SQLite3` in modern hosting environments.
- `SQLite3` is relatively simple to back up using file managers, SFTP, and backup management software.
- `PHP ActiveRecord` forms the main object relational model with `Wizardbeard\PhpHappyPath\Model` extending `ActiveRecord\Model as ActiveRecord`.
- `Views` load `*.php` files with an optional `$viewModel` passed through `extract()` by the `Wizardbeard\PhpHappyPath\Controller` before rendering.
