telemark-1999
=============

Website from 1999-2001.

Extracted from `/home/groups/telemark/bob` on 16.10.2014. See git history to see what has been done to the stuff since then. Split out from [telemark-2004](https://github.com/TelemarkAlpint/telemark-2004) repo.

To run the PHP, fire up a VM, install apache and php, enable the `rewrite` mod, set `short_open_tag = On` in `/etc/php5/apache2/php.ini`, and symlink `/var/www` to `/vagrant` (assuming you use vagrant). Uncomment the `AddDefaultCharset utf-8` line in `conf-enabled/charset.conf`. Set `AllowOverride All` both in `apache.conf` and the vhost config, just to be sure. Restart apache.

Storing a static copy is a bit more involved than for the 2004 site since a lot of images are only
loaded through javascript and thus not discovered by wget. The ones I've found reside in
`paa_verdensveven/meny` and `paa_verdensveven/images`, might be some more. Copy these into the dump
manually, as in the one-liner below.

    $ wget -mpckE -e robots=off 1999.ntnuita.local && cp -r paa_verdensveven/images/* 1999.ntnuita.local/paa_verdensveven/images && cp -r paa_verdensveven/lurken/*.gif 1999.ntnuita.local/paa_verdensveven/lurken && cp -r paa_verdensveven/meny/* 1999.ntnuita.local/paa_verdensveven/meny && cd 1999.ntnuita.local && tar czf ../telemark-1999.tar.gz * && cd .. && sha1sum telemark-1999.tar.gz > telemark-1999.tar.gz.sha

(assuming you've mapped 1999.ntnuita.local to 10.10.10.45)

Put the resulting files (`telemark-1999.tar.gz` and `telemark-1999.tar.gz.sha`) in
`/home/groupswww/telemark/arkiv/websites/` so that the new webserver can find it and deploy it.
