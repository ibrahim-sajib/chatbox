
# chatbox

```bash
# clone the repo
git clone https://github.com/ibrahim-sajib/chatbox.git

#go to the chatbox
cd your_project_directory

#copy the .env.example content and make a .env file

cp .env.example .env

#install composer
composer install

#install npm
npm install

#generate app key
php artisan key:generate

#run this for starting the docker container
./vendor/bin/sail up -d

#migrate and seed the data
./vendor/bin/sail artisan migrate:fresh --seed

#for the root permission run this command in the terminal of docker laravel.test container if necessary
chown -R sail:sail storage

#run this
npm run dev

#run this if faced permission issues for log file
chmod -R 775 storage

#set this accordingly

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

#run this for running queue
 ./vendor/bin/sail artisan queue:listen



```

# Go to the dashboard page
# You can login with this credentials after seed
```plaintext
 name = Test User
 email = test@example.com
 password = password
```

# one-to-one chat

You can open two different browsers or check the feature via incognito mode, open the chatbox tab by selecting the user, and then start the real-time chatting.


## 🚀 Features

- 🔄 Real-time messaging via **Pusher**
- 🎧 Message broadcasting with **Laravel Events & Listeners**
- 🔐 Secure private channels based on user authentication
- 🧩 **Repository Pattern** used for service abstraction
- 🧰 RESTful APIs for sending and fetching messages
- ⚡ Vue.js & Axios powered reactive chat UI
- 🪄 Auto-scroll to the latest message
- 🧪 Seeders for dummy users and messages
- 📦 Docker-supported local development

