# Security

Report vulnerabilities privately through [GitHub Security Advisories](https://github.com/Salable/php-sdk/security/advisories/new) for this repository. Do not open a public issue for a security report.

API keys are secrets. Send them only as the Bearer token this client sets, and keep them out of source control, logs, and client-side applications.

## PHP runtime

This package does not patch the PHP binary. Any application that serves HTTP and uses this client must run PHP **8.2.35**, **8.3.36**, **8.4.27**, or **8.5.12**, or a later release on that branch. Those builds fix CVE-2026-109618 and CVE-2026-109619 (php2shell), unauthenticated remote code execution in PHP-FPM, Apache `mod_php`, `php-cgi`, FrankenPHP, and LiteSpeed. Composer cannot check the patch level of the runtime.

CVE-2026-115560, disclosed on 23 October 2026, is a separate web-application remote code execution issue. The 21 October builds do not close it. Follow the [PHP security advisories](https://github.com/php/php-src/security/advisories) for the release that does.
