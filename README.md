# TLB REST

Mimicking Restful API with one endpoint.

---

## Stack

📦[Laravel](https://laravel.com/)

---

## Requirements

* [ ] Request accepts use data body as JSON
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

 * [ ] Response is `first_name + last_name`
 ```json
 {
    "users":[
        { "full_name":"Tom Tucker" },
        { "full_name":"Tom Tucker" }
    ]
}
 ```

 * [ ] Authorization with Bearer API
 * [ ] API key hardcoded hashed string
 * [ ] Unauthorizided request gets 401
 * [ ] Tested

---

## Installation

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

