# WordPress 5.3.10 on Heroku

## Getting Started

````
$ git clone https://github.com/metatooth/blog.git
$ cd blog
$ heroku create
$ heroku addons:create jawsdb-maria
$ heroku addons:create sendgrid
$ heroku config:set AWS_ACCESS_KEY_ID=<aws-access-key-id>
$ heroku config:set AWS_SECRET_ACCESS_KEY=<aws-secret-access-key>
$ ./heroku-config-set.sh
$ git push heroku main
````

## References

https://www.smashingmagazine.com/2019/03/composer-wordpress/

https://roots.io/using-composer-with-wordpress/
