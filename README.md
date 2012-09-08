IP55-Pushover-Alerts
====================

A php script to take alerts from a Compro IP55 Network Camera and push them to your mobile device using Pushover.net

1. Add your API Token and your user key to ip55.php

2. Set up the HTTP Server in your IP55 configuration to point to the file ip55.php (Event Setup -> Event Server Setup -> HTTP Set, set HTTP URL: http//yourdomain.com/ip55.php)

3. Add an event trigger that uses HTTP