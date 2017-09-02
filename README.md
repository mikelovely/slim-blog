
# Slim Blog

A repository for my rarely-updated blog.

# Getting Started

Clone the repository.

```
$ git clone git@github.com:mikelovely/slim-blog.git
```

Copy environment file example to real.

```
$ cd slim-blog
$ cat .env.example >> .env
```

# Migrations

Use Phinx to run the migrations.

>Either add `./vendor/bin` to you `$PATH` (something like `export PATH="./vendor/bin:$PATH"` may be enough) or run Phinx via the vendor directory.

```
$ ./vendor/bin/phinx migrate
```

# Copyright

Copyright © 2017 Mike Lovely

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
