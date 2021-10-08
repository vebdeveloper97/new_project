<?php
$routers = [
    "/^(?P<controller>\w+)\/(?P<action>\w+)$/",
    "/^(?P<controller>\w+)\/(?P<action>\w+)\/(?P<id>\d+)/",

    "/^(?P<module>\w+)$/",
    "/^(?P<module>\w+)\/(?P<controller>\w+)\/(?P<action>\w+)$/",

];