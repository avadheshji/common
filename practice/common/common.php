<?php
https://docs.sensedia.com/en/faqs/Latest/apis/preflight.html


Preflight request
It is an HTTP request of the OPTIONS method, sent before the request itself, in order to determine if it is safe to send it.

It is only after the server has sent a positive response that the actual HTTP request is sent.

The preflight request contains metadata with information like:

Origin: indicates the origin of the request (server name);

Access-Control-Request-Method: which HTTP methods will be used;

Access-Control-Request-Headers: keys that will be in the headers.











?>
