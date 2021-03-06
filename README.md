# PHPIPAM API

SDK for consuming from PHP-IPAM's API

## Configuration

To create a [Client](src/Client.php), you must first construct something that implements
[ConfigProvider](src/Config/ConfigProvider.php).  Two implementations are included:

### Standard Configuration

If you have all your PHP IPAM configuration details local to your application you may use the
[Config](src/Config/LocalConfig.php) class, passing an array of configuration details:

```php
$conf = [
    // Required Parameters
    'host'      => 'service host',
    'username'  => 'bilbo-swaggins',
    'password'  => 'swaggerific',
    'appid'     => 'whatever',
    'appcode'   => 'crypticwhatever',

    // Optional Parameters
    'https'     => true,            // defaults to true
    'port'      => 0,               // recommended to set only if you don't use standard 80 / 443,
    'silent'    => false,           // defaults to false, set to silence all logging output
];
$config = new \ENA\PHPIPAM\Config\Config($conf);
```

### Consul-Derived Configuration

If you have a [Consul](https://www.consul.io/) setup going and have your PHPIPAM service registered with it, or use its
KV store for other config items, you may use the [ConsulConfig](src/Config/ConsulConfig.php) class.  This config uses
[PHPConsulAPI](https://github.com/dcarbone/php-consul-api) for Consul interaction.  It accepts all
of the same parameters as the standard [LocalConfig](src/Config/LocalConfig.php) class, with the following additional
Consul-specific ones:

Parameters:
```php
$consulConf = $conf + [
    'servicename'   => 'phpipam',       // mutually exclusive to "host" and "port", and is required if those are not set
    'servicetag'    => '',              // defaults to nothing
    'healthyonly'   => true,            // defaults to true
    'queryoptions'  => null,            // optionally allows setting of a [QueryOptions](https://github.com/dcarbone/php-consul-api/blob/master/src/QueryOptions.php) object to use in requests
    'usernamekey'   => '',              // full path to KV store key containing username, mutually exclusive with "username"
    'passwordkey'   => '',              // full path to KV store key containing password, mutually exclusive with "password"
    'appidkey'      => '',              // full path to KV store key containing appid, mutually exclusive with "appid"
    'appcodekey'    => '',              // full path to KV store key containing appcode, mutually exclusive with "appcode"
];
```

This class accepts an optional 3rd argument of an instance of
[Consul](https://github.com/dcarbone/php-consul-api/blob/master/src/Consul.php).  If this is not defined, a new instance
will be created using default config values.

### HTTP Client

Both config classes take an optional 2nd argument of any class implementing
[GuzzleHttp ClientInterface](https://github.com/guzzle/guzzle/blob/6.3.0/src/ClientInterface.php).  If this is not
defined, a new instance of [GuzzleHttp Client](https://github.com/guzzle/guzzle/blob/6.3.0/src/Client.php) will be used.

### Under Development

This library is still under active development.  Below is a table of
the various Controllers and the development state:

|Controller|State|
|---|---|
|[Addresses](./src/Chain/AddressesController.php)|Partial|
|[Circuits](./src/Chain/CircuitsController.php)|
|[Devices](./src/Chain/DevicesController.php)|
|[L2Domains](./src/Chain/L2DomainsController.php)|
|[Prefix](./src/Chain/PrefixController.php)|
|[Sections](./src/Chain/SectionsController.php)|
|[Subnets](./src/Chain/SubnetsController.php)|Partial|
|[Tools](./src/Chain/ToolsController.php)|
|[User](./src/Chain/UserController.php)|Full|
|[Vlans](./src/Chain/VlansController.php)|
|[Vrfs](./src/Chain/VrfsController.php)|

### General Usage

All operations follow the same basic flow:

```php
$client->Controller()->METHOD()->Action()->execute();
```

There are some Controller's whose `METHOD` is also directly executable (
`$client->User()->GET()->execute()`, for example)

Every step in that chain is a `Part`, and only parts that implement the
[ExecutablePart](./src/Part/ExecutablePart.php) interface will carry the
`execute` method.