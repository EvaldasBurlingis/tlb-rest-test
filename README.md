# TLB REST

Mimicking Restful API with one endpoint.

---

## Stack

📦[Laravel](https://laravel.com/)

---

## Requirements

* [x] Request accepts use data body as JSON
 ```json
 {
    "users": [
        {
            "first_name": "Tom",
            "last_name": "Tucker"
        },
        {
            "first_name": "Tom",
            "last_name": "Tucker"
        }
    ]
}
 ```

 * [x] Response is `first_name + last_name`
 ```json
 {
    "users":[
        { "full_name":"Tom Tucker" },
        { "full_name":"Tom Tucker" }
    ]
}
 ```

 * [x] Authorization with Bearer API
 * [x] API key hardcoded hashed string
 * [x] Unauthorized request gets 403
 * [x] Tested

---

## Installation

### Authorization

Api token is hardcoded. If you want to be send authorized request add Authorization header with `Bearer xNiEeqjQhA9kdw96DCKBIR9`

If API token is invalid or missing, 403 Unauthorized will be thrown.

```bash

# clone repository
git clone https://github.com/EvaldasBurlingis/tlb-rest-test.git

# cd into it
cd tlb-rest-test

# copy .env
cp .env.example .env

# generate app key
php artisan key:generate

# run application 
php artisan serve

# run tests
php artisan test

```

