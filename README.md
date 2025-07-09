
# chatbox

# clone the repo
```
git clone https://github.com/ibrahim-sajib/chatbox.git
```
# go to the chatbox
```
cd your_project_directory
```

# copy the .env.example content and make a .env file
```
cp .env.example .env
```
# install composer
```
composer install
```
# install npm
```
npm install
```
# generate app key
```
php artisan key:generate
```
# run this for starting the docker container
```
./vendor/bin/sail up -d
```
# migrate and seed the data
```
./vendor/bin/sail artisan migrate:fresh --seed
```
# for the root permission run this command in the terminal of docker laravel.test container if necessary
```
chown -R sail:sail storage
```
# run this
```
npm run dev
```
# run this if faced permission issues for log file

```
chmod -R 775 storage
```

# run this for running queue
```
./vendor/bin/sail artisan queue:listen

```

# got to the dashboard page
# you can login with this credentials after seed
```plaintext
 name = Test User
 email = test@example.com
 password = password
```

# GNN Watermarking Project

You can open two different browsers or check the feature via incognito mode, open the chatbox tab by selecting the user, and then start the real-time chatting.